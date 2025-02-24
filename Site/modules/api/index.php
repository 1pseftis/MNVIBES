<?php
header('Content-Type: application/json');
// DEBUG //
/*ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);*/

// FLAREWORLD LIBS //
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');

// API LIBS //


$error_api = array(
	'status' => 'error', //НЕВЕРНЫЙ КЛЮЧ
	'code' => '1'
	
);
$error_parametr = array(
	'status' => 'error', //ОДИН ИЗ ПАРАМЕТРОВ НЕ ПЕРЕДАН
	'code' => '2'
);
$error_func = array(
	'status' => 'error', //ТАКОЙ ФУНКЦИИ НЕ СУЩЕСТВУЕТ
	'code' => '3'
);
$error_check = array(
    'status' => 'error',
	'code' => '4'  //ПОЛЬЗОВАТЕЛЬ НЕ СВЯЗАН С ДИСКОРДОМ
);
$error_member_check = array(
    'status' => 'error',
	'code' => '5'  //УЧАСТНИК КЛАНА НЕ СВЯЗАН С ДИСКОРДОМ
);
$success_check = array(
    'status' => 'success',
	'code' => 'ckeck' //ПОЛЬЗОВАТЕЛЬ СВЯЗАН С ДИСКОРДОМ
);
$clan_create = array(
	'success' => 'clan_create' //ПОЛЬЗОВАТЕЛЬ СВЯЗАН С ДИСКОРДОМ
);
$clan_delete = array(
    'status' => 'success',
	'code' => 'clan_delete' //КЛАН УСПЕШНО УДАЛЁН
);
$clan_addmember = array(
    'status' => 'success',
	'code' => 'clan_addmember' //ПОЛЬЗОВАТЕЛЬ ДОБАВЛЕН В КЛАН
);
$clan_remmember = array(
    'status' => 'success',
	'code' => 'clan_remmember' //ПОЛЬЗОВАТЕЛЬ УДАЛЁН ИЗ КЛАНА
);
$clan_leave = array(
    'status' => 'success',
	'code' => 'clan_leave' //ПОЛЬЗОВАТЕЛЬ ПОКИНУЛ КЛАН
);

function check($mysqli, $error_check, $error_parametr, $success_check, $type) {
  if (!isset($_GET['id']))
	  die(json_encode($error_parametr));
  $member = $mysqli->query("SELECT * FROM `dle_users` WHERE `discord_id` LIKE '" . $_GET['id'] . "'");
  $id_ds = 0;
  while($row = $member->fetch_assoc()) {
	$id_ds++;
  } 
  if ($id_ds==0) {
	  die(json_encode($error_check));
  } else {
	  if ($type === TRUE) {
	    die(json_encode($success_check));
	  }
  }
}
function check_member($mysqli, $error_member_check, $error_parametr) {
  if (!isset($_GET['member']))
	  die(json_encode($error_parametr));
  $member = $mysqli->query("SELECT * FROM `dle_users` WHERE `discord_id` LIKE '" . $_GET['member'] . "'");
  $id_ds = 0;
  while($row = $member->fetch_assoc()) {
	$id_ds++;
  } 
  if ($id_ds==0) {
	  die(json_encode($error_member_check));
  } 
}

if ($_GET['api_key']==$core['api_key']) {
	if ($_GET['function'] == 'check') {
		check($mysqli, $error_check, $error_parametr, $success_check, TRUE);
	} elseif ($_GET['function'] == 'clan_create') {
		check($mysqli, $error_check, $error_parametr, $success_check, FALSE);
		if (isset($_GET['name'])) {
		    $login = mb_strtolower($mysqli->query("select name from dle_users where discord_id='".$_GET['id']."'")->fetch_object()->name);
		    $mysqli->query("INSERT INTO `clan_list`(`id`, `name`, `icon`, `leader`, `world`, `x`, `y`, `z`, `yaw`, `pitch`, `maxplayers`, `pvp`, `balance`) VALUES ('0','" . $_GET['name'] . "', NULL ,'" . $login . "','null','0','0','0','0','0',20,1,'0')");
			$mysqli->query("INSERT INTO `clan_members`(`id`, `clan`, `name`, `isModer`) VALUES (0,'" . $_GET['name'] . "','" . $login . "',0)");
            die(json_encode($clan_create));
		} else {
			die(json_encode($error_parametr));
		}
	} elseif ($_GET['function'] == 'clan_addmember') {
		check($mysqli, $error_check, $error_parametr, $success_check, FALSE);
		check_member($mysqli, $error_member_check, $error_parametr);
		if (isset($_GET['name']) && isset($_GET['member'])) {
		    $login = mb_strtolower($mysqli->query("select name from dle_users where discord_id='".$_GET['id']."'")->fetch_object()->name);
			$meber = mb_strtolower($mysqli->query("select name from dle_users where discord_id='".$_GET['member']."'")->fetch_object()->name);
			$mysqli->query("INSERT INTO `clan_members`(`id`, `clan`, `name`, `isModer`) VALUES (0,'" . $_GET['name'] . "','" . $member . "',0)");
            die(json_encode($clan_addmember));
		} else {
			die(json_encode($error_parametr));
		}
	}  elseif ($_GET['function'] == 'clan_remmember') {
		check($mysqli, $error_check, $error_parametr, $success_check, FALSE);
		check_member($mysqli, $error_member_check, $error_parametr);
		if (isset($_GET['name']) && isset($_GET['member'])) {
		    $login = mb_strtolower($mysqli->query("select name from dle_users where discord_id='".$_GET['id']."'")->fetch_object()->name);
			$meber = mb_strtolower($mysqli->query("select name from dle_users where discord_id='".$_GET['member']."'")->fetch_object()->name);
			$mysqli->query("DELETE FROM `clan_members` WHERE `member` = '".$member."' AND clan = '".$_GET['name']."'");
            die(json_encode($clan_remmember));
		} else {
			die(json_encode($error_parametr));
		}
	} elseif ($_GET['function'] == 'clan_leave') {
		check($mysqli, $error_check, $error_parametr, $success_check, FALSE);
		if (isset($_GET['member'])) {
		    check_member($mysqli, $error_member_check, $error_parametr);
		}
		if (isset($_GET['name'])) {
		    $login = mb_strtolower($mysqli->query("select name from dle_users where discord_id='".$_GET['id']."'")->fetch_object()->name);
			$mysqli->query("DELETE FROM `clan_members` WHERE `member` = '".$login."' AND clan = '".$_GET['name']."'");
			if (isset($_GET['member'])) {
				$meber = mb_strtolower($mysqli->query("select name from dle_users where discord_id='".$_GET['member']."'")->fetch_object()->name);
			    $mysqli->query("UPDATE clan_list SET `leader`='".$_GET['member']."' WHERE name='".$meber."'");
			}
            die(json_encode($clan_leave));
		} else {
			die(json_encode($error_parametr));
		}
	} elseif ($_GET['function'] == 'clan_delete') {
		check($mysqli, $error_check, $error_parametr, $success_check, FALSE);
		if (isset($_GET['name'])) {
			$login = mb_strtolower($mysqli->query("select name from dle_users where discord_id='".$_GET['id']."'")->fetch_object()->name);
			$mysqli->query("DELETE FROM `clan_members` WHERE clan = '".$_GET['name']."'");
			$mysqli->query("DELETE FROM `clan_list` WHERE name = '".$_GET['name']."'");
			die(json_encode($clan_delete));
		} else {
			die(json_encode($error_parametr));
		}
	} elseif ($_GET['function'] == 'money') {
		check($mysqli, $error_check, $error_parametr, $success_check, FALSE);
		 $money = $mysqli->query("select money from dle_users where discord_id='".$_GET['id']."'")->fetch_object()->money;
		 $money = array(
            'status' => 'success',
	        'code' => $money
         );
		 die(json_encode($money));
	} elseif ($_GET['function'] == 'econs') {
		check($mysqli, $error_check, $error_parametr, $success_check, FALSE);
		 $econs = $mysqli->query("select econs from dle_users where discord_id='".$_GET['id']."'")->fetch_object()->econs;
		 $econs = array(
            'status' => 'success',
	        'code' => $econs
         );
		 die(json_encode($econs));
	} elseif ($_GET['function'] == 'playerlist') {
		 $playerlist = $mysqli->query("select players from server_online where server='".$_GET['server']."'")->fetch_object()->players;
		 $online = $mysqli->query("select online from server_online where server='".$_GET['server']."'")->fetch_object()->online;
		 $max_online = $mysqli->query("select max_online from server_online where server='".$_GET['server']."'")->fetch_object()->max_online;
		 $playerlist = array(
            'status' => 'success',
	        'code' => substr(substr($playerlist,0,-1), 1),
			'online' => $online,
			'max_online' => $max_online
         );
		 die(json_encode($playerlist));
	}else {
		die(json_encode($error_func));
	}
} else {
	die(json_encode($error_api));
}