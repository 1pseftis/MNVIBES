<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
//Vars
$donate = $_POST['donate'];
$server = $_POST['server'];
$period = $_POST['period'];
//Code
$balance=$mysqli->query("SELECT `money` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->money;
$inf_don = "infinity_donate_".$server;
$infinity_donate=$mysqli->query("SELECT `infinity_donate_".$server."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$inf_don;
$don_1 = "donate_".$server;
$donate_1=$mysqli->query("SELECT `donate_".$server."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$don_1;
$price = $donates[$donate]['cost'] * $donates[$donate]['price'] * $periods[$period]['costx'] *  $periods[$period][id];
$cost = ceil($donates[$donate]['cost'] * $periods[$period]['costx'] *  $periods[$period]['id'] - $price);

use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);
if (!$rcon->connect()) {
    die("<script>not_connect();</script>");
}
if ($balance<$cost) {
	die('<script>pay_minus()</script>');
} else {
    if ($rcon->connect()) {  
	    $newbal= $balance-$cost;
        $setbal = $mysqli->query("UPDATE dle_users SET `money`='$newbal' WHERE name='$login'");
	    if($setbal){
			if ($periods[$period][time]==-1) {
  			  $dontime = "-1";
				if ($infinity_donate == "") {
  			      $mysqli->query("UPDATE dle_users SET `infinity_donate_".$server."`='$donate' WHERE name='$login'");
				} else {
					if ($donates[$donate]['cost']>$donates[$infinity_donate]['cost'] || $donates[$donate]['cost']>$donates[$donate_1]['cost']) {
						$mysqli->query("UPDATE dle_users SET `infinity_donate_".$server."`='$donate' WHERE name='$login'");
					} else {
						die('<script>infinity_error()</script>');
	 			   }
				}
			} else {
				if ($donates[$donate]['cost']>$donates[$infinity_donate]['cost'] || $donates[$donate]['cost']>$donates[$donate_1]['cost']) {
						$dontime = time() + $periods[$period][time]*86400;
				        $setdon = $mysqli->query("UPDATE dle_users SET `donate_".$server."`='$donate' WHERE name='$login'");
					} else {
						die('<script>infinity_error()</script>');
	 			   }				

			}
			$settime = $mysqli->query("UPDATE dle_users SET `donate_time_".$server."`='$dontime' WHERE name='$login'");
			if ($settime) {
                $rcon->sendCommand("pex user ".$login." group set ".$donate);
                $rcon->sendCommand("coloredtags reload");
			    die('<script>buy_success()</script>');
			}
		} else {
			echo $periods[$period][time];
			die('<script>hz()</script>');
		}
    } else {
        die('<script>not_connect()</script>');
    }
}
?>