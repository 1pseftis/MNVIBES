<?php
$servers = array( //Сервера
    "TechnoMagic" => array (
     "title" => "TechnoMagic", //Имя сервера
     "mon_name" => "TechnoMagic <br><div style='font-size: 10px'>version 1.7.10</div>",
     "db_host" => DBHOST, //БД ХОСТЬ
     "db_user" => DBUSER, //БД ЮЗЕР
     "db_pass" => DBPASS, //БД ПАССВОРД
     "db_base" => "bd_site", //ИМЯ БД
     "rcon_host" => "144.76.36.221", //РКОН ХОСТ
     "rcon_port" => 25571, //РКОН ПОРТ
     "rcon_password" => "", //РКОН ПОРОЛЬ
     "rcon_timeout" => 3, //НЕ ТРОГАТЬ
     "version" => 1710,
     "dynmap" => "none",
     /*Выдача префиксов*/
     "chat_prefix_suffix_online" => true,//выдача префикса, суффикса когда человек на сервере
          /*Готовые аргументы, для разных плагинов
              Permission plugin PREFIX -   pex user {user_name} prefix {prefix}
              LuckPerms plugin PREFIX  -   lp user {user_name} meta setprefix 2 {prefix}
          */
     "chat_prefix_command" => "pex user {username} prefix {prefix}",//Команда для смены Префикса
     "chat_removeprefix_command" => "pex user {username} prefix &r",//Команда для удаления Префикса
          /*Готовые аргументы, для разных плагинов
              Permission plugin SUFFIX -   pex user {user_name} prefix {prefix}
              LuckPerms plugin SUFFIX  -   lp user {user_name} meta setsuffix 2 {prefix}
          */
     "chat_suffix_command" => "pex user {user_name} prefix {prefix}",//Команда для смены Суффикса
     "chat_removesuffix_command" => "pex user {user_name} prefix &r",//Команда для удаления Суффикса
     /*Команда телепорта на спавн*/
          /*Готовые аргументы, для разных плагинов
              Прописать команду spawn для игрока 	   -   spawn {username}
              Телепортировать игрока по координатам  -   tp {username} 251 96 114
          */
     "command_tp_to_spawn" => "tp {username} 251 96 114",//Команда телепорта на спавн
     /*Ссылка на описание сервера*/
     "info_url" => "/TechnoMagic"
    ),
    "Hitech" => array (
     "title" => "Hitech", //Имя сервера
     "mon_name" => "Hitech <br><div style='font-size: 10px'>version 1.7.10</div>",
     "db_host" => DBHOST, //БД ХОСТЬ
     "db_user" => DBUSER, //БД ЮЗЕР
     "db_pass" => DBPASS, //БД ПАССВОРД
     "db_base" => "bd_site", //ИМЯ БД
     "rcon_host" => "144.76.36.221", //РКОН ХОСТ
     "rcon_port" => 25572, //РКОН ПОРТ
     "rcon_password" => "", //РКОН ПОРОЛЬ
     "rcon_timeout" => 3, //НЕ ТРОГАТЬ
     "version" => 1710,
     "dynmap" => "none",
     /*Выдача префиксов*/
     "chat_prefix_suffix_online" => true,//выдача префикса, суффикса когда человек на сервере
          /*Готовые аргументы, для разных плагинов
              Permission plugin PREFIX -   pex user {user_name} prefix {prefix}
              LuckPerms plugin PREFIX  -   lp user {user_name} meta setprefix 2 {prefix}
          */
     "chat_prefix_command" => "pex user {username} prefix {prefix}",//Команда для смены Префикса
     "chat_removeprefix_command" => "pex user {username} prefix &r",//Команда для удаления Префикса
          /*Готовые аргументы, для разных плагинов
              Permission plugin SUFFIX -   pex user {user_name} prefix {prefix}
              LuckPerms plugin SUFFIX  -   lp user {user_name} meta setsuffix 2 {prefix}
          */
     "chat_suffix_command" => "pex user {user_name} prefix {prefix}",//Команда для смены Суффикса
     "chat_removesuffix_command" => "pex user {user_name} prefix &r",//Команда для удаления Суффикса
     /*Команда телепорта на спавн*/
          /*Готовые аргументы, для разных плагинов
              Прописать команду spawn для игрока 	   -   spawn {username}
              Телепортировать игрока по координатам  -   tp {username} 251 96 114
          */
     "command_tp_to_spawn" => "tp {username} 251 96 114",//Команда телепорта на спавн
     /*Ссылка на описание сервера*/
     "info_url" => "/SkyTech"
    ),
    "Magic" => array (
     "title" => "Magic", //Имя сервера
     "mon_name" => "Magic <br><div style='font-size: 10px'>version 1.7.10</div>",
     "db_host" => DBHOST, //БД ХОСТЬ
     "db_user" => DBUSER, //БД ЮЗЕР
     "db_pass" => DBPASS, //БД ПАССВОРД
     "db_base" => "bd_site", //ИМЯ БД
     "rcon_host" => "144.76.36.221", //РКОН ХОСТ
     "rcon_port" => 25573, //РКОН ПОРТ
     "rcon_password" => "", //РКОН ПОРОЛЬ
     "rcon_timeout" => 3, //НЕ ТРОГАТЬ
     "version" => 1710,
     "dynmap" => "none",
     /*Выдача префиксов*/
     "chat_prefix_suffix_online" => true,//выдача префикса, суффикса когда человек на сервере
          /*Готовые аргументы, для разных плагинов
              Permission plugin PREFIX -   pex user {user_name} prefix {prefix}
              LuckPerms plugin PREFIX  -   lp user {user_name} meta setprefix 2 {prefix}
          */
     "chat_prefix_command" => "pex user {username} prefix {prefix}",//Команда для смены Префикса
     "chat_removeprefix_command" => "pex user {username} prefix &r",//Команда для удаления Префикса
          /*Готовые аргументы, для разных плагинов
              Permission plugin SUFFIX -   pex user {user_name} prefix {prefix}
              LuckPerms plugin SUFFIX  -   lp user {user_name} meta setsuffix 2 {prefix}
          */
     "chat_suffix_command" => "pex user {user_name} prefix {prefix}",//Команда для смены Суффикса
     "chat_removesuffix_command" => "pex user {user_name} prefix &r",//Команда для удаления Суффикса
     /*Команда телепорта на спавн*/
          /*Готовые аргументы, для разных плагинов
              Прописать команду spawn для игрока 	   -   spawn {username}
              Телепортировать игрока по координатам  -   tp {username} 251 96 114
          */
     "command_tp_to_spawn" => "tp {username} 251 96 114",//Команда телепорта на спавн
     /*Ссылка на описание сервера*/
     "info_url" => "/MagicRPG"
    ),
    "MagicRPG" => array (
     "title" => "MagicRPG", //Имя сервера
     "mon_name" => "MagicRPG <br><div style='font-size: 10px'>version 1.7.10</div>",
     "db_host" => DBHOST, //БД ХОСТЬ
     "db_user" => DBUSER, //БД ЮЗЕР
     "db_pass" => DBPASS, //БД ПАССВОРД
     "db_base" => "bd_site", //ИМЯ БД
     "rcon_host" => "144.76.36.221", //РКОН ХОСТ
     "rcon_port" => 25574, //РКОН ПОРТ
     "rcon_password" => "", //РКОН ПОРОЛЬ
     "rcon_timeout" => 3, //НЕ ТРОГАТЬ
     "version" => 1710,
     "dynmap" => "none",
     /*Выдача префиксов*/
     "chat_prefix_suffix_online" => true,//выдача префикса, суффикса когда человек на сервере
          /*Готовые аргументы, для разных плагинов
              Permission plugin PREFIX -   pex user {user_name} prefix {prefix}
              LuckPerms plugin PREFIX  -   lp user {user_name} meta setprefix 2 {prefix}
          */
     "chat_prefix_command" => "pex user {username} prefix {prefix}",//Команда для смены Префикса
     "chat_removeprefix_command" => "pex user {username} prefix &r",//Команда для удаления Префикса
          /*Готовые аргументы, для разных плагинов
              Permission plugin SUFFIX -   pex user {user_name} prefix {prefix}
              LuckPerms plugin SUFFIX  -   lp user {user_name} meta setsuffix 2 {prefix}
          */
     "chat_suffix_command" => "pex user {user_name} prefix {prefix}",//Команда для смены Суффикса
     "chat_removesuffix_command" => "pex user {user_name} prefix &r",//Команда для удаления Суффикса
     /*Команда телепорта на спавн*/
          /*Готовые аргументы, для разных плагинов
              Прописать команду spawn для игрока 	   -   spawn {username}
              Телепортировать игрока по координатам  -   tp {username} 251 96 114
          */
     "command_tp_to_spawn" => "tp {username} 251 96 114",//Команда телепорта на спавн
     /*Ссылка на описание сервера*/
     "info_url" => "/Hitech"
    ),
    "RPG" => array (
     "title" => "RPG", //Имя сервера
     "mon_name" => "RPG <br><div style='font-size: 10px'>version 1.7.10</div>",
     "db_host" => DBHOST, //БД ХОСТЬ
     "db_user" => DBUSER, //БД ЮЗЕР
     "db_pass" => DBPASS, //БД ПАССВОРД
     "db_base" => "bd_site", //ИМЯ БД
     "rcon_host" => "144.76.36.221", //РКОН ХОСТ
     "rcon_port" => 25575, //РКОН ПОРТ
     "rcon_password" => "", //РКОН ПОРОЛЬ
     "rcon_timeout" => 3, //НЕ ТРОГАТЬ
     "version" => 1710,
     "dynmap" => "none",
     /*Выдача префиксов*/
     "chat_prefix_suffix_online" => true,//выдача префикса, суффикса когда человек на сервере
          /*Готовые аргументы, для разных плагинов
              Permission plugin PREFIX -   pex user {user_name} prefix {prefix}
              LuckPerms plugin PREFIX  -   lp user {user_name} meta setprefix 2 {prefix}
          */
     "chat_prefix_command" => "pex user {username} prefix {prefix}",//Команда для смены Префикса
     "chat_removeprefix_command" => "pex user {username} prefix &r",//Команда для удаления Префикса
          /*Готовые аргументы, для разных плагинов
              Permission plugin SUFFIX -   pex user {user_name} prefix {prefix}
              LuckPerms plugin SUFFIX  -   lp user {user_name} meta setsuffix 2 {prefix}
          */
     "chat_suffix_command" => "pex user {user_name} prefix {prefix}",//Команда для смены Суффикса
     "chat_removesuffix_command" => "pex user {user_name} prefix &r",//Команда для удаления Суффикса
     /*Команда телепорта на спавн*/
          /*Готовые аргументы, для разных плагинов
              Прописать команду spawn для игрока 	   -   spawn {username}
              Телепортировать игрока по координатам  -   tp {username} 251 96 114
          */
     "command_tp_to_spawn" => "tp {username} 251 96 114",//Команда телепорта на спавн
     /*Ссылка на описание сервера*/
     "info_url" => "/DivineRPG"
    ),
	"Galactic" => array (
     "title" => "Galactic", //Имя сервера
     "mon_name" => "Galactic <br><div style='font-size: 10px'>version 1.7.10</div>",
     "db_host" => DBHOST, //БД ХОСТЬ
     "db_user" => DBUSER, //БД ЮЗЕР
     "db_pass" => DBPASS, //БД ПАССВОРД
     "db_base" => "bd_site", //ИМЯ БД
     "rcon_host" => "144.76.36.221", //РКОН ХОСТ
     "rcon_port" => 25576, //РКОН ПОРТ
     "rcon_password" => "", //РКОН ПОРОЛЬ
     "rcon_timeout" => 3, //НЕ ТРОГАТЬ
     "version" => 1710,
     "dynmap" => "none",
     /*Выдача префиксов*/
     "chat_prefix_suffix_online" => true,//выдача префикса, суффикса когда человек на сервере
          /*Готовые аргументы, для разных плагинов
              Permission plugin PREFIX -   pex user {user_name} prefix {prefix}
              LuckPerms plugin PREFIX  -   lp user {user_name} meta setprefix 2 {prefix}
          */
     "chat_prefix_command" => "pex user {username} prefix {prefix}",//Команда для смены Префикса
     "chat_removeprefix_command" => "pex user {username} prefix &r",//Команда для удаления Префикса
          /*Готовые аргументы, для разных плагинов
              Permission plugin SUFFIX -   pex user {user_name} prefix {prefix}
              LuckPerms plugin SUFFIX  -   lp user {user_name} meta setsuffix 2 {prefix}
          */
     "chat_suffix_command" => "pex user {user_name} prefix {prefix}",//Команда для смены Суффикса
     "chat_removesuffix_command" => "pex user {user_name} prefix &r",//Команда для удаления Суффикса
     /*Команда телепорта на спавн*/
          /*Готовые аргументы, для разных плагинов
              Прописать команду spawn для игрока 	   -   spawn {username}
              Телепортировать игрока по координатам  -   tp {username} 251 96 114
          */
     "command_tp_to_spawn" => "tp {username} 251 96 114",//Команда телепорта на спавн
     /*Ссылка на описание сервера*/
     "info_url" => "/DivineRPG"
    )
);
$versions = array(
    /*"1.12.2" => array (
	    'id'=> 1122,
		'title'=> '1.12.2'
    ),*/
    "1.7.10" => array (
	    'id'=> 1710,
		'title'=> '1.7.10'
    )
);
