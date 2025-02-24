<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');

if ($referal!='') {
	echo 'Вас пригласил: <b><a>'.$referal.'</a><b>.<br><br>';
}
?>