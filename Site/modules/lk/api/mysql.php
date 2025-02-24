<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
//Code
session_start();
$mysqli = new mysqli($mysql["host"],$mysql["user"],$mysql["pass"],$mysql["db"]);
$mysqli->set_charset("utf8");
$login = $mysqli->query("select name from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->name; //Логин
$password = $mysqli->query("select password from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->password; //Пороль
$uuid = $mysqli->query("select uuid from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->uuid; //UUID
$money = $mysqli->query("select money from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->money; //Баланс
$unban = $mysqli->query("select unban from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->unban; //Кол-во платных разбанов
$everyday_case = $mysqli->query("select everyday_case from dle_users where user_id='".$_SESSION['dle_user_id']."'")->fetch_object()->everyday_case; //Время выдачи последнего бесплатного кеса
$fe = $mysqli->query("SELECT * FROM `fe_accounts` WHERE `name` LIKE '%$login%'"); //Информация об игровой валюте
$feb = $mysqli->query("SELECT * FROM `banlist` WHERE `name` LIKE '%$login%'"); //Информация о банах

//Временные переменные//
$fe_num = 0;          //
$ban_num = 0;         //
////////////////////////

//Цикл получение информации об игровой валюте
while($row = $fe->fetch_assoc()) {
	$fe_num++;
}
if ($fe_num == 1) {
	$coins = $mysqli->query("select money from fe_accounts where uuid='".$uuid."'")->fetch_object()->money; //Баланс игровой валюты
	$logined_on_server = 'yes'; //Колонка игровой валюты с пользователем валюты Есть
} else {
	$coins = $curs['start_coins']; //Баланс игровой валюты
	$logined_on_server = 'no'; //Колонки игровой валюты с пользователем валюты Нету
}
//Цикл получение информации о банах
while($row = $feb->fetch_assoc()) {
	$ban_num++;
}
if ($ban_num == 1) {
	$baned = 'yes'; //Пользователь забанен
} else {
	$baned = 'no'; //Пользователь не забанен
}
?>