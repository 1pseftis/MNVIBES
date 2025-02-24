<?php
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
$nick = $_GET['nick'];
$secret = 'fio5n4gion546';
$hash = md5(md5($nick . $secret . 'mcrate'));

$econs =  $mysqli->query("select econs from dle_users where name='".$nick."'")->fetch_object()->econs;
$cases_1 =  $mysqli->query("select cases from dle_users where name='".$nick."'")->fetch_object()->cases;
$votes =  $mysqli->query("select votes from dle_users where name='".$nick."'")->fetch_object()->votes;

if ($hash!=$_GET['hash']) {
	die('error hash');
} else {
  $newecons = $econs + 8000; 
  $newcases = $cases_1 + 1;
  $newvotes = $votes + 1;			
  $mysqli->query("UPDATE dle_users SET `votes`='$newvotes' WHERE name='".$nick."'");
  $mysqli->query("UPDATE dle_users SET `votes_time`='".time()."' WHERE name='".$nick."'");
  $mysqli->query("UPDATE dle_users SET `econs`='$newecons' WHERE name='".$nick."'");
  $mysqli->query("UPDATE dle_users SET `cases`='$newcases' WHERE name='".$nick."'");
}
