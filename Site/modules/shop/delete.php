<?php
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');

if ($is_admin!=true) { die('Access deny'); }

$id = $_GET['id'];

$mysqli->query("DELETE FROM flare_shop WHERE id=$id");

die("
<script>
        Swal.fire({
	        position: 'top',
            title: 'Предмет удалён из магазина!',
            showConfirmButton: false,
			confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
            timer: 1500,
            confirmButtonColor: '#35D59D',
            cancelButtonColor: '#2e3356'
        })


shopsearch_f();


</script>");