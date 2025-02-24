<?php
$resp = json_decode(file_get_contents('https://UniversalStudio.online/modules/lk/php/mon/ajax.php'), true);
if ($resp['servers'][$_GET['server']]['status'] == 'Выключен') {
    echo 'Restarting';
} else {
	die($resp['servers'][$_GET['server']]['online'].'/'.$resp['servers'][$_GET['server']]['slots']);
}
