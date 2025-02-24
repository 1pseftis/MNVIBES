<?php
// FLAREWORLD LIBS //
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
$econs = $mysqli->query("select econs from dle_users where name='".$_GET['name']."'")->fetch_object()->econs;
die($econs);