<?php
$time = time();
$bans=$mysqli->query("SELECT * FROM `banlist` WHERE `temptime` < $time");
while($ban = $bans->fetch_assoc()) {
    $mysqli->query("DELETE FROM `banlist` WHERE `id` = ".$ban['id']);
}