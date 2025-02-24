<?php
//1 - ITEM, 2 - ECON, 3 - MONEY
/*Минимально - 10 предметов для 1 сервера!*/
$case_command_give = "give {username} {item} {amount} {data}"; //Команда выдачи
$command_lng_case = 'msg {username} &eВы успешно выиграли &6{title}&e в кол-ве &6{amount} &eштук';
$case_command_online = true; //Выдавать когда человек на сервере
$cases = array( //кейсы
	"TechnoMagic" => array (
		array(
			"title" => "Камень",//Название предмета, ОН же и отвечает за картинку лежит тут. Пример: Корень сайта/uploads/shop/items/Камень.png
			"type" => 1,//Тип предмета 1 - это предмет, 2 - это валюта сервера, 3 - реальные деньги
			"img" => 1,//Тип изображение не трогать
			"amount" => 16,//Кол-во выпадающих предметов МАКСИМАЛЬНО можно 64!
			"id" => 'stone',//Вводите не ид предмета, а мета-название пример: stone(камень); wool(шерсть); log(дерево); planks(доски);
			"data" => ''//Это отвечает за тип предмета, допустим нам нужно оранжевую шерсть в "id" => 'wool' а в "data" => '1'.
		),
		array(
			"title" => "Ель",
			"type" => 1,
			"img" => 1,
			"amount" => 16,
			"id" => 'log',
			"data" => '1'
		),
		array(
			"title" => "Печенье",
			"type" => 1,
			"img" => 1,
			"amount" => 16,
			"id" => 'cookie',
			"data" => ''
		),
		array(
			"title" => "Камень",
			"type" => 1,
			"img" => 1,
			"amount" => 16,
			"id" => 'stone',
			"data" => ''
		),
		array(
			"title" => "Ель",
			"type" => 1,
			"img" => 1,
			"amount" => 16,
			"id" => 'log',
			"data" => '1'
		),
		array(
			"title" => "Печенье",
			"type" => 1,
			"img" => 1,
			"amount" => 16,
			"id" => 'cookie',
			"data" => ''
		),
		array(
			"title" => "Камень",
			"type" => 1,
			"img" => 1,
			"amount" => 16,
			"id" => 'stone',
			"data" => ''
		),
		array(
			"title" => "Ель",
			"type" => 1,
			"img" => 1,
			"amount" => 16,
			"id" => 'log',
			"data" => '1'
		),
		array(
			"title" => "Печенье",
			"type" => 1,
			"img" => 1,
			"amount" => 16,
			"id" => 'cookie',
			"data" => ''
		),
		array(
			"title" => "Шерсть",
			"type" => 1,
			"img" => 1,
			"amount" => 16,
			"id" => 'wool',
			"data" => ''
		)
		
    ),
);
?>