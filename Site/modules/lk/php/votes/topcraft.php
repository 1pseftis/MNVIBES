<?php
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');


 $conf['secretkey'] = 'beb12a4f120316326229d644ee7c3ab0';//Ваш секретный ключ на TopCraft.Ru (Настраивается в Настройках проектов --> Поощрения)
 $timestamp = $_POST['timestamp']; //Передает время, когда человек проголосовал за проект
 $username = htmlspecialchars($_POST['username']); //Передает Имя проголосовавшего за проект
 
 $econs =  $mysqli->query("select econs from dle_users where name='".$username."'")->fetch_object()->econs;
 $cases_1 =  $mysqli->query("select cases from dle_users where name='".$username."'")->fetch_object()->cases;
 $votes =  $mysqli->query("select votes from dle_users where name='".$username."'")->fetch_object()->votes;
 
//Далее идёт код отвечающий за выдачу поощрений!
//Если вы не обладаете знаниями в php и mysql, крайне не рекомендуем Вам что-то менять!
 
  if (!preg_match("/^[a-zA-Z0-9_]+$/", $username)) die("Bad login");
 
 if ($_POST['signature'] != sha1($username.$timestamp.$conf['secretkey'])) die("hash mismatch");
  $newecons = $econs + 4000; 
  $newcases = $cases_1 + 1;
  $newvotes = $votes + 1;			
  $mysqli->query("UPDATE dle_users SET `votes`='$newvotes' WHERE name='".$username."'");
  $mysqli->query("UPDATE dle_users SET `votes_time`='".time()."' WHERE name='".$username."'");
  $mysqli->query("UPDATE dle_users SET `econs`='$newecons' WHERE name='".$username."'");
  $mysqli->query("UPDATE dle_users SET `cases`='$newcases' WHERE name='".$username."'");
  echo 'OK<br />';
//Конец скрипта.
//Все права принадлежат проекту TopCraft.RU (с) 2011-2013

//Last update: 28.03.2013
?>