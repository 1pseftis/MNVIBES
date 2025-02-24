<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
session_start();

//**СКРИПТ**//
echo $mysqli->query("select cases from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->cases;

//**ПОСТ-ИНИЦИАЛИЗАЦИЯ**//
$mysqli->close();
?>