<script>
function rem_suc(name_rg, name, server) {
    Swal.fire({
        position: 'top',
        type: 'success',
        text: 'Вы удалили '+name+' из региона '+name_rg,
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
	$.ajax({
        url: "/modules/shop/script/page_rg.php",
		data: {
			shop_server: server,
			cat: "rg"
		},
        success: function(html){
			$("#shop_content").html(html);
        }
    });
}
function member_yes() {
    Swal.fire({
        position: 'top',
        type: 'error',
        text: 'Вы не можете удалить владельца!',
        showConfirmButton: false,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        timer: 1500
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
$query_u = $mysqli->query("SELECT * FROM `flare_regions` WHERE `server` LIKE '$server' AND `owner` LIKE '$login' ");
$rg_id = $_GET['rg_id'];
$member = $_GET['rem_member'];

$s_num = 0; 
$s_num2 = 0;

$query_u_2 = $mysqli->query("SELECT * FROM `flare_regions` WHERE `server` LIKE '$server' AND `owner` LIKE '$login' AND `name` LIKE '$rg_id' ");
$member_bd_sql = $mysqli->query("SELECT * FROM `dle_users` WHERE `name` = '".$member."' LIMIT 1");
$members_array_sql = $mysqli->query("SELECT * FROM `flare_regions` WHERE `server` LIKE '$server' AND `owner` LIKE '$login' AND `name` LIKE '$rg_id'");

while($item = $members_array_sql->fetch_array()) {
    $members_array = json_decode($item['members']);
}


while($item = $query_u_2->fetch_array()) {
    $owner = 'true';
	$owner_name = $item['owner'];
}
while($item = $member_bd_sql->fetch_array()) {
    $member_bd = 'true';
}

foreach ($servers as $item) {
	if($item['title']==$server) {
		$s_num++;
	}
}
$member_nick = 0;
foreach ($members_array as $item) {
	if($item==$member) {
		$member_nick++;
	}
}
if ($member==$owner_name) {
		die('<script>member_yes();</script>');
}
foreach ($shop['cats']['rg']['regions'][$server] as $item) {
	if($item['region']==$rg_id) {
		$s_num2++;
	}
}
if($s_num!=1 || $s_num2!=1 || $member_nick == 0){
	if ($owner != 'true') {
	    die('<script>hz();</script>');
	}
}

$ge_id_num = 0;
/*foreach ($members_array as $item) {
	$ge_id_num++;
	if($item==$member) {
		unset($members_array[$ge_id_num]);
		echo $ge_id_num;
	}
}*/
if(($key = array_search($member,$members_array)) !== FALSE){
	     unset($members_array[$key]);
}

use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);
if ($rcon->connect()) {
	$members_array = json_encode($members_array);
    $mysqli->query("UPDATE flare_regions SET `members`='$members_array' WHERE name='$rg_id'");
	$rcon->sendCommand("rg remmember -w world ".$shop['cats']['rg']['regions'][$server][$rg_id]['region']." ".$member);
	die('<script>rem_suc("'.$shop['cats']['rg']['regions'][$server][$rg_id]['title'].'", "'.$member.'", "'.$server.'")</script>');
} else {
	die("<script>not_connect();</script>");
}