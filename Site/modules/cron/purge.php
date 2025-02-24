<?php
$time = time() - 2592000;
$history=$mysqli->query("SELECT * FROM `flare_history` WHERE `data` < $time");
while($item = $history->fetch_assoc()) {
    $mysqli->query("DELETE FROM `flare_history` WHERE type` != 9 AND `id` = ".$item['id']);
}

$gifts=$mysqli->query("SELECT * FROM `flare_gifts` WHERE `date` < ".time());
while($item = $gifts->fetch_assoc()) {
    $mysqli->query("DELETE FROM `flare_gifts` WHERE `id` = ".$item['id']);
}

$gifts2=$mysqli->query("SELECT * FROM `flare_gifts` WHERE `amount` = 0");
while($item = $gifts2->fetch_assoc()) {
    $mysqli->query("DELETE FROM `flare_gifts` WHERE `id` = ".$item['id']);
}