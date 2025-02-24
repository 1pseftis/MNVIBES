<?php
//**СОЗДАНИЕ ПЕРЕМЕННЫХ**//

//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
session_start();

//**СКРИПТ**//
$id_user = $_SESSION['dle_user_id'];
$login = $mysqli->query("select name from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->name; //Получение Логина
$money =  $mysqli->query("select money from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->money;
$econs =  $mysqli->query("select econs from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->econs;
$uuid =  $mysqli->query("select uuid from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->uuid;
$votes =  $mysqli->query("select votes from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->votes;
$vote_top =  $mysqli->query("SELECT COUNT(DISTINCT votes) as vote_top FROM dle_users WHERE votes >= (SELECT votes FROM dle_users WHERE name='$login' LIMIT 1) ")->fetch_object()->vote_top;
$cases_1 =  $mysqli->query("select cases from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->cases;
$group =  $mysqli->query("select user_group from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->user_group;
$reg_date =  $mysqli->query("select reg_date from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->reg_date;
$referal =  $mysqli->query("select referal from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->referal;
$reg_date =  $mysqli->query("select reg_date from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->reg_date;
$playtime =  $mysqli->query("select playtime from playTime where username='".$login."'")->fetch_object()->playtime;
$referal_active =  $mysqli->query("select referal_active from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->referal_active;
$radio_admin =  $mysqli->query("select radio_admin from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->radio_admin;
if ($group == 1) {
	$is_admin = true;
}

//DISCORD 
$discord_token = $mysqli->query("select discord_token from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->discord_token;
if ($discord_token!="false") {
	$discord_id = $mysqli->query("select discord_id from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->discord_id;
	$discord_username = $mysqli->query("select discord_username from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->discord_username;
	$discord_discriminator = $mysqli->query("select discord_discriminator from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->discord_discriminator;
}
///////////

//IP
function user_ip() {
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

//**ПОСТ-ИНИЦИАЛИЗАЦИЯ**//
//$mysqli->close();
?>