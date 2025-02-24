<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');

//**СКРИПТ**//
$don = "donate_".$_GET['p_server'];
file_put_contents($_SERVER['DOCUMENT_ROOT'].'/test.txt', "SELECT `donate_".$_GET['p_server']."` FROM `dle_users` WHERE `name` LIKE '$login'");
$donate=$mysqli->query("SELECT `donate_".$_GET['p_server']."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$don;
if ($donate=='') {
	die('Игрок');
}
echo $donates[$donate]['title'];
?>