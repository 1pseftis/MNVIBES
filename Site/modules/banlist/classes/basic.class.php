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

	
	abstract class basic {
		public $req;
		public $cfg;
		public $db = array();
		
		public function initConfig()
		{
			include(ROOT_BANLIST_DIR . '/config.php');
			$this->cfg = $banlist_cfg;
			header("Content-type: text/html; charset=" . $this->cfg['template']['charset']);
		}
		
		public function connectToDB()
		{
			for ( $i = 0; $i < count($this->cfg['server']); $i ++ ) {
				$server = $this->getServerCFG($i);
				if ( isset($server['db']['link']) ) {
					$this->db[$i] = $this->db[$server['db']['link']];
				} else {
					$this->db[$i] = $this->getDB($server['db']);
				}
			}
		}
		
		public function initReq()
		{
			$this->req = $_REQUEST;
			$this->filterRequest($this->req);
		}
		
		public function getDB($info)
		{
			$db = new PDO('mysql:host='.$info['host'].';dbname='.$info['name'], $info['user'], $info['pass']);
			$db->query("SET NAMES '".$info['char']."'");
			return $db;
		}
		
		public function getServerDB($server)
		{
			return $this->db[$server];
		}
		
		public function getServerCFG($server)
		{
			return $this->cfg['server'][$server];
		}
		
		public function IsValidSearchInput($text)
		{
			$serachCFG = $this->cfg['table']['search'];
			if ( preg_match('/^['. $serachCFG['symbols'] .']{'. $serachCFG['input'][0] .','. $serachCFG['input'][1] .'}$/i', $text) ) {
				return true;
			}
			return false;
		}
		
		public function IsStringEqual($text1, $text2)
		{
			if ( strripos($text1, $text2) !== false ) {
				return true;
			}
			return false;
		}
		
		public function getSearchArray($search)
		{
			if ( !$search ) {
				return false;
			}
			$searchArray = array();
			for ( $i = 0, $j = 0; $i < count($this->cfg['table']['column']); $i ++ ) {
				$column = $this->cfg['table']['column'][$i];
				if ( $column[3] != false ) {
					if ( $column[0] != 'server_' ) {
						$searchArray[$j ++] = $column[0] . " LIKE '%". $search ."%'";
					} else {
						$searchArray['server_'] = $search;
					}
				}
			}
			return $searchArray;
		}
		
		public function getSortArrayBySort($sort = 0x0, $type = 0x0)
		{
			$sortArray = array();
			for ( $i = 0, $j = 0; $i < count($this->cfg['table']['column']); $i ++ ) {
				$column = $this->cfg['table']['column'][$i];
				if ( $column[2] != false && ($sort >> $i & 0x1) ) {
					if ( $column[0] != 'server_' ) {
						$sortArray[$j ++] = $column[0] . ' ' . (($type >> $i & 0x1) ? 'ASC' : 'DESC');
						if ( $j == 3 ) {
							break;
						}
					} else {
						$sortArray['server_'] = $type >> $i & 0x1;
						if ( $j == 2 ) {
							break;
						}
					}
				}
			}
			return $sortArray;
		}
		
		public function filterRequest(&$req)
		{
			foreach( $req as $key=>$val ) {
				if ( !is_array($val) ) {
					$req[$key] = $this->filterValue($val);
				} else {
					$this->filterRequest($req[$key]);
				}
			}
		}
		
		private function filterValue($val)
		{
			return strip_tags($val);
		}
		
		public function req($name)
		{
			if ( isset($this->req[$name]) ) {
				return $this->req[$name];
			} else {
				return null;
			}
		}
	}

?>