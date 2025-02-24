<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
$s_num = 0;
$s_num2 = 0;
foreach ($shop['cats'] as $item) {
	if($item['id']==$_GET['cat']) {
		$s_num++;
	}
}
foreach ($servers as $item) {
	if($item['title']==$_GET['shop_server']) {
		$s_num2++;
	}
}
if($s_num!=1 || $s_num2!=1){
	die('<script>hz();</script>');
}
if ($_GET['shop_server']=="LavaTech") {
	die('<div class="full_news_content">
	<div class="news_text" style="display: inline-block; padding: 34px 34px 0 34px; width: 672px;" id="contentPage">
	<div style="margin-bottom: 44px;">
                        <h3 class="shop_category_title" style="display: inline-block; float: left;">Наборы ресурсов: '.$_GET['shop_server'].'</h3>
                        <a href="#" onclick="select_cat(\'kits\'); return false;" style="display: inline-block; float: right;"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-right: 10px;"></i><b>Выбрать другой сервер</b></a>
                    </div>
	</div>
	</div>');
}
?>
<div class="full_news_content">
   <div class="news_text" style="display: inline-block; padding: 34px 34px 0 34px; width: 672px;" id="contentPage">
      <div style="margin-bottom: 44px;">
         <h3 class="shop_category_title" style="display: inline-block; float: left;">Наборы ресурсов: <f style="color: #7328a9;"><?php echo $_GET['shop_server']; ?></f></h3>
         <a href="#" onclick="select_cat('kits'); return false;" style="display: inline-block; float: right;"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-right: 10px;"></i><b>Выбрать другой сервер</b></a>
      </div>
      <br><br>
      <div class="kits__row">
         <div class="kit__block" href="#" id="7" style="background-image: url(/uploads/kits/pro.png?v2);" title="Нажмите, чтобы узнать больше или приобрести набор">
            <div class="kit__info" style="color: #ecc44c">
               <div class="kit__label">Набор ресурсов</div>
               Vip 
               <span>
                  <!--s>119</s--> 50 монет
               </span>
            </div>
            <div onclick='kit_info("vip")' class="kit__bui">
               Подробнее
            </div>
         </div>
         <div class="kit__block" href="#" id="8" style="background-image: url(/uploads/kits/advanced.png?v2);" title="Нажмите, чтобы узнать больше или приобрести набор">
            <div class="kit__info" style="color: #4f90c1">
               <div class="kit__label">Набор ресурсов</div>
               Premium 
               <span>
                  <!--s>239</s--> 100 монет
               </span>
            </div>
            <div onclick='kit_info("premium")' class="kit__bui">
               Подробнее
            </div>
         </div>
         <div class="kit__block" href="#" id="9" style="background-image: url(/uploads/kits/ultimate.png?v2);" title="Нажмите, чтобы узнать больше или приобрести набор">
            <div class="kit__info" style="color: #c06caa">
               <div class="kit__label">Набор ресурсов</div>
               Deluxe 
               <span>
                  <!--s>490</s--> 200 монет
               </span>
            </div>
            <div onclick='kit_info("deluxe")' class="kit__bui">
               Подробнее
            </div>
         </div>
      </div>
   </div>
</div>
<script>
function kit_info(kit_name) {
	$.ajax({
        url: "/modules/shop/script/kit_info.php",
		data: {
			kit_name: kit_name,
			server: "<?php echo $_GET['shop_server']; ?>"
		},
        success: function(html){
			$("#ajax").html(html);
        }
    });
}
</script>