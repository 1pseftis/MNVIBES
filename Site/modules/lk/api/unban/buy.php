<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
//Code
$unban_cost = $unban_data['cost'] + $unban_data['cost_plus']*$unban;
$newbal= $money-$unban_cost;
$unban++;
if ($money<$unban_cost) {
	die('<script>ub_minus()</script>');
} else {
	$setbal = $mysqli->query("UPDATE dle_users SET `money`='$newbal' WHERE name='$login'");
    $setban_un = $mysqli->query("UPDATE dle_users SET `unban`='$unban' WHERE name='$login'");
	if($setbal && $setban_un){
        if ($baned == "yes") {
            $mysqli->query("DELETE FROM banlist WHERE name='$login'");
			die('<script>ub_success()</script>');
        } else {
			die('<script>ub_error()</script>');
        }			
	}
}
?>