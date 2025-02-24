<script>
function not_loggin() {
    Swal.fire({
        position: 'top',
        text: 'Необходимо ходя бы раз посетить указанный сервер!',
		showConfirmButton: false,
		timer: 4500,
        type: 'error'
   })
}
</script>
<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Code
$s_server = $_POST['s_server'];
$s_type = $_POST['s_type'];
$count = ceil($_POST['count']);
$count2 = ceil($count-($count*0.05));
$login_str = mb_strtolower($login);
$s_num = 0;
if ($count<=0) {
	die('<script>ex_error()</script>');
}
foreach ($servers as $server) {
	if($server['title']==$s_server) {
		$s_num++;
	}
}
if($s_num!=1){
	die('<script>hz()</script>');
}
$mysqli_s = new mysqli(DBHOST,DBUSER,DBPASS,$servers[$_POST['s_server']]['db_base']);
$mysqli_s->set_charset("utf8");
$serverssss = $mysqli_s->query("select * from money where username='$login_str'");
$nummmmm=0;
while($item = $serverssss->fetch_assoc()) {
	$nummmmm++;
} 
if($nummmmm!=1){
	die('<script>not_loggin()</script>');
}
$serverssss->free();
if($s_type=='toserver') {
	if ($econs<$count) {
	    die('<script>ex_minus()</script>');
    } else {
		$newecons= $econs-$count;
		$setecons = $mysqli->query("UPDATE dle_users SET `econs`='$newecons' WHERE name='$login'");
	    if($setecons){
			$econs_server = $mysqli_s->query("select balance from money where username='$login_str'")->fetch_object()->balance;
			$new_econs_server = $econs_server+ceil($count);
			$mysqli_s->query("UPDATE money SET `balance`='$new_econs_server' WHERE username='$login_str'");
			$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('','$login','-1','4','".ceil($count)."','".time()."','Перевод $ на сервер <b>".$_POST['s_server']."</b>')");
			die('<script>ex_success(); lk_economy()</script>');
		}
	}
} elseif($s_type=='fromserver') {
	$econs_server = $mysqli_s->query("select balance from money where username='$login_str'")->fetch_object()->balance;
	if ($econs_server<$count) {
	    die('<script>ex_minus()</script>');
    } else {
		$new_econs_server = $econs_server-$count;
		$setecons = $mysqli_s->query("UPDATE money SET `balance`='$new_econs_server' WHERE username='$login_str'");
		if($setecons){
			$newecons= $econs+ceil($count-($count*0.05));
		    $mysqli->query("UPDATE dle_users SET `econs`='$newecons' WHERE name='$login'");
			$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('','$login','-1','5','".ceil($count)."','".time()."','Вывод $ с сервера <b>".$_POST['s_server']."</b>')");
			die('<script>ex_success(); lk_economy()</script>');
		}
	}
} else {
	die('<script>hz()</script>');
}
?>