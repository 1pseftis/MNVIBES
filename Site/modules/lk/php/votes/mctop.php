<?php
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');

	$secret_key = 'd670ab8f02f32484e16628816f25716b';					# Вставляем сюда и на сайт секретное слово, 
											# придумываем сами, например Ll3*4!L1*(&$Wsl.
    $econs =  $mysqli->query("select econs from dle_users where name='".$_GET['nickname']."'")->fetch_object()->econs;
	$cases_1 =  $mysqli->query("select cases from dle_users where name='".$_GET['nickname']."'")->fetch_object()->cases;
	$votes =  $mysqli->query("select votes from dle_users where name='".$_GET['nickname']."'")->fetch_object()->votes;

# Некоторые проекты выдают за голосование реальные деньги. Например, 1 голос - 1-2 рубля, это повышает желание
# голосовать, т.к. позволяет покупать донатные группы без материальных вложений.

	if(isset($_GET['nickname']) && isset($_GET['token']))	
	{

	    $nickname = $_GET['nickname'];

	    $token = $_GET['token'];

	    if($token == md5($nickname.$secret_key))
        {
			$newecons = $econs + 4000; 
			$newcases = $cases_1 + 1;
            $newvotes = $votes + 1;			
			$mysqli->query("UPDATE dle_users SET `votes`='$newvotes' WHERE name='".$nickname."'");
			$mysqli->query("UPDATE dle_users SET `votes_time`='".time()."' WHERE name='".$nickname."'");
			$mysqli->query("UPDATE dle_users SET `econs`='$newecons' WHERE name='".$nickname."'");
			$mysqli->query("UPDATE dle_users SET `cases`='$newcases' WHERE name='".$nickname."'");
			echo"OK";
        }

    }

?>