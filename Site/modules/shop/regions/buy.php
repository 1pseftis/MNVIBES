<script>
function buy_succes(name, server) {
    Swal.fire({
        position: 'top',
        type: 'success',
        text: 'Вы успешно купили регион '+name+' на сервере '+server,
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
function buy_succes_add(name, server) {
    Swal.fire({
        position: 'top',
        type: 'success',
        text: 'Вы успешно продлили регион '+name+' на сервере '+server,
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
function rg_true(server) {
    Swal.fire({
        position: 'top',
        type: 'error',
        text: 'У вас уже есть купленный регион на сервере '+server,
        showConfirmButton: false,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        timer: 5000
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
$period = $_GET['period'];
$rg_id = $_GET['rg_id'];
$type = $shop['cats']['rg']['periods'][$period]['type'];
$time = time()+(86400*$shop['cats']['rg']['periods'][$period]['time']);

$query_u_2 = $mysqli->query("SELECT * FROM `flare_regions` WHERE `server` LIKE '$server' AND `owner` LIKE '$login' AND `name` LIKE '$rg_id' ");

while($item = $query_u_2->fetch_array()) {
	$time = $item['arenda']+(86400*$shop['cats']['rg']['periods'][$period]['time']);
    $add_time = 'true';
}
echo $add_time;
if ($type==1) {
	$cost = $shop['cats']['rg']['regions'][$server][$rg_id]['cost_money']*$shop['cats']['rg']['periods'][$period]['costx'];
}  elseif ($type==2) {
	$cost = $shop['cats']['rg']['regions'][$server][$rg_id]['cost_econs']*$shop['cats']['rg']['periods'][$period]['costx'];
} else {
	die();
}
$s_num = 0; 
$s_num2 = 0;
$s_num3 = 0;
$region_owner = false;

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
if($s_num!=1 || $s_num2!=1 || $s_num3!=0){
	if ($add_time != 'true') {
	    die('<script>hz();</script>');
	}
}

while($item = $query_u->fetch_array()) {
	if ($add_time != 'true') {
        die('<script>rg_true("'.$server.'")</script>');
	}
}

$online=$mysqli->query("SELECT * FROM `server_online_$server` WHERE `player` LIKE '$login'")->fetch_object()->online;

use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);
if($online == 1) {	
    if ($rcon->connect()) { 
        if ($type==1) {	
	        if ($money<$cost) {
			    die('<script>pay_minus()</script>');
		    } else {
			    $newbal = $money - $cost;
			    $setbal = $mysqli->query("UPDATE dle_users SET `money`='$newbal' WHERE name='$login'");
			    if($setbal){
				    $rcon->sendCommand("rg addmember -w world ".$shop['cats']['rg']['regions'][$server][$rg_id]['region']." ".$login);
				    //$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$login','$server','7','за ".$shop['cats']['kits']['kits'][$kit]['cost']." монет','".time()."','Покупка набора <b>".$shop['cats']['kits']['kits'][$kit]['title']."</b> на сервере <b>".$server."</b>')");
				    if ($add_time != 'true') {
					    $mysqli->query("INSERT INTO `flare_regions`(`id`, `name`,`server`, `owner`, `members`, `arenda`, `regen`, `date`) VALUES ('0','$rg_id','$server','$login','[]','$time','$time','$time')");
					    $config_hd = yaml_parse(file_get_contents('HD/DTM/config.yml'));
					    $config_hd[$shop['cats']['rg']['regions'][$server][$rg_id]['hd']]['strings']['info']['text'][0] = "§7Владелец: §5".$login;
					    $config_hd['town_plot_0_1']['strings']['info']['text'][1] = "";
					    $config_hd[$shop['cats']['rg']['regions'][$server][$rg_id]['hd']]['strings']['info']['text'][2] = "§7Арендован до: §5".date('d.m.Y', $time);
					    $config_hd[$shop['cats']['rg']['regions'][$server][$rg_id]['hd']]['buttons']['bt']['text'] = "§5Управлять";
					    $config_hd[$shop['cats']['rg']['regions'][$server][$rg_id]['hd']]['buttons']['bt']['command'] = "https://six.u-studio.su/shop?cat=rg&server=DTM";
					    file_put_contents('HD/DTM/config.yml', str_replace(  "1: ",  "y: ",  yaml_emit($config_hd,  YAML_UTF8_ENCODING)));
					    $rcon->sendCommand("wr reload");
					    die("<script>buy_succes('".$shop['cats']['rg']['regions'][$server][$rg_id]['title']."', '".$server."');</script>");
			        } else {
						$mysqli->query("UPDATE flare_regions SET `arenda`='$time' WHERE name='$rg_id'");
						die("<script>buy_succes_add('".$shop['cats']['rg']['regions'][$server][$rg_id]['title']."', '".$server."');</script>");
					}
					
				}
			}
		} elseif ($type==2) {
			if ($econs<$cost) {
			    die('<script>pay_minus()</script>');
		    } else {
			    $newbal = $econs - $cost;
			    $setbal = $mysqli->query("UPDATE dle_users SET `econs`='$newbal' WHERE name='$login'");
			    if($setbal){
				    $rcon->sendCommand("rg addmember -w world ".$shop['cats']['rg']['regions'][$server][$rg_id]['region']." ".$login);
				    //$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$login','$server','7','за ".$shop['cats']['kits']['kits'][$kit]['cost']." монет','".time()."','Покупка набора <b>".$shop['cats']['kits']['kits'][$kit]['title']."</b> на сервере <b>".$server."</b>')");
				    $mysqli->query("INSERT INTO `flare_regions`(`id`, `name`,`server`, `owner`, `members`, `arenda`, `regen`, `date`) VALUES ('0','$rg_id','$server','$login','[]','$time','$time','$time')");
					$config_hd = yaml_parse(file_get_contents('HD/DTM/config.yml'));
					$config_hd[$shop['cats']['rg']['regions'][$server][$rg_id]['hd']]['strings']['info']['text'][0] = "§7Владелец: §5".$login;
					//$config_hd['town_plot_0_1']['strings']['info']['text'][1] = "§7Аренда истекает:";
					$config_hd[$shop['cats']['rg']['regions'][$server][$rg_id]['hd']]['strings']['info']['text'][2] = "§7Арендован до: §5".date('d.m.Y', $time);
					$config_hd[$shop['cats']['rg']['regions'][$server][$rg_id]['hd']]['buttons']['bt']['text'] = "§5Управлять";
					$config_hd[$shop['cats']['rg']['regions'][$server][$rg_id]['hd']]['buttons']['bt']['command'] = "https://six.u-studio.su/shop?cat=rg&server=DTM";
					file_put_contents('HD/DTM/config.yml', str_replace(  "1: ",  "y: ",  yaml_emit($config_hd,  YAML_UTF8_ENCODING)));
					$rcon->sendCommand("wr reload");
					die("<script>buy_succes('".$shop['cats']['rg']['regions'][$server][$rg_id]['title']."', '".$server."');</script>");
			    }
			}
		}
    } else {
	    die("<script>not_connect();</script>");
	}
} else {
	die("<script>not_serverv2();</script>");
}
?>