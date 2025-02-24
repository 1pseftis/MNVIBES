<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('max_execution_time', 300); //300 seconds = 5 minutes. In case if your CURL is slow and is loading too much (Can be IPv6 problem)

require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');

error_reporting(E_ALL);

define('OAUTH2_CLIENT_ID', '665143655354466324');
define('OAUTH2_CLIENT_SECRET', 'bKlC77pkiXFv05KaQsLjNLpHne99322t');

$authorizeURL = 'https://discordapp.com/api/oauth2/authorize';
$tokenURL = 'https://discordapp.com/api/oauth2/token';
$apiURLBase = 'https://discordapp.com/api/users/@me';


//Start the login process by sending the user to Discord's authorization page
// Start the login process by sending the user to Discord's authorization page
if(get('action') == 'login') {

  $params = array(
    'client_id' => OAUTH2_CLIENT_ID,
    'redirect_uri' => 'https://UniversalStudio.online/modules/api/discord_auth.php',
    'response_type' => 'code',
    'scope' => 'identify guilds'
  );

  // Redirect the user to Discord's authorization page
  header('Location: https://discordapp.com/api/oauth2/authorize' . '?' . http_build_query($params));
  die();
}


// When Discord redirects the user back here, there will be a "code" and "state" parameter in the query string
if(get('code')) {

  // Exchange the auth code for a token
  $token = apiRequest($tokenURL, array(
    "grant_type" => "authorization_code",
    'client_id' => OAUTH2_CLIENT_ID,
    'client_secret' => OAUTH2_CLIENT_SECRET,
    'redirect_uri' => 'https://UniversalStudio.online/modules/api/discord_auth.php',
    'code' => get('code')
  ));
  $logout_token = $token->access_token;
  $member = $mysqli->query("SELECT * FROM `dle_users` WHERE `discord_token` LIKE '" .$token->access_token . "' AND name != '$login'");
  $id_ds = 0;
  while($row = $member->fetch_assoc()) {
	    $id_ds++;
  } 
  if ($id_ds!=0) {
	  header('Location: https://UniversalStudio.online/cabinet?discord_error');
	  die();
  }
  $_SESSION['access_token'] = $token->access_token;
  $mysqli->query("UPDATE dle_users SET `discord_token`='" . $token->access_token . "' WHERE name='$login'");


  header('Location: ' . $_SERVER['PHP_SELF']);
}

if($discord_token!='false') {
  $user = apiRequest($apiURLBase);

  echo '<h3>Redirect</h3>';
  $mysqli->query("UPDATE dle_users SET `discord_username`='". $user->username ."' WHERE name='$login'");
  $mysqli->query("UPDATE dle_users SET `discord_id`='". $user->id ."' WHERE name='$login'");
  $mysqli->query("UPDATE dle_users SET `discord_discriminator`='". $user->discriminator ."' WHERE name='$login'");
  header('Location: https://UniversalStudio.online/cabinet?discord_success');
} else {
  echo '<h3>Redirect</h3>';
  echo '<p><a href="?action=login">Log In</a></p>';
}


if(get('action') == 'logout') {
  unset($_SESSION['access_token']);
  $mysqli->query("UPDATE dle_users SET `discord_token`='false' WHERE name='$login'");
  $mysqli->query("UPDATE dle_users SET `discord_username`='' WHERE name='$login'");
  $mysqli->query("UPDATE dle_users SET `discord_id`='0' WHERE name='$login'");
  $mysqli->query("UPDATE dle_users SET `discord_discriminator`='0' WHERE name='$login'");
  header('Location: https://UniversalStudio.online/cabinet?discord_logout');
  die();
}
function apiRequest($url, $post=FALSE, $headers=array()) {
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

  $response = curl_exec($ch);


  if($post)
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));

  $headers[] = 'Accept: application/json';

  if(session('access_token')) {
    $headers[] = 'Authorization: Bearer ' . session('access_token');
  }

  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $response = curl_exec($ch);
  //$parms = json_decode($response, true);
  return json_decode($response);
}

function get($key, $default=NULL) {
  return array_key_exists($key, $_GET) ? $_GET[$key] : $default;
}

function session($key, $default=NULL) {
  return array_key_exists($key, $_SESSION) ? $_SESSION[$key] : $default;
}

?>