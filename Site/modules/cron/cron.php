<?php
//$_SERVER["DOCUMENT_ROOT"] = '/server/web';
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');

require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/cron/donate.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/cron/purge.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/cron/votes.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/cron/rg.php');

file_get_contents('https://UniversalStudio.online/modules/lk/php/mon/ajax.php');

echo 'success';