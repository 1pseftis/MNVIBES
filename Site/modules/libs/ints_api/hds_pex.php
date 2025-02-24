<?php
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');

foreach ($servers as $server) {
$don = "donate_".$server['title'];
$donate=$mysqli->query("SELECT `donate_".$server['title']."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$don;
if ($donates[$donate]['hd_skin']=="true") {
	$hd_skin = 1;
}
}
if ($hd_skin == 1) {
	die('Есть');
} else {
	die('Нету');
}