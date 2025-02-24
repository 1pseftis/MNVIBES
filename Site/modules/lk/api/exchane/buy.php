<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
//Code
$sum = ceil($_POST['sum']);
if ($sum<=0) {
	die('<script>ex_error()</script>');
}

$newbal= $money-$sum;
$fe = $mysqli->query("SELECT * FROM `fe_accounts` WHERE `name` LIKE '%$login%'");
$fe_num = 0;
if ($money<$sum) {
	die('<script>ex_minus()</script>');
} else {
	$setbal = $mysqli->query("UPDATE dle_users SET `money`='$newbal' WHERE name='$login'");
	if($setbal){
		while($row = $fe->fetch_assoc()) {
			$fe_num++;
		}
        if ($fe_num == 1) {
			$coins = $coins+$sum*$curs['coins'];
            $mysqli->query("UPDATE fe_accounts SET `money`='$coins' WHERE name='$login'");
			die('<script>ex_success()</script>');
        } else {
			$coins = $coins+$sum*$curs['coins'];
            $mysqli->query("INSERT INTO `fe_accounts`(`name`, `uuid`, `money`) VALUES ('$login','$uuid','$coins')");
			die('<script>ex_success()</script>');
        }			
	}
}
?>