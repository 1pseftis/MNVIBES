<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="<?php echo $this->path?>template/js/banlist.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->path?>template/style/banlist.css">
		
		<script type="text/javascript">
			var banlist = new banlist();
			banlist.absolutePath = 'http://<?php echo $_SERVER['SERVER_NAME']?><?php echo dirname($_SERVER['SCRIPT_NAME']) . '/index.php'?>'; //<?php echo dirname($_SERVER['SCRIPT_NAME']) . '/index.php'?> заменить на свою при необходимости
			banlist.rowCount = <?php echo $this->list->rowCounts[0]?>;
			banlist.maxRowsOnPage = <?php echo $this->rowsCount?>;
			banlist.maxRowsOnPageId = <?php echo $this->rowsCountId?>;
			banlist.page = <?php echo ($this->page + 1)?>;
			banlist.sort = <?php echo $this->sort?>;
			banlist.sortType = <?php echo $this->sortType?>;
			banlist.maxSort = <?php echo $this->cfg['table']['sortMax']?>;
			banlist.searchInputLimit = new Array(<?php echo $this->cfg['table']['search']['input'][0] . ',' . $this->cfg['table']['search']['input'][1]?>);
			banlist.searchInput = '<?php echo $this->search?>';
			banlist.updateMS = <?php echo $this->cfg['output']['autoupdate']?>;
			banlist.searchMS = <?php echo $this->cfg['table']['search']['update']?>;
			banlist.ajaxPath = '<?php echo $this->path?>ajax.php';
			banlist.ajaxScrolling = <?php echo $this->cfg['output']['ajaxScrolling']['enable'] ? 'true' : 'false'?>;
			banlist.keyNameSelectedRow = '<?php echo $this->cfg['output']['selectRow']['keyName']?>';
			
			//banlist.removeEventSearch(); //удалить событие поиска с поля ввода при вводе запроса
			//banlist.eventSearch('запрос'); //событие поиска. Пример использования: <button onclick="banlist.eventSearch(document.getElementById('banlist-search-input').value)">Поиск</button>
			//Multilist fleynaro.ru
		</script>
	</head>
	<body>
		<div class="banlist" style="width: <?php echo $this->cfg['template']['width']?>">
			<div class="banlist-search" align="center">
				<input type="text" id="banlist-search-input" placeholder="Введите запрос..." value="<?php echo $this->search?>"/>
			</div>
			
			<?php if ( $this->cfg['output']['topSelectors'] ) { ?>
				<div class="banlist-selectors" align="right">
					<?php if ( $this->cfg['output']['rowsOnPageSelector'] > 0 ) { ?>
						&nbsp;&nbsp;Загружать 
						<select id="banlist-rowsSelector-select">
							<?php echo $this->generateHtmlRowsSelector()?>
						</select>
					<?php } ?>
					<?php if ( $this->cfg['output']['rowsOnPageSelectorEx'] != false ) { ?>
						Отобразить 
						<select id="banlist-rowsSelectorEx-select"<?php echo $this->rowsCountId != -1 ? 'disabled' : ''?>>
							<?php echo $this->generateHtmlRowsSelectorEx()?>
						</select> строк
					<?php } ?>
				</div>
			<?php } ?>
			
			<div id="banlist-alert" onclick="this.style.display = 'none'" style="display: none" align="center"></div>
			<table id="banlist-table" style="width: <?php echo $this->cfg['template']['width']?>" cellspacing="0" cellpadding="0">
				<thead onmousedown="return false" onselectstart="return false">
					<?php echo $this->generateHtmlHeader() ?>
				</thead>
				<?php echo $this->generateHtmlBlocks()?>
				<tfoot>
					<tr>
						<td colspan="<?php echo count($this->cfg['table']['column'])?>" align="right"></td>
					</tr>
				</tfoot>
			</table>
			
			<?php if ( $this->showPageNav ) { ?>
				<div class="banlist-pageNav<?php echo $this->cfg['output']['ajaxScrolling']['enable'] ? ' banlist-pageNav-fixed' : ''?>" align="center">
					<button onclick="banlist.gotoPreviousPage()"><</button>
					<button id="banlist-pageNav-firstButton" onclick="banlist.gotoFirstPage()">1</button> 
					<span id="banlist-pageNav-main"><?php echo $this->generateHtmlPageNav() ?></span>
					<?php if ( $this->list->getLastPage() != 1 ) {?><button id="banlist-pageNav-lastButton" onclick="banlist.gotoLastPage()"><?php echo $this->list->getLastPage()?></button><?php } ?>
					<button onclick="banlist.gotoNextPage()">></button>
				</div>
			<?php } ?>
		</div>
	</body>
	<script type="text/javascript">
		banlist.init();
	</script>
</html>