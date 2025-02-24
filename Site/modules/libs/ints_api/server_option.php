<option value="" disabled="" selected="" style="display: none;"></option>
<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');

//**СКРИПТ**//
foreach ($servers as $server) {
    echo  '<option value="'.$server['title'].'">'.$server['title'].'</option>';
}
?>