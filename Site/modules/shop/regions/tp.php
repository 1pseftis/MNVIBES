<script>
function tp_succes(name, server) {
    Swal.fire({
        position: 'top',
        type: 'success',
        text: 'Вы были телепортрованны на регион '+name+' на сервере '+server,
        showConfirmButton: false,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        timer: 3000
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
$query = $mysqli->query("SELECT * FROM flare_regions");
$server = $_GET['server'];
$rg_id = $_GET['rg_id'];
$s_num = 0; 
$s_num2 = 0;
$s_num3 = 0;

foreach ($servers as $item) {
	if($item['title']==$server) {
		$s_num++;
	}
}
foreach ($shop['cats']['rg']['regions'][$server] as $item) {
	if($item['region']==$rg_id) {
		$s_num2++;
	}
}
while($item = $query->fetch_array()) {
  foreach ($shop['cats']['rg']['regions'][$server] as $region) {
	if ($item['name']==$rg_id && $region['region']==$rg_id)
	    $s_num3++;
  }
}
if($s_num!=1 || $s_num2!=1){
	die('<script>hz();</script>');
}

$online=$mysqli->query("SELECT * FROM `server_online_$server` WHERE `player` LIKE '$login'")->fetch_object()->online;

use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);
if($online == 1) {
    if ($rcon->connect()) {  
				$rcon->sendCommand("tp ".$login." ".$shop['cats']['rg']['regions'][$server][$rg_id]['tp']);
				die("<script>tp_succes('".$shop['cats']['rg']['regions'][$server][$rg_id]['title']."', '".$server."');</script>");
    } else {
	    die("<script>not_connect();</script>");
	}
} else {
	die("<script>not_serverv2();</script>");
}
?>