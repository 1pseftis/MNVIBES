<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Code
$ingame = $_POST['ingame'];
$sum = ceil($_POST['sum']);
if ($sum<=0) {
	die('<script>ex_error()</script>');
}
$member = $mysqli->query("SELECT * FROM `dle_users` WHERE `name` LIKE '$ingame'");
$member_num = 0;
while($row = $member->fetch_assoc()) {
	$member_num++;
}
if ($member_num <= 0) {
	die('<script>ex_not_member()</script>');
}

$newbal= $money-$sum;
if ($money<$sum) {
	die('<script>ex_minus()</script>');
} else {
	$setbal = $mysqli->query("UPDATE dle_users SET `money`='$newbal' WHERE name='$login'");
	if($setbal){
			$member_bal =  $mysqli->query("select money from dle_users where name='$ingame'")->fetch_object()->money;
			$new_member = $member_bal+$sum;
            $mysqli->query("UPDATE dle_users SET `money`='$new_member' WHERE name='$ingame'");
			$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$login','-1','0','$sum','".time()."','Перевод монет игроку <b>$ingame</b>')");
			$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$ingame','-1','1','$sum','".time()."','Поступление монет от игрок <b>$login</b>')");
			die('<script>pay_success()</script>');
        }			
	}
?>