<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
//Code
$server = $_GET['server'];
$change = $_GET['change'];

$names=$mysqli->query("SELECT `players` FROM `server_online` WHERE `server` LIKE '$server'")->fetch_object()->players;

use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);

if (preg_match("/\b".$login."\b/i", $names) && $rcon->connect()) {		
    if ($rcon->connect()) {  
        $rcon->sendCommand("spawn ".$login);
		die("<script>
		     tp_succes();
		     </script>");
    } else {
	    die("<script>
			  not_connect();
			  </script>");
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