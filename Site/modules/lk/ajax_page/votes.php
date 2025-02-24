<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');



if ($is_admin == true) {
echo "
<script>
var form, gift_code, addblock_name, addblock_cost
function addgift() {
	Swal.fire({
        title: 'Добавить Gift-код',
        html: '<input class=\"swal2-input flareinput\" placeholder=\"Код (Обязательно)\" id=\"gift_code\" >' +
			  '<input type=\"number\" class=\"swal2-input flareinput\" placeholder=\"Количество использований\" id=\"gift_amount\" style=\"max-width: 100em;\">' +
			  '<input input type=\"number\" class=\"swal2-input flareinput\" placeholder=\"Действует до (Unix-time)\" id=\"gift_data\" style=\"max-width: 100em;\">' +
			  '<input class=\"swal2-input flareinput\" placeholder=\"Монет (число / 0 - отключено / диапазон)\" id=\"gift_money\" style=\"max-width: 100em;\">' +
			  '<input class=\"swal2-input flareinput\" placeholder=\"$ (число / 0 - отключено / диапазон)\" id=\"gift_econs\" style=\"max-width: 100em;\">' +
			  '<input class=\"swal2-input flareinput\" placeholder=\"Кейсов (число / 0 - отключено / диапазон)\" id=\"gift_cases\" style=\"max-width: 100em;\">',
		
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		preConfirm: () => {
			gift_code = document.getElementById(\"gift_code\").value;
			gift_amount = document.getElementById(\"gift_amount\").value;
			gift_data = document.getElementById(\"gift_data\").value;
			gift_money = document.getElementById(\"gift_money\").value;
			gift_econs = document.getElementById(\"gift_econs\").value;
			gift_cases = document.getElementById(\"gift_cases\").value;
			if (gift_code!='' && gift_amount!='' && gift_data!='' && gift_money!='' && gift_econs!='' && gift_cases!='') {
			    $.ajax({
                    url: \"/modules/lk/php/gift/add.php\",
                    type: \"POST\",
	                data: {
						gift_code: gift_code,
						gift_amount: gift_amount,
						gift_data: gift_data,
						gift_money: gift_money,
						gift_econs: gift_econs,
						gift_cases: gift_cases
				    },
				success: function(html){
					$(\"#ajax\").html(html);
            }
        });
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
		showCancelButton: true,
		cancelButtonColor: '#828282',
        cancelButtonText: 'Отмена'
	});
}
function giftlist() {
	Swal.fire({
        html: '<br><br><table class=\"tbl\" width=\"100%\" cellspacing=\"10\" cellpadding=\"3\">'+
                   '<thead>'+
                        '<tr class=\"label_tr\">'+
                            '<th class=\"label_th\" width=\"360px\">Гифт-код:</th>'+
                            '<th class=\"label_th\">Активен до:</th>'+
                            '<th class=\"label_th\">Осталось использований:</th>'+
                        '</tr>'+
                    '</thead>'+
                    '<tbody id=\"gift_list\" style=\"line-height: 29px;\">' +";	
$gifts_list = $mysqli->query("SELECT * FROM `flare_gifts`");
while($gift_act = $gifts_list->fetch_assoc()) {
	echo "'<tr><td align=\"left\" class=\"th_base\">Код: \"".$gift_act['code']."\", бонусы ".$gift_act['money']." монет, ".$gift_act['econs']." $, ".$gift_act['cases']." кейсов <i onclick=\"code_delete(\'".$gift_act['id']."\')\" class=\"fa fa-trash\" aria-hidden=\"true\"></i></td><td align=\"left\" class=\"th_base\"><b>". date('d.m.Y H:i', $gift_act['date']) ."</b> </td><td align=\"left\" class=\"th_base\">".$gift_act['amount']."</td></tr>'+";
}	
                   echo " '</tbody>'+	
                '</table>',
		confirmButtonColor: '#7328a9',
		background: '#15101a',
		width: '70%',
		position: 'top',
		animation: false,
		showCloseButton: true,
		showConfirmButton: false,
		cancelButtonColor: '#828282',
        cancelButtonText: 'Закрыть',
		customClass: {
            popup: 'animated fadeInDown faster'
         }
	});
}
function code_delete(gift_id) {
$.ajax({
		url: \"/modules/lk/php/gift/del.php\",
		type: \"POST\",
		data: {
			gift_id: gift_id
		},
		success: function(html){
			$(\"#ajax\").html(html);
		}
	});
}
</script>
";
}
?>
<div class="full_news_content">
        <fieldset id="cabinet_content" style="border: none; padding-top: 8px;">

<style>
    .ratingBlock {
        width: 88px;
        display: inline-block;
    }

    .ratingBlock i {
        color: #a3a3a3;
        padding-top: 10px;
    }

</style>
<script>
function copy_promo() {
    var copyText = document.getElementById('promo_referal');
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
	document.getElementById('copy_b').innerHTML = 'Промокод скопирован';
	setTimeout("document.getElementById('copy_b').innerHTML = 'Скопировать снова';", 2500);
}

function activate() {
	  var code = document.getElementById('promocode').value;
	  $.ajax({
            url: "/modules/lk/php/gift/algo.php",
            type: "POST",
	        data: {
				code: code
				},
            success: function(html){
			    $("#ajax").html(html);
            }
        });
}
function activate_referal() {
	  $.ajax({
            url: "/modules/lk/php/gift/getbonus.php",
            success: function(html){
			    $("#ajax").html(html);
            }
        });
}

</script>

<div class="full_news_comment_content">

    <h3 style="display: inline-block; font-size: 24px; font-family: 'FSElliotPro-Heavy'; color: #828282; margin-bottom: 12px; line-height: 24px;">
        Голосование:</h3>

    <p style="margin-bottom: 24px;">
        Голосуя за наш проект в топах, вы не только поддерживаете свой любимый проект, но и получаете за это ценные
        бонусы. $, <a href="#" onclick="lk_case(); loadPage('cases'); return false;">кейсы</a>, голоса в <a href="#" onclick="lk_top(); return false;">топе
            голосующих</a> – это все вы можете заработать в несколько кликов.

        <br><br><b>$</b>
        – внутриигровая валюта на серверах нашего проекта<br>
        <b>Кейсы</b> – открывая их, вы сможете получить ценные ресурсы, $ и даже монеты.

        <br><br>

        Первая тройка игроков в <a href="#" onclick="lk_top(); return false;">топе голосующих</a>
        получает за свои старания призы
    </p>

    <h3 style="display: inline-block; font-size: 24px; font-family: 'FSElliotPro-Heavy'; color: #828282; margin-bottom: 12px; line-height: 24px;">
        Что я получу проголосовав в двух топах?</h3>

    <p style="margin-bottom: 24px;">
        <b style="font-size: 18px;">
            - 8000 $,
            <br>
            - 1 кейс,
            <br>
            - 4 голосов в топе голосующих.
        </b>

        <br><br>

        Голоса в топе голосующих можно получать неограниченное количество раз, тем самым повышая свои шансы занять
        призовое
        место.
    </p>

    <div class="basic_function_block" style="margin-bottom: 24px; margin-left: 0px; width: 636px;">
        <div class="basic_function_block_title">
            <h3>Проголосуйте и поддержите проект здесь:</h3>
        </div>
        <div>
            За проект можно проголосовать на <b>MCTop</b> и <b>TopCraft</b> !<br>Для того чтобы перейти на страницу голосования кликните по названию рейтинга:

				<div id="ratingsBlocks" style="text-align: center; margin-top: 24px; widht: 600px;">       <div class="ratingBlock">
                    <a href="https://mctop.su/servers/6228/" target="_blank"><img src="https://simpleminecraft.ru/uploads/servers/mctop.png" title="Перейти к голосованию на MCTop.su">
                    </a>
                </div>
                <div class="ratingBlock">
                    <a href="https://topcraft.ru/servers/10697/" target="_blank"><img src="https://simpleminecraft.ru/uploads/posts/2014-12/1419975602_topcraft.png" title="Перейти к голосованию на TopCraft.Ru">
                    </a>
                </div>
                <!--<div class="ratingBlock">
                    <a href="http://mcrate.su/project/8726" target="_blank"><img src="https://simpleminecraft.ru/uploads/servers/mcrate.png" title="Перейти к голосованию на MCRate.su">
                    </a>
                </div>-->
				<!--div class="ratingBlock">
                    <a href="https://mctop.pro/101762-bestqwal.html" target="_blank"><img src="/modules/lk/css/9.png" title="Перейти к голосованию на MCTop.pro">
                    </a>
                </div-->
				<!--<<div class="ratingBlock">
                    <a href="https://fairtop.in/project/1436" target="_blank"><img src="/modules/lk/css/ft.png?3" title="Перейти к голосованию на FairTop.in">
                    </a>
                </div>-->
                </div>

            <br><br>

            <span style="text-transform: uppercase; text-align: right; float: right; font-size: 16px; color: #7328a9;"><b>МЫ
                    ОЧЕНЬ ЦЕНИМ ВАШУ ПОДДЕРЖКУ!<br>ОГРОМНОЕ СПАСИБО ВАМ, ЗА КАЖДЫЙ ВАШ ГОЛОС!</b></span>
        </div>
    </div>
<div class="basic_function_block" style="margin-bottom: 24px; margin-left: 0px; width: 636px;">
        <div class="basic_function_block_title">
            <h3>Реферальная система:</h3>
        </div>
        <div>
            У нашего проекта есть <b>реферальная система</b> с помощью неё вы помогаете проекту находить новых игроков.
            <br>Просто поделитесь промокодом с другом и получите бонус!<br>
			<div style="margin-right: 16px; margin-top: 26px; display: inline-block; width: 348px;">
                        <input id="promo_referal" type="text" class="cabinet_input" value="<?php echo $uuid ?>" style="width: 337px; margin-bottom: 8px;" readonly>
                    </div>
		    <a id="copy_b" onclick="copy_promo()"  class="smcui-button" style="margin-right: 0px;">Копировать реферал-код</a>
            <h3 style="display: inline-block; font-size: 24px; font-family: 'FSElliotPro-Heavy'; color: #828282; margin-bottom: 12px; line-height: 24px;">
       Как другу активировать реферал-код?</h3>

    <p style="margin-bottom: 24px;">
        <p style="font-size: 14px;">
            1.Реферал-коды работают только с аккаунтами зарегестрированными не более суток (Речь идёт о тех с кем вы поделились ссылкой)!
            <br>
            2.После введения реферал-кода игрок должен отиграть 10 часов на проекте и привязать аккаунт Discord (Во избежание накруток)
            <br>
            3.Если все условия совпадут то вам и тому кто активировал ваш реферал-код будет начислен бонус.
        </p>

        <br><br>

        <h3 style="display: inline-block; font-size: 24px; font-family: 'FSElliotPro-Heavy'; color: #828282; margin-bottom: 12px; line-height: 24px;">
       Что я получаю с одного успешно приведённого игрока?</h3>
	   <b style="font-size: 18px;">
            - <?php echo $gifts['referals']['referal']['econs'];?> $,
            <br>
            - <?php echo $gifts['referals']['referal']['cases'];?> кейсов,
            <br>
            - <?php echo $gifts['referals']['referal']['money'];?> монет на аккаунт.
        </b>
		<h3 style="display: inline-block; font-size: 24px; font-family: 'FSElliotPro-Heavy'; color: #828282; margin-bottom: 12px; line-height: 24px;"><br>
       Что получает игрок которого я привёл?</h3><br>
	   <b style="font-size: 18px;">
            - <?php echo $gifts['referals']['new_user']['econs'];?> $,
            <br>
            - <?php echo $gifts['referals']['new_user']['cases'];?> кейсов,
            <br>
            - <?php echo $gifts['referals']['new_user']['money'];?> монет на аккаунт.
        </b>
    </p>
            

            <br><br>

            
        </div>
    </div>
<div class="basic_function_block" style="margin-bottom: 24px; margin-left: 0px; width: 636px;">
<h3 style="display: inline-block; font-size: 24px; font-family: 'FSElliotPro-Heavy'; color: #828282; margin-bottom: 12px; line-height: 24px;"><br>
      Gift-коды: <?php echo $_GET['shop_server']; if ($is_admin == true) echo ' <span onclick="addgift()" style="font-size: 12px; color: #541d7e">(Добавить гифт-код)</span>,<span onclick="giftlist()" style="font-size: 12px; color: #541d7e">(Список гифт-кодов)</span>';?></h3><br>
	  <div>
            <b>Gift-коды </b>- подарочные купоны которые публикует администрация в нашей <a href="https://vk.com/UniversalStudios" target="_blank">группе VK.com</a> или <a href="https://UniversalStudio.online/modules/redirect/discord/" target="_blank">Discord канале</a>.
            <br><b>Реферал-коды </b>- тоже, что и гифт-коды, но для их активации нужно выполнить несколько условий и передаются они от игрока к игроку.<br></div>
<div style="margin-right: 16px; margin-top: 26px; display: inline-block; width: 400px;">

                        <input id="promocode" type="text" class="cabinet_input" placeholder="Введите gift-код/реферал-код" style="width: 387px; margin-bottom: 8px;">
                    </div>
		    <a onclick="activate()"  class="smcui-button" style="margin-right: 0px;">Активировать код</a><br>
			<?php
			$time = 300 - $playtime;
            $hours = floor($time / 60);
            $minutes = $time % 60;
			if ($referal_active == 0 && $referal != '') {
				echo '<h3 style="display: inline-block; font-size: 24px; font-family: \'FSElliotPro-Heavy\'; color: #828282; margin-bottom: 12px; line-height: 24px;"><br>У вас активирован реферал-код</h3><br>';
			    if ($playtime < 300) {
					echo 'Но для получения бонуса осталось выполнить несколько пунктов:<br><br>';
					echo '<b style="font-size: 18px;">';
					
					if ($playtime < 300 ) {
						echo '- Отиграть на сервере 5 часов (Осталось ';
						printf('%02d:%02d:00', $hours, $minutes);
						echo ')<br>';
					}
					echo '</b>';
				} else {
					echo 'И вы успешно выполнили все пункты, теперь нажмите кнопочку ниже, чтобы получить бонус!<br><br>';
					echo '<a onclick="activate_referal()" class="smcui-button" style="margin-right: 0px;">Получить бонус!</a>';
				}
			} 
			?>
</div>
</div></fieldset>
    </div>