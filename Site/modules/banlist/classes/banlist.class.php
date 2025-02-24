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

	
	class banlist extends basic {
		
		public $list;
		public $path;
		public $page;
		public $sort;
		public $sortType;
		public $sortArr;
		public $search;
		public $searchArr;
		public $rowsCount;
		public $rowsCountId;
		public $selectRow;
		public $showPageNav = false;
		
		function __construct()
		{
			$this->initConfig();
			$this->connectToDB();
			$this->initReq();
			$this->initReqShowBefore();
			
			//Иницилизация мультилиста
			$this->list = new rowList($this, $this->sortArr, $this->searchArr, $this->rowsCount);
			
			if ( $this->list->rowCounts[0] > $this->cfg['output']['maxRowsOnPage'] ) {
				$this->showPageNav = true;
			}
			
			$this->initReqShowAfter();
			
			$this->path = '';
			if ( $this->cfg['output']['including'] !== false ) {
				$insite = true;
				if ( $this->cfg['output']['including'] == 'auto' ) {
					$arrCurrentRelativePath = explode("/", dirname($_SERVER['SCRIPT_NAME']));
					$arrConstantAbsolutePath = explode("/", str_replace('\\', '/', ROOT_BANLIST_DIR));
					if ( $arrCurrentRelativePath[count($arrCurrentRelativePath) - 1] == $arrConstantAbsolutePath[count($arrConstantAbsolutePath) - 1] ) {
						$insite = false;
					}
				} else if ( $this->cfg['output']['including'] !== true ) {
					$this->path = $this->cfg['output']['including'];
					$insite = false;
				}
				if ( $insite ) {
					$this->path = str_replace('\\', '/', substr(ROOT_BANLIST_DIR, strlen($_SERVER['DOCUMENT_ROOT']) + 1)) . '/';
				}
			}
			
			
		}
		
		function initReqShowBefore()
		{
			//GET/POST запросы к мультилисту
			$this->sort = (int)$this->req('sort');
			$this->sortType = (int)$this->req('sortType');
			$this->search = $this->req('search');
			$this->rowsCountId = $this->req('rowsCount') != null ? (int)$this->req('rowsCount') : false;
			$this->selectRow = $this->req($this->cfg['output']['selectRow']['keyName']);
			//сортировка
			if ( !$this->cfg['output']['showByRequest'] || !($this->sort && is_numeric($this->sort) && is_numeric($this->sortType)) ) {
				$this->sortArr = $this->cfg['table']['sortDefault'];
				$this->sort = 0;
				$this->sortType = 0;
			} else {
				$this->sortArr = $this->getSortArrayBySort($this->sort, $this->sortType);
			}
			//поиск
			if ( !$this->cfg['output']['showByRequest'] || !($this->search && $this->IsValidSearchInput($this->search)) ) {
				$this->searchArr = $this->getSearchArray($this->cfg['table']['search']['default']);
				$this->search = $this->cfg['table']['search']['default'];
			} else {
				$this->searchArr = $this->getSearchArray($this->search);
			}
			//кол-во отображаемых строк
			if ( !$this->cfg['output']['showByRequest'] || !($this->rowsCountId !== false && ($this->rowsCountId >= 0 && $this->rowsCountId < count($this->cfg['output']['rowsOnPageSelectorEx']))) ) {
				if ( $this->cfg['output']['rowsOnPageSelectorDef'] != -1 ) {
					$this->rowsCount = $this->cfg['output']['rowsOnPageSelectorEx'][$this->cfg['output']['rowsOnPageSelectorDef']];
					$this->rowsCountId = $this->cfg['output']['rowsOnPageSelectorDef'];
				} else {
					$this->rowsCount = $this->cfg['output']['maxRowsOnPage'];
					$this->rowsCountId = -1;
				}
			} else {
				$this->rowsCount = $this->cfg['output']['rowsOnPageSelectorEx'][$this->rowsCountId];
			}
			if ( !$this->cfg['output']['showByRequest'] || $this->selectRow == null ) {
				$this->selectRow = $this->cfg['output']['selectRow']['default'];
			}
			
			return 1;
		}
		
		function initReqShowAfter()
		{
			//Страницы
			$this->page = (int)$this->req('page');
			if ( !$this->cfg['output']['showByRequest'] || !(is_numeric($this->page) && $this->page > 0 && $this->page <= $this->list->getLastPage()) ) {
				$this->page = $this->cfg['output']['defaultPage'] - 1;
			} else {
				$this->page = $this->page - 1;
			}
			return 1;
		}
		
		function showList()
		{
			$rows = $this->list->getRowsOnPage($this->page);
			$html = '';
			for ( $i = 0, $max = count($rows); $i < $max; $i ++ ) {
				$html .= str_replace('\"', '"', $this->generateHtmlTR($rows[$i]));
			}
			return $html;
		}
		
		function generateHtmlTR($row)
		{
			$html = '';
			for ( $i = 0, $max = count($row); $i < $max; $i ++ ) {
				$html .= '<td>'. $row[$i] .'</td>';
			}
			
			$select = false;
			if ( $this->selectRow !== false ) {
				if ( $this->cfg['output']['selectRow']['column'] !== false ) {
					if ( strpos($row[$this->cfg['output']['selectRow']['column']], $this->selectRow) !== false ) {
						$select = true;
					}
				} else {
					for ( $i = 0, $max = count($row); $i < $max; $i ++ ) {
						if ( strpos($row[$i], $this->selectRow) !== false ) {
							$select = true;
							break;
						}
					}
				}
			}
			return '<tr '.($select ? 'class="banlist-rowSelected"' : '').'>' . $html . '</tr>';
		}
		
		function generateHtmlHeader()
		{
			$html = '';
			for ( $i = 0; $i < count($this->cfg['table']['column']); $i ++ ) {
				$column = $this->cfg['table']['column'][$i];
				$html .= '<th'.($column[2] ? ' onclick="banlist.sortByColumn('. $i .', this)"' : '').' '.(isset($column[5]) ? 'width="'.$column[5].'"' : '').'>'. $column[1] .'</th>';
			}
			return '<tr>' . $html . '</tr>';
		}
		
		function generateHtmlPageNav()
		{
			$curPage = $this->cfg['output']['defaultPage'];
			$lastPage = $this->list->getLastPage();
			$leftPage = floor($this->cfg['pageNav']['maxButtons'] / 2);
			$page = $curPage - $leftPage - ($curPage >= $lastPage - $leftPage - 1 ? ($curPage - $lastPage + $leftPage + 1) : 0);
			$maxPage = $curPage + $leftPage + ($curPage <= $leftPage + 1 ? ($leftPage - $curPage + 2) : 0);
			
			$html = '';
			while ( $page <= $maxPage ) {
				if ( $page > 1 && $page < $lastPage ) {
					//style="display: '. ($page > 1 && $page < $lastPage ? 'inline' : 'none') .'"
					$html .= ' <button class="banlist-pageNav-button'. ($page == $curPage ? ' banlist-button-selected' : '') .'" onclick="banlist.gotoPage(parseInt(this.value))" value="'.($page).'">'. $page .'</button>';
				}
				$page ++;
			}
			return $html;
		}
		
		function generateHtmlBlocks()
		{
			$html = '';
			for ( $i = 0, $Max = $this->list->getLastPage(); $i < $Max; $i ++ ) {
				if ( $i == $this->page ) {
					$html .= '<tbody style="display: table-row-group">'. $this->showList() .'</tbody>';
				} else {
					$html .= '<tbody style="display: none"></tbody>';
				}
			}
			return $html;
		}
		
		function generateHtmlRowsSelector()
		{
			$html = '';
			for ( $i = 1; $i <= $this->cfg['output']['rowsOnPageSelector']; $i ++ ) {
				$html .= '<option value="'.$i.'">По '.$i.' блок'.($i == 1 ? 'у' : 'ам').'</option>';
			}
			return $html;
		}
		
		function generateHtmlRowsSelectorEx()
		{
			$html = '<option value="-1|'.$this->cfg['output']['maxRowsOnPage'].'">'.$this->cfg['output']['maxRowsOnPage'].'</option>';
			for ( $i = 0; $i < count($this->cfg['output']['rowsOnPageSelectorEx']); $i ++ ) {
				$html .= '<option value="'.$i.'|'.$this->cfg['output']['rowsOnPageSelectorEx'][$i].'"'.($i == $this->rowsCountId ? 'selected' : '').'>'.$this->cfg['output']['rowsOnPageSelectorEx'][$i].'</option>';
			}
			return $html;
		}
		
		function content()
		{
			echo "<!--
				RU:
				Мультилист by Fleynaro
				Автор: Fleynaro(faicraft)
				Сайт http://fleynaro.ru/
				Группа ВК: http://vk.com/fleynaro_prods
				
				Если Вас заинтересовал данный мультилист, Вы можете подробнее с ним ознакомиться здесь:
				http://vk.com/page-39643149_52222768
				
				EN:
				Multilist by Fleynaro
				Author: Fleynaro(old nick Faicraft)
				Site: http://fleynaro.ru/
				Group VK: http://vk.com/fleynaro_prods
				If you interest it you can known more here:
				http://vk.com/page-39643149_52222768
			-->";
			include(ROOT_BANLIST_DIR . '/' . $this->cfg['template']['index']);
		}
	}

?>