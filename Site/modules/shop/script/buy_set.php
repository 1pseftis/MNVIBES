<script>
function kit_succes(kit_name, server) {
    Swal.fire({
        position: 'top',
        type: 'success',
        text: 'Вам был выдан кит '+kit_name+' на сервере '+server,
        showConfirmButton: false,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        timer: 5500
    })
}
</script>
<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
//Code
$server = $_GET['server'];

$title = $mysqli->query("SELECT name FROM `flare_shop` WHERE `id` = ".$_GET['id'])->fetch_object()->name;
$cost = $mysqli->query("SELECT price FROM `flare_shop` WHERE `id` = ".$_GET['id'])->fetch_object()->price;
$set_id = $mysqli->query("SELECT block_id FROM `flare_shop` WHERE `id` = ".$_GET['id'])->fetch_object()->block_id;

$cost2 = ceil($cost)/2;

$online=$mysqli->query("SELECT * FROM `server_online_$server` WHERE `player` LIKE '$login'")->fetch_object()->online;

use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);

if($online == 1) {

    if ($rcon->connect()) {  
		if ($money<$cost2) {
			die('<script>pay_minus()</script>');
		} else {
			$newbal = $money - $cost2;
			$setbal = $mysqli->query("UPDATE dle_users SET `money`='$newbal' WHERE name='$login'");
			if($setbal){
				$rcon->sendCommand("kit ".$set_id." ".$login);
				$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$login','$server','6','1 набор','".time()."','Покупка набора <b>".$title."</b> на сервере <b>".$_GET['server']."</b>')");
				die("<script>kit_succes('".$title."', '".$server."');</script>");
			}
		}
    } else {
	    die("<script>not_connect();</script>");
	}
} else {
	die("<script>not_serverv2();</script>");
}
?>