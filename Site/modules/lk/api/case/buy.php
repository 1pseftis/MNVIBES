<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
//Vars
$server = $_POST['server'];
$case = $_POST['casee'];
$amount = $_POST['amount'];
$ico = $_POST['ico'];
//Code
use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);

if (!$rcon->connect()) {
    die("<script>not_connect();</script>");
}
if (is_numeric($amount)) {
    $amount = ceil($_POST['amount']);
} else {
	die("<script>error_noname();</script>");
}

if ($ico == "money" || $ico == "coins") {
	if ($ico == "money") {
	    $cost = ceil($cases[$server][$case]['cost'] * $amount);
		$ico_title = "RUB";
		if ($money < $cost) {
			die('<script>money_error()</script>');
		} else {
			if ($rcon->connect()) {  
	            $newbal= $money-$cost;
   	            $setbal = $mysqli->query("UPDATE dle_users SET `money`='$newbal' WHERE name='$login'");
		         if($setbal){
					$rcon->sendCommand("jcases add ".$login." ".$cases[$server][$case]['title']." ".$amount);
					$rcon->sendCommand("m ".$login." &7вам выдан кейс \"&b".$cases[$server][$case]['title']."&7\" в количестве &b".$amount." &7штук");
			        die('<script>case_succes()</script>');
				}
			}
		}
	} else {
		$cost = ceil($cases[$server][$case]['cost'] * $case_coins_dableprice * $amount);
		$ico_title = "коинов";
		if ($coins < $cost) {
			die('<script>coins_error()</script>');
		} else {
			if ($rcon->connect()) {  
	            $newbal= $coins-$cost;
				if ($logined_on_server == 'yes') {
   	            $setbal = $mysqli->query("UPDATE fe_accounts SET `money`='$newbal' WHERE name='$login'");
		            if($setbal){
						$rcon->sendCommand("jcases add ".$login." ".$cases[$server][$case]['title']." ".$amount);
						$rcon->sendCommand("m ".$login." &7вам выдан кейс \"&b".$cases[$server][$case]['title']."&7\" в количестве &b".$amount." &7штук");
			            die('<script>case_succes()</script>');
					}
				} else {
				$setbal = $mysqli->query("INSERT INTO `fe_accounts`(`name`, `uuid`, `money`) VALUES ('$login','$uuid','$newbal')");
		            if($setbal){
						$rcon->sendCommand("jcases add ".$login." ".$cases[$server][$case]['title']." ".$amount);
						$rcon->sendCommand("m ".$login." &7вам выдан кейс \"&b".$cases[$server][$case]['title']."&7\" в количестве &b".$amount." &7штук");
			            die('<script>case_succes()</script>');
					}
				}
			}
		}
	}
} else {
	die('error');
}