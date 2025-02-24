<script>
function delete_success() {
    Swal.fire({
		position: 'top',
        type: 'success',
        title: 'Установлен стандартный префикс',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
	    showConfirmButton: false,
        timer: 1500
    })
}
</script>
<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
//Code
$s_num = 0;
foreach ($servers as $server) {
	if($server['title']==$_POST['p_server']) {
		$s_num++;
	}
}
if($s_num!=1){
	die('<script>ex_error()</script>');
}

use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$_POST['p_server']]['rcon_host'], $servers[$_POST['p_server']]['rcon_port'], $servers[$_POST['p_server']]['rcon_password'], $servers[$_POST['p_server']]['rcon_timeout']);
if (!$rcon->connect()) {
    die('<script>not_connect();</script>');
}

if($servers[$_POST['p_server']]['chat_prefix_suffix_online']){
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
					die('<script>user_not_found()</script>');
				}
			}else{
				die('<script>user_not_found()</script>');
			}
}
$command_send = $servers[$_POST['p_server']]['chat_removeprefix_command'];
$command_send = str_replace('{username}', $login, $command_send);
$rcon->sendCommand($command_send);

$command_send = $servers[$_POST['p_server']]['chat_removesuffix_command'];
$command_send = str_replace('{username}', $login, $command_send);
$rcon->sendCommand($command_send);

die('<script>delete_success()</script>');