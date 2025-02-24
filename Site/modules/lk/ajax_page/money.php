<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
?>

<div class="full_news_content">
        <fieldset id="cabinet_content" style="border: none; padding-top: 8px;">
<script>

    var monetsToPlayerButton = $("#monets_to_player_button");
    var montesTransferToEconsButton = $("#monets_transfer_to_econs_button");

    monetsToPlayerButton.click(function () {

        var player = $("#monets_to_player_player").val();
        var count = $("#monets_to_player_count").val();

        if (player !== '' && count !== '') {
            $.post('/index.php?do=cp&csrf=2b7da6ee63840e2173b002e36c7e6ce0', {data: 'sendmoney ' + player + ':' + count}, function (data) {
                data = JSON.parse(data);
                monetsToPlayerButton.notify(data['msg'], data['status']);
                updateBalance();
            });
        } else {
            monetsToPlayerButton.notify('Недостаточно данных, заполните все поля!');
        }
    });

    montesTransferToEconsButton.click(function () {

        var count = $("#monets_transfer_to_econs_count").val();

        if (count !== '') {
            $.post('/index.php?do=cp&csrf=2b7da6ee63840e2173b002e36c7e6ce0', {data: 'exchange ' + count + ':' + count}, function (data) {
                data = JSON.parse(data);
                montesTransferToEconsButton.notify(data['msg'], data['status']);
                updateBalance();
            });
        } else {
            montesTransferToEconsButton.notify('Недостаточно данных, заполните все поля!');
        }
    });

    $("#monets_transfer_to_econs_count").on("input", function (value) {

        var count = parseInt(this.value);

        if (isNaN(count)) {
            count = 0;
        }

        count = count * 1000;

        $("#econs_to_exchange").html(count + " $");
    });

</script>
<style>

    .payments img {
        margin-bottom: 2px;
        width: 72px;
        opacity: 0.9;
        transition: 0.3s;
    }

    .payments img:hover {
        opacity: 1.0 !important;
    }

    .econs_calculator {
        display: inline-block;
        margin-bottom: 18px;
        float: left;
        font-family: 'FSElliotPro-Bold';
    }

    .econs_calculator span {
        margin-top: 20px;
        display: inline-block;
        float: left;
        font-size: 18px;
        color: #7328a9;
        width: 285px;
        height: 32px;
        text-align: center;
        font-family: 'FSElliotPro-Heavy';
    }

</style>
<script>
function exchange2() {	
    var sum0 = document.getElementById("monets_transfer_to_econs_count");
    var sum = sum0.value;
	$.ajax({
        url: "/modules/lk/php/money/dialog.php",
		data: {sum:sum},
		type: "POST",
        success: function(content){
            $("#ajax").html(content);
        }
    });
}
function pay_d() {	
    var ingame0 = document.getElementById("monets_to_player_player");
    var ingame = ingame0.value;
	var money0 = document.getElementById("monets_to_player_count");
    var money = money0.value;
	$.ajax({
        url: "/modules/lk/php/money/pay_d.php",
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
</script>
<div class="full_news_comment_content" style="display: inline-block; padding: 20px 27px 0;">

    <h3 style="display: inline-block; font-size: 24px; font-family: 'FSElliotPro-Heavy'; color: #828282; margin-bottom: 12px; line-height: 24px;">
        Управление монетами:</h3>

    <p style="margin-bottom: 24px;">
        В этом разделе Вы сможете перевести монеты в $, передать их игроку и пополнить счет.
        <br>
        Монеты - своеобразная валюта проекта. Условная стоимость одной монеты - один российский рубль.
    </p>

    <div class="module_block" style="margin-bottom: 24px;">
        <div class="basic_function_block" style="width: 285px; float: left; margin-left: 0px;">
            <div class="basic_function_block_title">
                <h3>Перевод монет игрокам</h3>
            </div>
            <div>

                Здесь можно перевести монеты другому игроку.<br><br>Монеты зачисляются мгновенно на счёт игрока в личном
                кабинете. <b>*</b>

                <br><br><br>

                <input id="monets_to_player_player" type="text" class="cabinet_input" placeholder="Введите ник игрока" style="width: 254px; margin-bottom: 12px;">

                <input id="monets_to_player_count" type="text" class="cabinet_input" placeholder="Введите кол-во монет" style="width: 254px;">

                <br><br>

                <a id="monets_to_player_button" class="smcui-button" onclick="pay_d()">Перевести монеты
                    игроку</a>

            </div>
        </div>

        <div class="basic_function_block" style="width: 285px; float: right; margin-bottom: 24px;">
            <div class="basic_function_block_title">
                <h3>Обмен монет на $</h3>
            </div>
            <div>
                Здесь можно обменять монеты на $ по установленому курсу.
                Так же вы можете обменять монеты у игроков серверов по более выгодному курсу.
                <br><br>

                <div class="econs_calculator">
                    После обмена вы получите:
                    <br>
                    <span id="econs_to_exchange">0 $</span>

                </div>

                <input id="monets_transfer_to_econs_count" type="text" class="cabinet_input" placeholder="Введите кол-во монет к обмену" style="width: 254px;">

                <br><br>

                <a onclick="exchange2()" id="monets_transfer_to_econs_button" class="smcui-button">Перевести
                    монеты в $</a>
            </div>
        </div>

        <a class="card_button_block" onclick="payment();" style="background: /*linear-gradient(-45deg, #e8cc84, #9e3c67);*/linear-gradient(to top right, #4a3736, #6a4b4a, #a27767, #efda8e);">
            <div class="cover_background" style="background: url(https://simpleminecraft.ru/uploads/icons/monets-1.png) no-repeat top right; background-size: cover; width: 126px; height: 78px; margin: 40px 40px 0 0;"></div>
            <h4>Баланс монет: <?php echo $money; ?>.00</h4>
            <div class="description">
                Чтобы пополнить счёт кликните по этой плитке, все просто!
                <br>
                Пополнить счет монет можно через следующие платёжные системы:
                <br><br>
                <p class="payments">
                    <img src="./templates/simpleminecraft/cp/images/payments/qiwi.png" title="Qiwi">
                    <img src="./templates/simpleminecraft/cp/images/payments/yandexmoney.png" title="Яндекс деньги">
                    <!--img src="./templates/simpleminecraft/cp/images/payments/webmoney.png" title="WebMoney"-->
                    <img src="./templates/simpleminecraft/cp/images/payments/visa.png" title="Банковские карты VISA">
                    <img src="./templates/simpleminecraft/cp/images/payments/mastercard.png" title="Банковские карты MasterCard">
                    <img src="./templates/simpleminecraft/cp/images/payments/maestro.png" title="Банковские карты Maestro">
                    <img src="./templates/simpleminecraft/cp/images/payments/mir.png" title="Банковские карты МИР">
                    <img src="./templates/simpleminecraft/cp/images/payments/beeline.png" title="Пополнение с помощью Beeline">
                    <img src="./templates/simpleminecraft/cp/images/payments/mts.png" title="Пополнение с помощью МТС">
                    <img src="./templates/simpleminecraft/cp/images/payments/tele2.png" title="Пополнение с помощью Tele2">
                    <img src="./templates/simpleminecraft/cp/images/payments/megafon.png" title="Пополнение с помощью Megafon">
                    <!--img src="./templates/simpleminecraft/cp/images/payments/applepay.png" title="Пополнение с помощью Apple Pay">
                    <img src="./templates/simpleminecraft/cp/images/payments/alfabank.png" title="Пополнение с помощью Альфа-банка"-->
                </p>

            </div>
            <div class="icon">
                <img src="../uploads/svg/arrow-pointing-to-right.svg">
            </div>
        </a>
    </div>
</div></fieldset>
    </div>