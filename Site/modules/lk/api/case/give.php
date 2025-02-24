<?php
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
$case = $_POST['casee'];
$server = $_POST['server'];
$open_time = time() + 86400;

use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);
if (!$rcon->connect()) {
    die("<script>not_connect();</script>");
}
if ($rcon->connect()) {  
	if (time() > $everyday_case) {
		$settime = $mysqli->query("UPDATE dle_users SET `everyday_case`='".$open_time."' WHERE name='$login'");
		if($settime) {
		    $rcon->sendCommand("jcases add ".$login." ".$everyday_case_name." 1");
		    $rcon->sendCommand("m ".$login." &7вам выдан кейс \"&b".$everyday_case_name."&7\" в количестве &b1 &7штук");
		    die('<script>case_get(); case_page()</script>');
		}
    }
}
