<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
if( !defined( 'BLOCKSHOP' ) ) {
die('Нельзя так!');
}
session_start();
////ОСНОВНЫЕ НАСТРОЙКИ///
$mysqli_host = 'localhost';//хост
$mysqli_user = 'site';//юзер
$mysqli_pass = 'DK7yaQ&I';//пароль
$mysqli_db = 'site';//база
$btable = 'flare_shop';//таблица с блоками
$bico = 'dle_users';///таблица игровой валюты

///СОЕДИНЕНИЕ С mysqli///
$handle = mysqli_connect($mysqli_host, $mysqli_user, $mysqli_pass) or die('Подключение к mysqli не удалось!');
mysqli_select_db($handle, $mysqli_db) or die('error');
mysqli_query("SET NAMES UTF8");
$query = "select name, user_group from dle_users where user_id='".$_SESSION['dle_user_id']."'";
$member_id = mysqli_query($query);
$member_id = mysqli_fetch_array($member_id);

$username = $member_id['name'];//пользователь
$group = $member_id['user_group'];//группа
$dir = '';///папка с данным скриптом (слэш в конце обязательно)
///Примечание: изображения блоков хранятся в папке $dir/images/, логи в $dir/logs
$s = array('Galaxy', 'DTM');///массив серверов
///ПЕРЕМЕННЫЕ///
$log_date = '['.date("d/m/Y H:i:s", time()).']['.$username.']['.$_SERVER['REMOTE_ADDR'].']=>';///для лога
$btime = time();
///СОЗДАНИЕ КНОПОК ИЗ МАССИВА///
$size = count($s);
$prc = round(100/$size);
for($i = 0, $size = count($s); $i < $size; ++$i) {$p1='<input type="submit" name="server" value="'.$s[$i].'" class="btn-shop" style="font-size:10px;float:left;width:'.$prc.'%;">'; $bob .= $p1;}
?>