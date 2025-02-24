<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');

//**СКРИПТ**//
//Соединение с БД
$mysqli = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
$mysqli->set_charset("utf8");
?>