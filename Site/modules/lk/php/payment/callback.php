<?php
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');


    $merchant_id = $payment['merchant_id'];
    $merchant_secret = $payment['secret_word'];

    $sign = md5($merchant_id.':'.$_POST['AMOUNT'].':'.$merchant_secret.':'.$_POST['MERCHANT_ORDER_ID']);

    if ($sign != $_POST['SIGN']) {
    die('wrong sign');
    }
	
	$userid = $_POST['us_userid'];
	$money =  $mysqli->query("select money from dle_users where user_id='".$userid."'")->fetch_object()->money;
	$login =  $mysqli->query("select name from dle_users where user_id='".$userid."'")->fetch_object()->name;
	$newmoney = $money + $_POST['AMOUNT'];			
	$semoney = $mysqli->query("UPDATE dle_users SET `money`='$newmoney' WHERE user_id='".$userid."'");
	if ($semoney) {
		$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$login','-1','9','ID: ".$_POST['MERCHANT_ORDER_ID']."','".time()."','Пополнение бланса на ".$_POST['AMOUNT']." монет')");
		die('YES');
	} else {
		die('MYSQL ERROR');
	}