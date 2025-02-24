<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
$cattt = $shop['cats'][$_POST['cat']]['title'];
if ($cattt=='') {
    $cattt = 'Категория не определенна :(';
}	
?>
<script>
function go_shop() {
	var shop_server1 = document.getElementById("selectedServer");
    var shop_server = shop_server1.options[shop_server1.selectedIndex].value;
	if (shop_server!='') {
	$.ajax({
        url: "/modules/shop/script/page_<?php echo $_POST['cat']; ?>.php",
		data: {
			shop_server: shop_server,
			cat: "<?php echo $_POST['cat']; ?>"
		},
        success: function(html){
			$("#shop_content").html(html);
        }
    });
	} else {
		not_server();
	}
}
var get_server = "<?php echo $_POST['server']; ?>";
if (get_server!='') {
	$(document).ready(function() {
	$.ajax({
		url: "/modules/shop/script/page_<?php echo $_POST['cat']; ?>.php",
		data: {
			shop_server: get_server,
			cat: "<?php echo $_POST['cat']; ?>"
		},
		success: function(html){
			$("#shop_content").html(html);
		}
	});
	});
} else {
	loading_close()
}

</script>
<div class="full_news_content">
        <div class="news_text" style="display: inline-block; padding: 34px 34px 0 34px; width: 672px;" id="contentPage">

            <div style="margin-bottom: 44px;">
                <h3 class="shop_category_title" style="display: inline-block; float: left;"><?php echo $cattt;?></h3>
                <a href="<?php echo $shop['url'] ?>" style="display: inline-block; float: right;"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-right: 10px;"></i><b>Выбрать другую категорию</b></a>
            </div>
     
            <div class="basic_function_block" style="margin-left: 0px; margin-top: 24px; margin-bottom: 31px; width: 632px; float: left; display: inline-block;">
                <div class="basic_function_block_title">
                    <h3 style="margin-bottom: 8px;">Выберите нужный Вам сервер:</h3>
                </div>
                <div>
                    
                    <p style="font-size: 14px; margin-bottom: 42px;">Для каждого типа сервера предусмотрены различные предметы и их цены.</p>
                
                    <div class="select" style="width: 270px; margin-right: 16px; display: inline-block;">
                        <select class="select-text" id="selectedServer" required="">
                            <option value="" disabled="" selected="" style="display: none;"></option>
<?php
foreach ($servers as $server) {
    echo  '<option value="'.$server['title'].'">'.$server['title'].'</option>';
}
?>
						</select>
                        <span class="select-highlight"></span>
                        <span class="select-bar"></span>
                        <label class="select-label">Выберите нужный сервер</label>
                       
                    </div>    
                    <a class="smcui-button" onclick='go_shop()' id="goToServerShop">
                        Перейти к списку покупок&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
                            
        </div>

    </div>