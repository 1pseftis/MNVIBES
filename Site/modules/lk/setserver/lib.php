<?php
$mysqli = new mysqli('localhost','root','zvwdE-UxnE9-P4etr-hgpyR','core');
$login = $_POST['login'];
$set=$mysqli->query("SELECT `defserv` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->defserv; 
$name=$mysqli->query("SELECT `name` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->name; 
if ($name != '') {
if ($set == '') {
echo "<script>setalert();</script>";
}
}
?> 