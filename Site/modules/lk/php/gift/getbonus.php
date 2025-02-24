<script>
function get_bonus() {
    Swal.fire({
        position: 'top',
        title: 'Бонус выдан',
		showConfirmButton: false,
		showCloseButton: true,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        type: 'success'
   }).then((result) => {
		location.reload()
    })
}
</script>
<?php
//Inject
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');

if ($referal_active == 0 && $referal != '' && $playtime >= 300) {
	$mysqli->query("UPDATE dle_users SET `referal_active`=1 WHERE name='$login'");
	
	$newmoney_user = $money + $gifts['referals']['new_user']['money'];
	$mysqli->query("UPDATE dle_users SET `money`=$newmoney_user WHERE name='$login'");
	
	$newecons_user = $econs + $gifts['referals']['new_user']['econs'];
	$mysqli->query("UPDATE dle_users SET `econs`=$newecons_user WHERE name='$login'");
	
	$newcases_user = $cases_1 + $gifts['referals']['new_user']['cases'];
	$mysqli->query("UPDATE dle_users SET `cases`=$newcases_user WHERE name='$login'");
	

	$money_referal =  $mysqli->query("select money from dle_users where name='$referal'")->fetch_object()->money;
	$newmoney_referal = $money_referal + $gifts['referals']['referal']['money'];
	$mysqli->query("UPDATE dle_users SET `money`=$newmoney_referal WHERE name='$referal'");
	
	$econs_referal =  $mysqli->query("select econs from dle_users where name='$referal'")->fetch_object()->econs;
	$newecons_referal = $econs_referal + $gifts['referals']['referal']['econs'];
	$mysqli->query("UPDATE dle_users SET `econs`=$newecons_referal WHERE name='$referal'");
	
	$cases_referal =  $mysqli->query("select cases from dle_users where name='$referal'")->fetch_object()->cases;
	$newcases_referal = $cases_referal + $gifts['referals']['referal']['cases'];
	$mysqli->query("UPDATE dle_users SET `cases`=$newcases_referal WHERE name='$referal'");
	
	echo '<script>get_bonus()</script>';
} 