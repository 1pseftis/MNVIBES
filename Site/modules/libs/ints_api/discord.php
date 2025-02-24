<?php
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');


if ($discord_token!='false') {
    die('Связь с аккаунтом Discord - '.$discord_username.'#'.$discord_discriminator.' <b><a onclick="logout_discord()">отключить</a></b>.');
} else  {
	die('Связать аккаунт с Discord\'ом <b><a onclick="login_discord()">подключить</a></b>.');
}
