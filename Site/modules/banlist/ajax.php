<?php
/*

		
		ИНФОРМАЦИЯ:
			Мультилист UTF-8
			Автор: Fleynaro(faicraft)
			Сайт http://fleynaro.ru/
			Группа ВК: http://vk.com/fleynaro_prods
		
		ОГРАНИЧЕНИЯ:
			Запрещено использовать весь код или его части в сторонних скриптах без разрешения автора!
			Запрещено любым способом распространять данный PHP файл на других ресурсах, кроме Вашего проекта!
		
		ВНИМАНИЕ!
			Если данный файл не является конфигурационным, то при отсутствии у Вас знаний и навыков
			программирования на языке PHP любое Ваше здесь изменение может привести к нестабильной работе Личного Кабинета.
			Редактируйте данный код только при указании тех. поддержки, оказываемой автором данного скрипта!
		
		По любым вопросам обращайтесь к автору данного кода http://vk.com/fleynaro или в группу ВК http://vk.com/fleynaro_prods
		
	
*/

	define ( 'ROOT_BANLIST_DIR', dirname ( __FILE__ ) );
	
	include(ROOT_BANLIST_DIR . '/classes/basic.class.php');
	include(ROOT_BANLIST_DIR . '/classes/banlist.class.php');
	include(ROOT_BANLIST_DIR . '/classes/list.class.php');
	include(ROOT_BANLIST_DIR . '/classes/ajax.class.php');
	
	$ajax = new ajax();
?>