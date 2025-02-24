<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Vars
$sum = $_GET['sum'];

$order_id = $mysqli->query('SELECT id FROM `flare_history` ORDER BY `id` DESC LIMIT 1')->fetch_object()->id;
$time = time()+2505600;
$order_amount = $sum;
$sign = md5($payment['merchant_id'].':'.$order_amount.':'.$payment['secret_word'].':'.$order_id);
$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$login','-1','-1','','".$time."','')");

echo "<script>window.scrollTo(0, 0); location.replace('http://www.free-kassa.ru/merchant/cash.php?oa=".$order_amount."&o=".$order_id."&s=".$sign."&m=".$payment['merchant_id']."&lang=ru&&us_userid=".$id_user."'); </script>";
?>