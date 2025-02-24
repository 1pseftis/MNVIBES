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
$kit = $_GET['kit_name'];
$s_num = 0; 
$s_num2 = 0;
foreach ($servers as $item) {
	if($item['title']==$server) {
		$s_num++;
	}
}
foreach ($shop['cats']['kits']['kits'] as $item) {
	if($item['id']==$kit) {
		$s_num2++;
	}
}
if($s_num!=1 || $s_num2!=1){
	die('<script>hz();</script>');
}

	/*Подключение к RCON*/
	use Thedudeguy\Rcon;
	$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);
	if (!$rcon->connect()) {
		die("<script>not_connect();</script>");
	}
	/*Проверка человека на сервере*/
	$players = $rcon->CommandRead('online');
	$onlines = explode(':', $players['body']);
		if (strpos($players['body'], ':') !== false){
			$users = explode(', ', $onlines[1]);
			foreach($users as $user){
				$simp = explode('§', $user);
				foreach($simp as $arg){
					$repl = substr($arg, 0, 1);
					$user = str_replace('§'.$repl, '', $user);
				}
				$user = preg_replace('%[^A-Za-zА-Яа-я0-9]%', '', $user);
				$all_users[] = $user;
			}
			if (in_array($login, $all_users)) {
				
			}else{
				die('<script>not_serverv2()</script>');
			}
		}else{
			die('<script>not_serverv2()</script>');
		}
		$command_send = $shop['cats']['kits']['kit_command_cart'];
		$command_send = str_replace('{username}', $login, $command_send);
		$command_send = str_replace('{namekit}', $shop['cats']['kits']['kits'][$kit]['id'], $command_send);
		
		if ($money<$shop['cats']['kits']['kits'][$kit]['cost']) {
			die('<script>pay_minus()</script>');
		} else {
			$newbal = $money - $shop['cats']['kits']['kits'][$kit]['cost'];
			$setbal = $mysqli->query("UPDATE dle_users SET `money`='$newbal' WHERE name='$login'");
			if($setbal){
				$rcon->sendCommand($command_send);
				$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$login','$server','7','за ".$shop['cats']['kits']['kits'][$kit]['cost']." монет','".time()."','Покупка набора <b>".$shop['cats']['kits']['kits'][$kit]['title']."</b> на сервере <b>".$server."</b>')");
				die("<script>kit_succes('".$shop['cats']['kits']['kits'][$kit]['title']."', '".$server."');</script>");
			}
		}
?>