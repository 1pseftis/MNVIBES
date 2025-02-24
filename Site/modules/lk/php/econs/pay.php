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

$newbal= $econs-$sum;
if ($econs<$sum) {
	die('<script>ex_minus()</script>');
} else {
	$setbal = $mysqli->query("UPDATE dle_users SET `econs`='$newbal' WHERE name='$login'");
	if($setbal){
			$member_bal =  $mysqli->query("select econs from dle_users where name='$ingame'")->fetch_object()->econs;
			$new_member = $member_bal+$sum;
            $mysqli->query("UPDATE dle_users SET `econs`='$new_member' WHERE name='$ingame'");
			$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$login','-1','2','$sum','".time()."','Перевод $ игроку <b>$ingame</b>')");
			$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$ingame','-1','3','$sum','".time()."','Поступление $ от игрок <b>$login</b>')");
			die('<script>pay_success()</script>');
        }			
	}
?>