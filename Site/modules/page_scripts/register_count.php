<?php
//**ОТОБРАЖАЕТ КОЛ-ВО ЗАРЕГИСТРИРОВАННЫХ ПОЛЬЗОВАТЕЛЕЙ**//

//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');

//**СКРИПТ**//
$register_count = $mysqli->query("SELECT COUNT(*) FROM dle_users");
$register_count = $register_count->fetch_row();

echo $register_count[0];


//**ПОСТ-ИНИЦИАЛИЗАЦИЯ**//
$mysqli->close();
?>