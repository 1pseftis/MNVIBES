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
?>
    <div class="full_news_content">
        <div class="news_text" style="display: inline-block; padding: 34px 34px 0 34px; width: 672px;" id="contentPage">
         
                    
                    <div style="margin-bottom: 44px;">
                        <h3 class="shop_category_title" style="width: 100%;display: inline-block; float: left;">Магазин сервера: <f style="color: #7328a9;"><?php echo $_GET['shop_server'];?></f><? if ($is_admin == true) echo ' <span onclick="addblock(server_cp = \''.$_GET['shop_server'].'\')" style="float: right;display: inline-block;font-size: 12px;background: #7328a9;padding: 11px;cursor: pointer;color: #ffffff;">(ДОБАВИТЬ ПРЕДМЕТ)</span>';?></h3>
                        <a href="#" onclick="select_cat('items');" style="display: inline-block;"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-right: 10px;"></i><b>Выбрать другой сервер</b></a>
                    </div>
                    
                    <br>
					<style>
					.shop_information {background: #301f38;border: solid 1px #f43837;padding: 11px;font-weight: bold;color: #F44336;}
					</style>
                    <div class="shop_information">Внимание! У вас в инвентаре должно быть свободное место!</div>
					
                    <div class="shop_menu">
                        <input id="shop_search" oninput="shopsearch_f();" type="text" name="item_name" placeholder="Поиск по предметам магазина <?php echo $_GET['shop_server']; ?>">
                    </div>
                    
					<!--div class="basic_function_block" style="text-align: center; font-size: 14px; margin-left: 0px; width: 632px; display: inline-block;">
                    <div>
                        <b><span class="masha_index masha_index8" rel="8"></span>Сейчас в магазине на все предметы скидка <u>-50%</u>! <i class="fa fa-gift" aria-hidden="true" style="color: orange;"></i></b>
                    </div>
                    </div>
					<br>
					<br>
					<br><br-->
					<div class="basic_function_block" style="margin-left: 0px; margin-top: 24px; margin-bottom: 31px; width: 632px; float: left; display: inline-block;">
                <div class="basic_function_block_title">
                    <h3 style="margin-bottom: 8px;">Фильтры витрины магазина <f style="color: #7328a9;"><?php echo $_GET['shop_server']; ?></f>:</h3>
                </div>
                <div>
                    
                <div style="width: 270px; margin-right: 5px; display: inline-block;">
				<p style="font-size: 14px;">Сортировка по:</p>
                    <div class="select" style="width: 100px; margin-right: 5px; display: inline-block;">
                       <select onchange="shopsearch_f()" class="select-text" id="sort_type" required="">
                            <option value="price">Цене</option><option value="name">Имени</option><option value="date">Дате добавления</option></select>
					</div> 
					<div class="select" style="width: 140px; margin-right: 5px; display: inline-block;">
                       <select onchange="shopsearch_f()" class="select-text" id="sort_way" required="">
                            <option value="plus">Возрастанию</option><option value="minus">Убыванию</option></select>
                    </div></div>
			   <div style="width: 180px; margin-right: 5px; display: inline-block;">
				<p style="font-size: 14px;">Цена:</p>
                    <div style="width: 75px; margin-right: 10px; display: inline-block;">
                       <input oninput="shopsearch_f();" id="price_minimum" type="text" class="cabinet_input" placeholder="Минимум" style="width: 78px; margin-bottom: 12px;">
					</div> 
					<div style="width: 75; margin-right: 5px; display: inline-block;">
                       <input oninput="shopsearch_f();" id="price_maximum" type="text" class="cabinet_input" placeholder="Максимум" style="width: 78px; margin-bottom: 12px;">
                    </div></div>
				<div style="width: 155px; margin-right: 5px; display: inline-block;">
				<p style="font-size: 14px;">Валюта:</p>
			    <div class="select" style="width: 155; margin-right: 16px; display: inline-block;">
                       <select onchange="shopsearch_f()" class="select-text" id="price_type" required="">
                            <option value="money">Монеты</option><option value="votes">Голоса</option></select>
					</div></div>
                </div>
            </div>
                    <div class="shop_catalog">
                <table>
                <tbody id='shop_items'>
				
            </tbody></table><center id="shop_search_request_notfound" style="display: none;"><br><br><b>Товаров с похожим именем не найдено.</b><br><br></center></div></div>

    </div>
<?php
if ($is_admin == true) {
	echo"<style>input.swal2-input {font-size: 17px!important;font-family: system-ui;}.img-shop-admin {margin-top: -13px;text-align: left;color: #c7c6c7;background: #211829;padding-left: 15px;font-family: system-ui;}.attrDesc {font-family: system-ui;text-align: left;color: #c7c6c7;background: #211829;margin-top: -13px;padding: 15px;}f {color: #888888;}</style>";
}
?>

<script>
<?php
if ($is_admin == true) {
echo "
var form, addblock_id, addblock_name, addblock_cost
//var reg = new RegExp('[^0-9,:]');
function addblock(server_cp) {
	Swal.fire({
        title: 'Добавить предмет на '+server_cp,
        html: '<form enctype=\"multipart/form-data\" method=\"POST\" action = \"/modules/shop/uploader.php\" id = \"block_form\"><input name = \"addblock_id\" class=\"swal2-input flareinput\" placeholder=\"META-ID предмета (META-ID) Пример: stone, wool, glass\" id=\"addblock_id\" >' +
			  '<div class=\"img-shop-admin\"><div class=\"how-meta\">Где найти Meta-ID? (в данном случае \"log\")</div><img src=\"/modules/shop/img/shopinfo.jpg\"></div>' +
			  '<input name = \"addblock_data\" class=\"swal2-input flareinput\" placeholder=\"DATA предмета, допустим шерсть разного цвета 1-15\" id=\"addblock_name\" >' +
			  '<div class=\"img-shop-admin\"><div class=\"how-meta\">(Можно не указывать) Где найти DATA предмета? <br>(в данном случае \"11\")</div><img src=\"/modules/shop/img/shopinfo2.png\"></div>' +
			  '<input name = \"addblock_name\" class=\"swal2-input flareinput\" placeholder=\"Название\" id=\"addblock_name\" >' +
			  '<input name = \"addblock_amount\" class=\"swal2-input flareinput\" placeholder=\"Кол-во по сколько единиц продается. До 64 единиц!\" id=\"addblock_amount\" >' +
			  '<input name = \"addblock_cost\" class=\"swal2-input flareinput\" placeholder=\"Цена за кол-во указанное выше\" id=\"addblock_cost\" >' +
			   '<input name = \"addblock_command\" class=\"swal2-input flareinput\" placeholder=\"Команда выдачи предмета.\" id=\"addblock_cost\" >' +
			  '<div class=\"attrDesc\">Пример: give <f>{username}</f> <f>{block_id}</f> <f>{amount}</f> <f>{data}</f></div>' +
			  '<input name = \"addblock_vote\" class=\"swal2-input flareinput\" placeholder=\"Цена в голосах (можно указать 0, если не нужно)\" >' +
			  '<span style=\"font-size: 24px;font-family: system-ui;color: #b3b3b3;\">Иконка предмета</span>' +
			  '<input name=\"block_uploader\" type=\"file\" accept=\"image/*\" aria-label=\"Upload your profile picture\" class=\"swal2-file\" style=\"display: flex;\" placeholder=\"\">'+
		      '<input style=\"display: none\" value=\"".$_GET['shop_server']."\" name=\"addblock_server\"></form>',
		
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		preConfirm: () => {
			form = document.getElementById(\"block_form\");
			addblock_id = document.getElementById(\"addblock_id\").value;
			addblock_name = document.getElementById(\"addblock_name\").value;
			addblock_cost = document.getElementById(\"addblock_cost\").value;
			addblock_amount = document.getElementById(\"addblock_amount\").value;
			if (addblock_id!='' && addblock_name!='' && addblock_cost!='' && addblock_amount!='') {
			    form.submit();
			} else {
				setTimeout(function() {
				Swal.fire({
					title: \"Заполните все поля\",
					type: \"error\",
					position: \"top\",
                    timer: 1500,
					animation: false,
		            customClass: {
                        popup: \"animated fadeInDown faster\"
                    },
					background: \"#15101a\",
					showConfirmButton: false
				})
				}, 100);
			}
		},
		confirmButtonColor: '#7328a9',
		background: '#15101a',
		position: 'top',
		animation: false,
		cancelButtonColor: '#828282',
        cancelButtonText: 'Отмена'
	});
}";
}
?>
function shopsearch_f() {
	var sort_type1 = document.getElementById("sort_type");
    var sort_type = sort_type1.options[sort_type1.selectedIndex].value;
	
	var sort_way1 = document.getElementById("sort_way");
    var sort_way = sort_way1.options[sort_way1.selectedIndex].value;
	
	var price_minimum = document.getElementById("price_minimum").value;
	
	var price_maximum = document.getElementById("price_maximum").value;
	
	var price_type1 = document.getElementById("price_type");
    var price_type = price_type1.options[price_type1.selectedIndex].value;
	
	var shopsearch = document.getElementById("shop_search").value;
	$.ajax({
        url: "/modules/shop/script/items.php",
		data: {
			server: '<?php echo $_GET['shop_server']; ?>',
		    shopsearch: shopsearch,
			sort_type: sort_type,
			sort_way: sort_way,
			price_minimum: price_minimum,
			price_maximum: price_maximum,
			price_type: price_type
		},
        success: function(html){
			$("#shop_items").html(html);
        }
    });
}
function buy_item(obj) {
	var article = document.getElementById(obj.id);
    var amount = article.dataset.amount;
    var price = article.dataset.price;
    var id = article.dataset.id;
    var image = article.dataset.image;
    var name = article.dataset.name;
	var ptype = article.dataset.ptype;
	var naborsget = Math.floor(128/amount);
	Swal.fire({
        text: 'Сколько штук вы хотите купить?',
        input: 'range',
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		confirmButtonColor: '#7328a9',
		background: '#15101a',
		position: 'top',
		animation: false,
		showCancelButton: true,
		cancelButtonColor: '#828282',
        cancelButtonText: 'Отмена',
		imageUrl: image,
		imageWidth: 64,
        inputAttributes: {
        min: amount,
        max: 128,
        step: amount
    },
    inputValue: amount
    }).then((result) => {
    if (result.value) {
		$.ajax({
            url: "/modules/shop/script/dialog.php",
	    	data: {
				server:'<?php echo $_GET['shop_server'] ?>',
				id: id,
				title: name,
				ptype, ptype,
				amount: result.value
	    	},
            success: function(html){
	    		$("#ajax").html(html);
            }
        });
    }
})
}
function buy_set(obj) {
	var article = document.getElementById(obj.id);
    var price = article.dataset.price;
    var id = article.dataset.id;
    var image = article.dataset.image;
    var name = article.dataset.name;
	Swal.fire({
		title: 'Набор '+name,
        text: 'Перед покупкой обязательно очистите свой инвентарь, иначе купленные вещи выпадут на землю!?',
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		confirmButtonColor: '#7328a9',
		background: '#15101a',
		position: 'top',
		animation: false,
		showCancelButton: true,
		cancelButtonColor: '#828282',
        cancelButtonText: 'Отмена',
		confirmButtonText: 'Купить за '+price+' монет',
		imageUrl: image,
		imageWidth: 256,
    }).then((result) => {
    if (result.value) {
		$.ajax({
            url: "/modules/shop/script/buy_set.php",
			type: "GET",
	    	data: {
				server:'<?php echo $_GET['shop_server'] ?>',
				id: id,
				title: name
	    	},
            success: function(html){
	    		$("#ajax").html(html);
            }
        });
    }
})
}
shopsearch_f();
loading_close()
</script>