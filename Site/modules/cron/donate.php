<?php
//18:31:43
//17:25:27
use Thedudeguy\Rcon;
foreach ($servers as $server) {
	$name = $server['title'];
	$rcon = new Rcon($servers[$name]['rcon_host'], $servers[$name]['rcon_port'], $servers[$name]['rcon_password'], $servers[$name]['rcon_timeout']);
	$sql = "donate_time_".$name;
	$donaters=$mysqli->query("SELECT * FROM `dle_users` WHERE `donate_time_".$name."` != 0 ORDER BY `donate_time_".$name."` ASC");
	while($donater = $donaters->fetch_assoc()) {
		
		$dates = date("d-m-Y H:i:s", $donater['donate_time_'.$name]);   
		if($donater['donate_time_'.$name] < time()) {
			 echo"OK: ".$dates;
		}else{
			echo $donater['name']." time: ".$dates.' сейчас: '.time();
			echo"<br>";
		}
		
		//echo $donater['name'].": <b>".time().'</b>  => ';
		//print_r($donater['donate_time_'.$name]);
		//echo"<br>";
		if($donater['donate_time_'.$name]<time()) {
            if (!$rcon->connect()) {
				echo 'not_connect';
			} else {
				$rcon->sendCommand("pex user ".$donater['name']." group set default");
			    $mysqli->query("UPDATE dle_users SET `donate_".$name."`='' WHERE name='".$donater['name']."'");
			    $mysqli->query("UPDATE dle_users SET `donate_time_".$name."`='0' WHERE name='".$donater['name']."'");
                $mysqli->query("DELETE FROM `permissions` WHERE `name` LIKE '".$donater['uuid']."' AND `type` = 1");
			}
		} 
	}
	$donaters->free();
}