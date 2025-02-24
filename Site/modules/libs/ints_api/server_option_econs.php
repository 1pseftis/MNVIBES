<option value="" disabled="" selected="" style="display: none;"></option>
<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
$login_str = mb_strtolower($login);
//**СКРИПТ**//
foreach ($servers as $server) {
	$mysqli_s = new mysqli(DBHOST,DBUSER,DBPASS,$server['db_base']);
    $mysqli_s->set_charset("utf8");
	$member = $mysqli_s->query("SELECT * FROM `money` WHERE `username` LIKE '$login_str'");
    $member_num = 0;
	while($row = $member->fetch_assoc()) {
	    $member_num++;
	}
    if ($member_num <= 0) {
	    echo  '<option value="'.$server['title'].'">'.$server['title'].' (10000 $)</option>';
    } else {
	    $serv_bal =  ceil($mysqli_s->query("select balance from `money` where username='$login_str'")->fetch_object()->balance);
		echo  '<option value="'.$server['title'].'">'.$server['title'].' ('.$serv_bal.' $)</option>';
	}
}
?>