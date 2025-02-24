<?php
header("Content-Type: text/plain; charset=UTF-8");
require_once ($_SERVER['DOCUMENT_ROOT']. '/engine/api/api.class.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');


//Входящие параметры
$login = $_GET['username'];
$password = $_GET['password'];
$api_key = $_GET['api_key'];

//Инициализация
/*if(empty($api_key) || strcmp($api_key, $core['api_key']) != 0) {
	exit("Error API Key");
}*/
if(empty($login) || empty($password)) {
	exit("Неправильный логин или пароль");
}
$auth_result = $dle_api->external_auth($login, $password);
$info = $dle_api->take_user_by_name($login);
//Ответ сервера
//var_dump(trim("OK:" . $info['name']));
//exit();
echo($auth_result ? trim("OK:" . $info['name']) : "Неправильный логин или пароль");

//URL Взаимодействия
//http://xeonix.su/auth.php?api_key=BcToX3sbwlTNyBkcHB9Yqb0rpQdiSVH58iko&login=login&password=password
?>