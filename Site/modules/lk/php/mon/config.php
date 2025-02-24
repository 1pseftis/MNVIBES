<?php
/*
 * Version 1.5.3
 * Autors: @CyberOwl, @MattRh, @book777, @Artmoneyse
 */

/*	Нельзя давать серверам одинаковые имена (name)!	*/
$servers[]  = array('address' => '144.76.36.221:25561', 'name' => 'TechnoMagic');
$servers[]  = array('address' => '144.76.36.221:25562', 'name' => 'Hitech');
$servers[]  = array('address' => '144.76.36.221:25563', 'name' => 'Magic');
$servers[]  = array('address' => '144.76.36.221:25564', 'name' => 'MagicRPG');
$servers[]  = array('address' => '144.76.36.221:25565', 'name' => 'RPG');
$servers[]  = array('address' => '144.76.36.221:25566', 'name' => 'Galactic');

$config = array
(
	'template' => './template/Default/monitoring.tpl',// Путь к папке с шаблоном сайта относительно папки скрипта. Нужен для cron
	'json_mode' => true, // true - обращение идет напрямую к php. false - к его кэшированной части (потребуется подключить к cron ajax.php)

	'timecache' => 20, // Промежуток времени (в секундах) через который мониторинг будет обновляться
	'timeout' => 2, // Максимально время на ожидание ответа сервера майнкрафт
	'smoothBar' => true, // Плавное появление полосы
	'sErr' => 'Ошибка..', // Ответит браузер, если не сможет считать кэш
    'dir' => '//' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/', // Путь к скрипту (лучше не менять)
	'debug' => false // Отладка в случае проблем https://github.com/book777/monAJAX/issues
);

// Укажите свою местность, чтобы в рекорд записывалось правильное время
// http://php.net/manual/ru/timezones.php
date_default_timezone_set('Europe/Moscow');
