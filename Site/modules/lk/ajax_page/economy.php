<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
?>
<div class="full_news_content">
        <fieldset id="cabinet_content" style="border: none; padding-top: 8px;">



<script>
function e_pay_d() {	
    var ingame0 = document.getElementById("econs_to_player_player");
    var ingame = ingame0.value;
	var money0 = document.getElementById("econs_to_player_count");
    var money = money0.value;
	$.ajax({
        url: "/modules/lk/php/econs/pay_d.php",
		data: {
			ingame:ingame,
			money:money
		},
		type: "POST",
        success: function(content){
            $("#ajax").html(content);
        }
    });
}
function type_e() {
	var s_type1 = document.getElementById("econs_transfer_type");
    var s_type = s_type1.options[s_type1.selectedIndex].value;
	var s_server1 = document.getElementById("econs_transfer_server");
    var s_server = s_server1.options[s_server1.selectedIndex].value;
	var count0 = document.getElementById("econs_transfer_count");
    var count = count0.value;
	if ((s_type == 'toserver')||(s_type == 'fromserver')) {
		if (s_server=='') {
		    ex_error();
		} else {
			if (count!='') {
				$.ajax({
                    url: "/modules/lk/php/econs/serv_d.php",
		            data: {
			            s_type:s_type,
			            s_server:s_server,
						count:count
		            },
		            type: "POST",
                    success: function(content){
                        $("#ajax").html(content);
                    }
                });
			}
		}
	} else {
	    ex_error();
	}
}
</script>
<div class="full_news_comment_content" style="display: inline-block;">

    <h3 style="display: inline-block; font-size: 24px; font-family: 'FSElliotPro-Heavy'; color: #828282; margin-bottom: 12px; line-height: 24px;">
        Управление эконами:</h3>

    <p style="margin-bottom: 24px;">
        $ - это игровая валюта проекта, которая используется для торговли между игроками.
        <br>
        Чтобы получить $ можно <a href="#" onclick="lk_money(); loadPage('money'); return false;">обменяв монеты</a> или <a href="#" onclick="lk_votes(); loadPage('vote'); return false;">проголосовать
            за проект</a>.
    </p>

    <div class="module_block">

        <div class="basic_function_block" style="width: 335px; float: left; margin-left: 0px;">
            <div class="basic_function_block_title">
                <h3>Переводы $ по серверам</h3>
            </div>
            <div>
                Здесь можно перевести $ с сервера или на сервер.

                <br><br><br>

                <input id="econs_transfer_count" type="text" class="cabinet_input" placeholder="Введите кол-во $" style="width: 337px; margin-bottom: 8px;">

                <div class="select" style="width: 336px; margin-right: 16px; margin-top: 24px; display: inline-block;">
                    <select class="select-text" id="econs_transfer_type" required="">
                        <option value="" disabled="" selected="" style="display: none;"></option>
                        <option value="toserver">Перевести на сервер</option>
                        <option value="fromserver">Вывести с сервера (комиссия 5%)</option>
                    </select>
                    <span class="select-highlight"></span>
                    <span class="select-bar"></span>
                    <label class="select-label">Перевести или вывести с сервера?</label>
                </div>

                <div class="select" style="width: 336px; margin-right: 16px; margin-top: 24px; display: inline-block;">
                    <select class="select-text" id="econs_transfer_server" required="">
                    </select>  
					<span class="select-highlight"></span>
                    <span class="select-bar"></span>
                    <label class="select-label">Укажите сервер для перевода</label>
                </div>

                <br><br>

                <a id="econs_transfer_button" class="smcui-button" onclick="type_e()">Перевести $</a>
            </div>
        </div>
    </div>

    <div class="basic_function_block" style="width: 236px; float: right; height: 370px;">
        <div class="basic_function_block_title">
            <h3>Перевод $ другим<br>игрокам</h3>
        </div>
        <div>

            Здесь можно перевести $ другому игроку.<br><br>$ зачисляются мгновенно на счёт игрока в личном
            кабинете. <b>*</b>

            <br><br><br>

            <input id="econs_to_player_player" type="text" class="cabinet_input" placeholder="Введите ник игрока" style="width: 230px; margin-bottom: 12px;">

            <input id="econs_to_player_count" type="text" class="cabinet_input" placeholder="Введите кол-во $" style="width: 230px;">

            <br><br>

            <a id="econs_to_player_button" class="smcui-button" onclick="e_pay_d()">Перевести
                игроку</a>

        </div>
    </div>

    <a class="card_button_block" href="#" onclick="lk_votes() ;loadPage('vote'); return false;" style="background: linear-gradient(to top right, #ea6f53, #ab413f, #843f3f, #393e84)">
        <div class="cover_background" style="background: url(https://simpleminecraft.ru/uploads/svg/econs.svg) no-repeat top right; background-size: cover; width: 98px; height: 98px; margin: 40px;"></div>
        <h4>Баланс $: <?php echo $econs; ?></h4>
        <div class="description">
            Нужно заработать $? Не знаете как это сделать?
            Все просто! Достаточно проголосовать за проект, <b>за 1 голос</b> в одном из рейтингов <b>мы даём Вам 7500 $</b>!
            <br><br>
            <b>Нажмите здесь и сделайте себя богаче!</b>
            <br>
        </div>
        <div class="icon">
            <img src="../uploads/svg/arrow-pointing-to-right.svg">
        </div>
    </a>
</div></fieldset>
    </div>
	
<script>
$.ajax({
        url: "/modules/libs/ints_api/server_option_econs.php",
        success: function(content){
            $("#econs_transfer_server").html(content);
        }
});
</script>