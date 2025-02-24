<?php
if (empty($_POST['player']) || empty($_POST['hash'])) {
	$return = array(
		'type' => 'error',
		'text' => 'Empty query parameter'
	);
	exit(json_encode($return));
}
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
$nick = $_POST['player'];
$open_key = 'YITrzrnnZbfRLI61OU8tpxPzhd5HYkWN';
$secret_key = 'yt6DknvzmOsIVJhCKxvllpj5wwOJG0o6';
$hash = md5(md5($nick . $secret . 'mcrate'));
$nick = $mysqli->real_escape_string($_POST['player']);
if ($_POST['hash'] != md5(sha1($nick.':'.$secret_key))) {
	$return = array(
		'type' => 'error',
		'text' => 'Incorrect hash'
	);
	exit(json_encode($return));
}


$econs =  $mysqli->query("select econs from dle_users where name='".$nick."'")->fetch_object()->econs;
$cases_1 =  $mysqli->query("select cases from dle_users where name='".$nick."'")->fetch_object()->cases;
$votes =  $mysqli->query("select votes from dle_users where name='".$nick."'")->fetch_object()->votes;


  $newecons = $econs + 8000; 
  $newcases = $cases_1 + 1;
  $newvotes = $votes + 1;			
  $mysqli->query("UPDATE dle_users SET `votes`='$newvotes' WHERE name='".$nick."'");
  $mysqli->query("UPDATE dle_users SET `votes_time`='".time()."' WHERE name='".$nick."'");
  $mysqli->query("UPDATE dle_users SET `econs`='$newecons' WHERE name='".$nick."'");
  $mysqli->query("UPDATE dle_users SET `cases`='$newcases' WHERE name='".$nick."'");
  $return = array(
		'type' => 'success',
		'text' => 'Updated'
  );
  exit(json_encode($return));