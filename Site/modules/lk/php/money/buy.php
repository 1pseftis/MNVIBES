<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Code
$sum = ceil($_POST['sum']);
if ($sum<=0) {
	die('<script>ex_error()</script>');
}

$newbal= $money-$sum;
if ($money<$sum) {
	die('<script>ex_minus()</script>');
} else {
	$setbal = $mysqli->query("UPDATE dle_users SET `money`='$newbal' WHERE name='$login'");
	if($setbal){
			$coins = $econs+$sum*$curs['coins'];
            $mysqli->query("UPDATE dle_users SET `econs`='$coins' WHERE name='$login'");
			die('<script>ex_success()</script>');
        }			
	}
?>