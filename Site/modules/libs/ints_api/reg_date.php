<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
session_start();

//**СКРИПТ**//
$date = $mysqli->query("select reg_date from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->reg_date;
echo date('d.m.Y в H:i', $date);

//**ПОСТ-ИНИЦИАЛИЗАЦИЯ**//
$mysqli->close();
?>