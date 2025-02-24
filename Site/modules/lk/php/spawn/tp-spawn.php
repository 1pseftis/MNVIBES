<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
//Code
$server = $_GET['server'];
$change = $_GET['change'];

//$names=$mysqli->query("SELECT `players` FROM `server_online` WHERE `server` LIKE '$server'")->fetch_object()->players;
$names = $login;

use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);
//file_put_contents("rcon.txt", json_encode($login)."\n\nNEW\n\n".json_encode($names));

if ($rcon->connect()) {
	
		$command_send = $servers[$server]['command_tp_to_spawn'];
		$command_send = str_replace('{username}', $login, $command_send);
		$rcon->sendCommand($command_send);
		
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
					die("<script>
					 tp_succes();
					</script>");
				}else{
					die("<script>returned();</script>");
				}
			}else{
				die("<script>returned();</script>");
			}
} else {
    if ($rcon->connect()) {
		if ($change > 0) {
			die("<script>
		      returned();
			  </script>");
		} else {
			die("<script>
		      close();
			  </script>");
		}
    } else {
		die("<script>
		      not_connect();
			  </script>");
	}
}