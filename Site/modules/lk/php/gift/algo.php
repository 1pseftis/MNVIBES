<script>
function error_referal_2() {
    Swal.fire({
        position: 'top',
        title: 'No, no, no...',
		text: 'Вы не можете ввести свой собственный реферальный код',
		showConfirmButton: false,
		showCloseButton: true,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        type: 'error'
   })
}
</script>
<?php
//Inject
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');

$search_uuid = $mysqli->query("SELECT * FROM `dle_users` WHERE `uuid` LIKE '" . $_POST['code'] . "'");
$count = 0;
while($uuid__ = $search_uuid->fetch_assoc()) {
	$count++;
}
if ($count>0) {
	if ($_POST['code']!=$uuid) {
	    require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/php/gift/referal.php');
	} else {
		echo '<script>error_referal_2()</script>';
	}
} else {
	require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/php/gift/gift.php');
}