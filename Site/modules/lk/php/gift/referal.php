<script>
function reg_date_error() {
    Swal.fire({
        position: 'top',
        title: 'No, no, no...',
		text: 'Вы зарегестрированны на проекте более одних суток, а так нельзя',
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

if ((time() - $reg_date)>86400) {
    echo '<script>reg_date_error()</script>';
} else {
	$ref_login = $mysqli->query("select name from dle_users where uuid='".$_POST['code']."'")->fetch_object()->name;
	$mysqli->query("UPDATE dle_users SET `referal`='$ref_login' WHERE name='$login'");
	//echo $ref_login;
}