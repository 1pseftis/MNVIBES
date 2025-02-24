<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$config_hd = yaml_parse(file_get_contents('HD/DTM/config.yml'));
$config_hd[$shop['cats']['rg']['regions']['DTM']['town_plot_0_1']['hd']]['strings']['info']['text'][2] = "§7Арендован до: §5".date('d.m.Y', time());
$config_hd[$shop['cats']['rg']['regions']['DTM']['town_plot_0_1']['hd']]['buttons']['bt']['text'] = "§5Управлять";
$config_hd[$shop['cats']['rg']['regions']['DTM']['town_plot_0_1']['hd']]['buttons']['bt']['command'] = "https://six.u-studio.su/shop?cat=rg&server=DTM";
					
echo yaml_emit($config_hd);
//echo 'ddf';