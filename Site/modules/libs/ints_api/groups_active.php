<?php
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
$num=0;
foreach ($servers as $server) {
$don = "donate_".$server['title'];
$dont = "donate_time_".$server['title'];
$donate=$mysqli->query("SELECT `donate_".$server['title']."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$don;
$donatet=$mysqli->query("SELECT `donate_time_".$server['title']."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$dont;
if ($donates[$donate]['title']!="") {
	$num++;
	if ($num>1) {
		echo ', ';
	}
	echo $donates[$donate]['title'].' ('.$server['title'].', до '.date('d.m.Y', $donatet).')';
}
}
if ($num==0) {
	die('Нету');
}
