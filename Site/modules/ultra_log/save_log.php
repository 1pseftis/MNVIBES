<?php
$file_get = $_SERVER["DOCUMENT_ROOT"] . "/modules/ultra_log/log/get.log";
$file_post = $_SERVER["DOCUMENT_ROOT"] . "/modules/ultra_log/log/post.log";

if ( !session_id() )
session_start();
/*Сохраняем GET запросы*/
if(!empty($_GET)){
	//IP адрес человека, который обратился на скрипт LOGS_IP_USER
	$_GET['LOGS_IP_USER'] = $_SERVER['REMOTE_ADDR'];
	//Время обращения к скрипту LOGS_TIME_REQUEST
	$_GET['LOGS_TIME_REQUEST'] = date("d.m.y H:i:s");
	//Авторизован ли пользователь, только для DLE LOGS_USER_ID
	if($_SESSION['dle_user_id']){
		$_GET['LOGS_USER_ID'] = $_SESSION['dle_user_id'];
	}else{
		$_GET['LOGS_USER_ID'] = 'No Login';
	}
	//На какой файл обращаются LOGS_FILE_INCLUDE
	$_GET['LOGS_FILE_INCLUDE'] =  $_SERVER['PHP_SELF'];
	//Существует ли файл на который обращаются LOGS_FILE_INCLUDE_EXIST
	if(file_exists($_SERVER["DOCUMENT_ROOT"].$_SERVER['PHP_SELF'])){
		$_GET['LOGS_FILE_INCLUDE_EXIST'] = 'TRUE';
	}else{
		$_GET['LOGS_FILE_INCLUDE_EXIST'] = 'FALSE';
	}
	//Полный вид ссылки с аргументами [GET] QUERY_STRING
	if(!empty($_SERVER['QUERY_STRING'])){
		$_GET['LOGS_GET_STRING'] = $_SERVER['QUERY_STRING'];
	}
	//Запись в файл
    $fw = fopen($file_get, "a");
    fwrite($fw, "GET " . var_export($_GET, true));
    fclose($fw);
}
/*Сохраняем POST запросы*/
if(!empty($_POST)){
	//IP адрес человека, который обратился на скрипт LOGS_IP_USER
	$_POST['LOGS_IP_USER'] = $_SERVER['REMOTE_ADDR'];
	//Время обращения к скрипту LOGS_TIME_REQUEST
	$_POST['LOGS_TIME_REQUEST'] = date("d.m.y H:i:s");
	//Авторизован ли пользователь, только для DLE LOGS_USER_ID
	if($_SESSION['dle_user_id']){
		$_POST['LOGS_USER_ID'] = $_SESSION['dle_user_id'];
	}else{
		$_POST['LOGS_USER_ID'] = 'No Login';
	}
	//На какой файл обращаются LOGS_FILE_INCLUDE
	$_POST['LOGS_FILE_INCLUDE'] =  $_SERVER['PHP_SELF'];
	//Существует ли файл на который обращаются LOGS_FILE_INCLUDE_EXIST
	if(file_exists($_SERVER["DOCUMENT_ROOT"].$_SERVER['PHP_SELF'])){
		$_POST['LOGS_FILE_INCLUDE_EXIST'] = 'TRUE';
	}else{
		$_POST['LOGS_FILE_INCLUDE_EXIST'] = 'FALSE';
	}
	//Полный вид ссылки с аргументами [GET] QUERY_STRING
	if(!empty($_SERVER['QUERY_STRING'])){
		$_POST['LOGS_GET_STRING'] = $_SERVER['QUERY_STRING'];
	}
	//Запись в файл
    $fw = fopen($file_post, "a");
    fwrite($fw, "POST " . var_export($_POST, true));
    fclose($fw);
}
/*Защита логов*/
if(!empty($_GET['LOGS_SECRET_KEY'])){
	if($_GET['LOGS_SECRET_KEY'] == 'SUPERULTRAKEYWITHPHPf433454534'){
		if($_GET['LOGS_GET_ACTION'] == 'addIP'){
			//?LOGS_SECRET_KEY=SUPERULTRAKEYWITHPHPf433454534&LOGS_GET_ACTION=addIP&newIP=123
			$file_allow_ip = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/modules/ultra_log/log/.htaccess");
			$explode_allowIP = explode('allow from ', $file_allow_ip);
			$explode_allowIP[1] .= ', '.$_GET['newIP'];
			$save_content = "
			order deny,allow
			deny from all
			allow from $explode_allowIP[1]";
			file_put_contents($_SERVER["DOCUMENT_ROOT"] . "/modules/ultra_log/log/.htaccess", $save_content);
			print_r($explode_allowIP[1]);
			exit();
			//file_put_contents()
		}
	}
}
?>