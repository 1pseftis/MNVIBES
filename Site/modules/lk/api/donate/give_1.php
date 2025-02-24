<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
//Vars
$server = $_POST['server'];
//Code
use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$server][rcon_host], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);
if (!$rcon->connect()) {
    die("<script>not_connect();</script>");
}
$inf_don = "infinity_donate_".$server;
$infinity_donate=$mysqli->query("SELECT `infinity_donate_".$server."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$inf_don;
$don_1 = "donate_".$server;
$donate_1=$mysqli->query("SELECT `donate_".$server."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$don_1;

if ($donates[$donate_1][cost]>$donates[$infinity_donate]['cost']) {
	die('<script>give_error()</script>');
} else {
	if ($rcon->connect()) { 
	$rcon->sendCommand("pex user ".$login." group set ".$infinity_donate);
    $rcon->sendCommand("coloredtags reload");
    die('<script>give_success()</script>');	
	} else {
		die('<script>hz()</script>');
	}
}
?>