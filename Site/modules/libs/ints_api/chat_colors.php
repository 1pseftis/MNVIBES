<option value="" disabled="" selected="" style="display: none;"></option>
<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');

//**СКРИПТ**//
$value = 0;
foreach ($chat['colors'] as $item) {	
    echo  '<option value="'.$value.'">'.$item['mc'].' - '.$item['title'].'</option>';
	$value++;
}
?>