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

	
	class ajax extends basic {
		
		public $type;
		private $callMethod = array(
			array('getContent')
		);
		
		function __construct()
		{
			$this->initConfig();
			$this->connectToDB();
			$this->initReq();
			
			$this->type = (int)$this->req('type');
			if ( $this->req('type') !== null && is_numeric($this->type) && $this->type > 0 && $this->type <= count($this->callMethod) ) {
				$methodName = 'ajax_' . $this->callMethod[$this->type - 1][0];
				$this->$methodName();
			} else {
				$this->error(array(
					'message'	=>	'type is not correct'
				));
			}
		}
		
		private function ajax_getContent()
		{
			$page = (int)$this->req('page');
			$sort = (int)$this->req('sort');
			$sortType = (int)$this->req('sortType');
			$sort = (int)$this->req('sort');
			$rowsCount = (int)$this->req('rowsCount');
			$search = $this->req('search');
			
			if ( !is_numeric($sort) ) {
				$this->error(array(
					'message'	=>	'sort must be a number'
				));
			}
			if ( !is_numeric($sortType) ) {
				$this->error(array(
					'message'	=>	'sortType must be a number'
				));
			}
			if ( !is_numeric($rowsCount) || $rowsCount < -1 || $rowsCount >= count($this->cfg['output']['rowsOnPageSelectorEx']) ) {
				$this->error(array(
					'message'	=>	'rowsCount must be a number from -1 to max'
				));
			}
			if ( $search ) {
				if ( !$this->IsValidSearchInput($search) ) {
					$this->error(array(
						'message'	=>	'некорректный поисковой запрос'
					));
				}
			} else {
				$search = false;
			}
			
			$list = new rowList($this, ($sort ? $this->getSortArrayBySort($sort, $sortType) : false), $this->getSearchArray($search), ($this->cfg['output']['rowsOnPageSelectorEx'] == false || $rowsCount == -1 ? false : $this->cfg['output']['rowsOnPageSelectorEx'][$rowsCount]));
			
			if ( $list->found == false ) {
				$this->error(array(
					'message'	=>	'по данному запросу ничего не найдено'
				));
			}
			if ( !(is_numeric($page) && $page > 0 && $page <= $list->getLastPage()) ) {
				$this->error(array(
					'message'	=>	'page must be a number from 1 to maxPage'
				));
			}
			
			$this->json(array(
				'players' => $list->getRowsOnPage($page - 1),
				'rowCount' => $list->rowCounts[0]
			));
		}
		
		private function json($arr)
		{
			$arr['status'] = 'success';
			echo $this->jsonEN($arr);
		}
		
		private function error($arr)
		{
			$arr['status'] = 'error';
			die($this->jsonEN($arr));
		}
		
		private function jsonEN($array)
		{
			if ( !$this->isNumericArray($array) ) {
				$result = '{';
				
				foreach ( $array as $key=>$val ) {
					$result .= '"'. $key .'":' . (is_array($val) ? $this->jsonEN($val) : (is_numeric($val) ? $val : '"'.$val.'"')) . ',';
				}
				
				return trim($result, ',') . '}';
			} else {
				$result = '[';
				
				for ( $i = 0, $max = count($array); $i < $max; $i ++ ) {
					$result .= (is_array($array[$i]) ? $this->jsonEN($array[$i]) : (is_numeric($array[$i]) ? $array[$i] : '"'.$array[$i].'"')) . ',';
				}
				
				return trim($result, ',') . ']';
			}
		}
		
		private function isNumericArray($array)
		{
			$i = 0;
			foreach ( $array as $key=>$val ) {
				if ( $i !== $key ) {
					return false;
				}
				$i ++;
			}
			return true;
		}
	}
?>