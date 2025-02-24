<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$time_regen = time()-(86400*3);
$time = time();
$rg_regen=$mysqli->query("SELECT * FROM `flare_regions` WHERE `arenda` < $time_regen");
use Thedudeguy\Rcon;
while($item = $rg_regen->fetch_assoc()) {
	$rcon = new Rcon($servers[$item['server']]['rcon_host'], $servers[$item['server']]['rcon_port'], $servers[$item['server']]['rcon_password'], $servers[$item['server']]['rcon_timeout']);
    if ($rcon->connect()) {	   
		$rcon->sendCommand("rg remmember -w world ".$item['name'].' '.$item['owner']);
		            $config_hd = yaml_parse(file_get_contents($_SERVER["DOCUMENT_ROOT"].'/modules/shop/regions/HD/'.$item['server'].'/config.yml'));
					$config_hd[$shop['cats']['rg']['regions'][$item['server']][$item['name']]['hd']]['strings']['info']['text'][0] = "§7Владелец: §5(Свободно)";
					$config_hd['town_plot_0_1']['strings']['info']['text'][1] = "";
					$config_hd[$shop['cats']['rg']['regions'][$item['server']][$item['name']]['hd']]['strings']['info']['text'][2] = "§7Доступно для аренды";
					$config_hd[$shop['cats']['rg']['regions'][$item['server']][$item['name']]['hd']]['buttons']['bt']['text'] = "§5Купить";
					$config_hd[$shop['cats']['rg']['regions'][$item['server']][$item['name']]['hd']]['buttons']['bt']['command'] = "https://UniversalStudio.online/shop?cat=rg&server=DTM&region=".$item['name'];
					//print_r($config_hd);
					file_put_contents($_SERVER["DOCUMENT_ROOT"].'/modules/shop/regions/HD/'.$item['server'].'/config.yml', str_replace(  "1: ",  "y: ",  yaml_emit($config_hd,  YAML_UTF8_ENCODING)));
                    $rcon->sendCommand("wr reload");
					$rcon->sendCommand('bc Регион "'.$shop['cats']['rg']['regions'][$item['server']][$item['name']]['title']. '" добавлен в очередь на регенерацию.');
	                $mysqli->query("INSERT INTO `flare_regions_regen`(`id`, `name`, `admin`, `server`) VALUES ('0','".$item['name']."','Система', '".$item['server']."')");
	} 
	$mysqli->query("DELETE FROM `flare_regions` WHERE `id` = ".$item['id']);
}


$rg=$mysqli->query("SELECT * FROM `flare_regions` WHERE `arenda` < $time");


while($item = $rg->fetch_assoc()) {
	$rcon = new Rcon($servers[$item['server']]['rcon_host'], $servers[$item['server']]['rcon_port'], $servers[$item['server']]['rcon_password'], $servers[$item['server']]['rcon_timeout']);
    if ($rcon->connect()) {	   
	    $rcon->sendCommand("rg remmember -w world ".$item['name']." -a");
		//echo "rg remmember -w world ".$item['name']." -a";
	}
}

$rg_regen_limit=$mysqli->query("SELECT * FROM `flare_regions_regen` ORDER BY `flare_regions_regen`.`id` ASC LIMIT 1");
while($item = $rg_regen_limit->fetch_assoc()) {
	if ((file_get_contents('flare.data')+(60*10))<time()) {
		$rcon = new Rcon($servers[$item['server']]['rcon_host'], $servers[$item['server']]['rcon_port'], $servers[$item['server']]['rcon_password'], $servers[$item['server']]['rcon_timeout']);
        if ($rcon->connect()) {	   
	        $rcon->sendCommand($shop['cats']['rg']['cmd']." ".$shop['cats']['rg']['schematic_dir'].$shop['cats']['rg']['regions'][$item['server']][$item['name']]['schematic'].' '.$shop['cats']['rg']['regions'][$item['server']][$item['name']]['args']);
			//echo $shop['cats']['rg']['cmd']." ".$shop['cats']['rg']['schematic_dir'].$item['name'].' '.$shop['cats']['rg']['regions'][$item['server']][$item['name']]['args'];
            $rcon->sendCommand('bc В регионе "'.$shop['cats']['rg']['regions'][$item['server']][$item['name']]['title']. '" запущен процесс регенерации.');
	        $mysqli->query("DELETE FROM `flare_regions_regen` WHERE `id` = ".$item['id']);
			file_put_contents('flare.data', time());
		}
		echo 'regen';
	}
}