<script>
function change_success() {
    Swal.fire({
		position: 'top',
        type: 'success',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        title: 'Префикс успешно изменён',
	    showConfirmButton: false,
        timer: 1500
    })
}
function not_perms() {
    Swal.fire({
        position: 'top',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        type: 'error',
        text: 'Не достаточно прав для смены префикса!',
        showConfirmButton: false,
        timer: 3500
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
if (ceil($_POST['prefix'])<0 || ceil($_POST['prefix'])>15 || $_POST['prefix']=='') {
	die('<script>ex_error();</script>');
}
if (ceil($_POST['nick'])<0 || ceil($_POST['nick'])>15 || $_POST['nick']=='') {
	die('<script>ex_error();</script>');
}
if (ceil($_POST['msg'])<0 || ceil($_POST['msg'])>15 || $_POST['msg']=='') {
	die('<script>ex_error();</script>');
}
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

$don = "donate_".$_POST['p_server'];
$donate=$mysqli->query("SELECT `donate_".$_POST['p_server']."` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->$don;
if ($donates[$donate]['chat']=="true") {
	$chat_p = 1;	
}
if ($chat_p!=1) {
	die('<script>not_perms();</script>');
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

$PREFIX = '&f['.$chat['colors'][$_POST['prefix']]['mc'].$donates[$donate]['title']."&f]".$chat['colors'][$_POST['nick']]['mc'];
$command_send = $servers[$_POST['p_server']]['chat_prefix_command'];
$command_send = str_replace('{username}', $login, $command_send);
$command_send = str_replace('{prefix}', $PREFIX, $command_send);
$rcon->sendCommand($command_send);

$SUFFIX = $chat['colors'][$_POST['msg']]['mc'];
$command_send = $servers[$_POST['p_server']]['chat_suffix_command'];
$command_send = str_replace('{username}', $login, $command_send);
$command_send = str_replace('{prefix}', $SUFFIX, $command_send);
$rcon->sendCommand($command_send);

die('<script>change_success();</script>');

