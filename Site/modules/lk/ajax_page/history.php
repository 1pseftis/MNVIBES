<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//**СКРИПТ**//

if ($is_admin == true) {
	echo '<script>
function histoy_admin() {
  $(\'.selected\').removeClass(\'selected\');
  $.ajax({
        url: "/modules/lk/ajax_page/history_admin.php",
        success: function(content){
            $("#lk_content").html(content);
        }
    });
}
</script>';
}
?>
<div class="fullnews_craft" style="margin: 0 0 0px 0;">
    <div class="full_news_content">
        <fieldset id="cabinet_content" style="border: none; padding-top: 8px;">
            
            <div class="module_panel">
                <h3><i class="fa fa-user-secret" aria-hidden="true"></i> Информация о последних действиях:    <?php echo $_GET['shop_server']; if ($is_admin == true) echo ' <span onclick="histoy_admin()" style="font-size: 12px; color: #541d7e">(АДМИН-РАЗДЕЛ)</span>';?></h3>
    
                На этой странице Вы можете узнать что какие действия происходят с вашим аккаунтом.
            
                <br><br><br><br>
                
                <center>
                    
                    <b>Выберите тип действий:</b>
                
                    <br><br>
                
                    <select id="logsType" class="nice-select" style="padding: 0 0 0 14px;width: 262px; margin-left: 212px; clear: none; margin-right: 6px;">
<?php
$value = 0;
foreach ($history['type'] as $item) {	
    echo  '<option value="'.$value.'">'.$item['title'].'</option>';
	$value++;
}
?>
                    </select>
                    
                    <br><br><br><br>
                    
                    <div class="notifyjs-wrapper notifyjs-hidable">
	<div class="notifyjs-arrow" style="top: 30px; left: 10px; border-bottom: 5px solid rgb(238, 211, 215); border-left: 5px solid transparent; border-right: 5px solid transparent; display: none;"></div>
	<div class="notifyjs-container" style="top: 35px; left: 0px; display: none;"><div class="notifyjs-bootstrap-base notifyjs-bootstrap-error">
<span data-notify-text="">Информации об этом не найдено.</span>
</div></div>
</div><a onclick="select_type()" class="smcui-button" style="width: 426px; height: 46px; line-height: 0px; margin-top: 14px;" id="goToLogs">
                        Перейти к списку действий
                    </a>
                   
                </center>
                
                <br><br>
            </div>
        <div class="module_panel" style="float: left; width: 696px;"><h3>Список последних действий:</h3>
                <table class="tbl" width="684px" cellspacing="10" cellpadding="3">
                    <thead>
                        <tr class="label_tr">
                            <th class="label_th" width="360px">Действие:</th>
                            <th class="label_th">Количество:</th>
                            <th class="label_th">Дата:</th>
                        </tr>
                    </thead>
                    <tbody id='logs_info' style="line-height: 29px;">
<?php
$history = $mysqli->query("SELECT * FROM `flare_history` WHERE `name` LIKE '$login' AND `type` = 0 ORDER BY `data` DESC");
while($item = $history->fetch_assoc()) {
	            print '<tr>';
                print '<td class="th_base">';
                print $item["text"];
                print '</td>';
                print '<td class="th_base"><b>'.$item["value"].'</b> </td>';
                print '<td class="th_base">'.date('d.m.Y в H:i', $item["data"]).'</td>';
                print '</tr>';
} 
$history->free();
?>    
                
                    </tbody>
                </table>
            <br></div></fieldset>
    </div>
</div>

<script>
function select_type() {
    var type_h1 = document.getElementById("logsType");
    var type_h = type_h1.options[type_h1.selectedIndex].value;
	loaded();
	setTimeout(function() {
	$.ajax({
        url: "/modules/lk/php/logs/log.php?type_h="+type_h,
        success: function(content){
            $("#logs_info").html(content);
        }
    });
	}, 100);
}
</script>