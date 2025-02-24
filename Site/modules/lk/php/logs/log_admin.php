<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//**ПРОВЕРКА**//
if ($is_admin != true) {
	die('Access Denied');
}
//**СКРИПТ**//
$history = $mysqli->query("SELECT * FROM `flare_history` WHERE `type` = ".$_GET['type_h']." ORDER BY `data` DESC");
while($item = $history->fetch_assoc()) {
	            print '<tr>';
                print '<td class="th_base">'.$item["id"].'</td>';
				print '<td class="th_base">'.$item["name"].'</td>';
                print '<td class="th_base">';
                print $item["text"];
                print '</td>';
                print '<td class="th_base"><b>'.$item["value"].'</b> </td>';
                print '<td class="th_base">'.date('d.m.Y в H:i', $item["data"]).'</td>';
                print '</tr>';
} 
$history->free();
?>
<script>
loaded_s();
</script>