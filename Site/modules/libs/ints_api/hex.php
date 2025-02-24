<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');

//**СКРИПТ**//
echo  $chat['colors'][$_GET['msg_color']]['hex'];

?>