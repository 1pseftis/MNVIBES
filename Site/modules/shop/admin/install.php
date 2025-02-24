<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
define ('BLOCKSHOP', true );
include ('config.php');
mysqli_query("CREATE TABLE IF NOT EXISTS `{$btable}` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `block_id` varchar(11) COLLATE utf8_general_ci NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL DEFAULT '0',
  `name` varchar(35) CHARACTER SET utf8 NOT NULL,
  `action` int(1) NOT NULL DEFAULT '0',
  `server` varchar(40) COLLATE utf8_general_ci NOT NULL DEFAULT 'GetItem',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1 ;");
for($i = 0, $size = count($s); $i < $size; ++$i){
mysqli_query("CREATE TABLE IF NOT EXISTS `{$s[$i]}` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(16) NOT NULL,
  `item_id` varchar(100) NOT NULL,
  `item_amount` int(11) NOT NULL,
  `img` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");}
echo 'Вроде все! Теперь удалите скрипт!';
?>