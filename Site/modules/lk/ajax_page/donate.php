<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
?>

<div class="fullnews_craft" style="margin: 0 0 0px 0;">
    <div class="full_news_content">
        <fieldset id="cabinet_content" style="border: none; padding-top: 8px;">
<style>
    .about_group {
        display: none;
    }
</style>



<div class="full_news_comment_content" style="display: inline-block;">

    <h3 style="display: inline-block; font-size: 24px; font-family: 'FSElliotPro-Heavy'; color: #828282; margin-bottom: 24px; line-height: 24px;">
        Приобретение привилегии:</h3>

    <div class="groups_list">

        <a class="card_button_block" href="#" id="iron" onclick="return false;" style="background: linear-gradient(to top right, #e2cb82,#ff8c5a);">
            <div class="cover_background" style="background: url('/templates/simpleminecraft/images/cabinet/donate/iron.svg') no-repeat top right; background-size: cover;"></div>
            <h4>Iron</h4>
            <div class="description">
                Не можете решиться взять привилегию покруче? Для комфортной игры достаточно полёта и сохранения своих
                вещей? Тогда iron ваш выбор!
            </div>

            <div class="group_bottom">
                <div class="group_price" title="Указанна цена за 1 месяц"><!--s>149</s--> <span>130</span><br>монет</div>
                <div id="donate_iron" data-donate="iron" onclick="donate_step1(this)" class="group_buy_button" title="Приобрести привилегию"><img src="/templates/simpleminecraft/images/cabinet/arrow-pointing-to-right.svg"></div>
            </div>
        </a>

        <a class="card_button_block" href="#" id="gold" onclick="return false;" style="background: linear-gradient(to top right, #45c9fc,#30679f);">
            <div class="cover_background" style="background: url('/templates/simpleminecraft/images/cabinet/donate/gold.svg') no-repeat top right; background-size: cover;"></div>
            <h4>Gold</h4>
            <div class="description">
                Вы желаете выделиться из огромной толпы стивов и поставить красивый HD скин? Для игры нужно немного
                ресурсов?
                Заинтересовало?) Бегом к покупке!
            </div>
            <div class="group_bottom">
                <div class="group_price" title="Указанна цена за 1 месяц"><!--s>239</s--> <span>250</span><br>монет</div>
                <div class="group_buy_button" id="donate_gold" data-donate="gold" onclick="donate_step1(this)" title="Приобрести привилегию"><img src="./templates/simpleminecraft/images/cabinet/arrow-pointing-to-right.svg"></div>
            </div>
        </a>

        <a class="card_button_block" href="#" id="grand" onclick="return false;" style="background: linear-gradient(to top right, #62ce7f,#1f7336);">
            <div class="cover_background" style="background: url('/templates/simpleminecraft/images/cabinet/donate/grand.svg') no-repeat top right; background-size: cover;"></div>
            <h4>Diamond</h4>
            <div class="description">
                Хватит писать в чате белым цветом, используй палитру цветов на максимум! Ещё больше ресурсов и
                возможностей в данной привилегии специально для тебя!
            </div>
            <div class="group_bottom">
                <div class="group_price" title="Указанна цена за 1 месяц"><!--s>429</s--> <span>550</span><br>монет</div>
                <div class="group_buy_button" id="donate_grand" data-donate="diamond" onclick="donate_step1(this)" title="Приобрести привилегию"><img src="./templates/simpleminecraft/images/cabinet/arrow-pointing-to-right.svg"></div>
            </div>
        </a>

        <a class="card_button_block" href="#" id="ultra" onclick="return false;" style="background: linear-gradient(to top right, #b76de6,#822798);">
            <div class="cover_background" style="background: url('/templates/simpleminecraft/images/cabinet/donate/ultra.svg') no-repeat top right; background-size: cover;"></div>
            <h4>Emerald</h4>
            <div class="description">
                Видели на серверах разные прикольные префиксы? Их меняют ребята с привилегией MVP+
                <br>
                Присоединяйся к ним и наводи свои порядки на сервере!
            </div>
            <div class="group_bottom">
                <div class="group_price" title="Указанна цена за 1 месяц"><!--s>990</s--> <span>950</span><br>монет</div>
                <div class="group_buy_button" id="donate_ultra" data-donate="emerald" onclick="donate_step1(this)" title="Приобрести привилегию"><img src="./templates/simpleminecraft/images/cabinet/arrow-pointing-to-right.svg"></div>
            </div>
        </a>
    </div>

    <a class="card_button_block" href="#" onclick="lk_money(); loadPage('money'); return false;" style="width: 678px; background: linear-gradient(to top right, #4a3736, #6a4b4a, #a27767, #efda8e);">
        <div class="cover_background" style="background: url(https://simpleminecraft.ru/uploads/icons/monets-1.png) no-repeat top right; background-size: cover; width: 126px; height: 78px; margin: 32px 32px 0 0;"></div>
        <h4>Баланс монет: <?php echo $money; ?>.00</h4>
        <div class="description">
            Нехватает монеток для приобретения желаемой привилегии?
            <br>
            Нажмите здесь и пополните счет без коммисии за пару секунд!
            <br>
            <br>
        </div>
        <div class="icon">
            <img src="./templates/simpleminecraft/images/cabinet/arrow-pointing-to-right.svg">
        </div>
    </a>

    </div></fieldset>
    </div>
</div>
<script>
function donate_step1(obj) {
    var but_id = document.getElementById(obj.id);
    var donate = but_id.dataset.donate;
    $.ajax({
        url: "/modules/lk/php/donate/selectserver.php",
        type: "POST",
        data: {donate:donate
	    },
        success: function(html){
    		$("#ajax").html(html);
        }
    });	   
}    
function donate_give(obj) {	
    var but_id = document.getElementById(obj.id);
    var donate = but_id.dataset.donate;
    var server = but_id.dataset.server;
	connect();
    $.ajax({
        url: "/modules/lk/api/donate/give_1.php",
        type: "POST",
		data: {donate:donate,
		    server:server
		},
        success: function(html){
			$("#ajax").html(html);
        }
    });	   

}  
</script>