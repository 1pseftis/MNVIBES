<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');

if ($radio_admin==1) {
	echo '<b onclick="radio_admin()"><a>Админка-Радио</a><b>';
}
?>
<script>
function radio_admin() {
$.ajax({
        url: "/modules/lk/ajax_page/radio.php",
        success: function(content){
            $("#lk_content").html(content);
        }
    });
}
</script>