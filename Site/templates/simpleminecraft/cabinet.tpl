<script src="/templates/simpleminecraft/cp/js/cp.js"></script>
<script src="/templates/simpleminecraft/cp/js/cabinet.js"></script>
<script src="/modules/lk/js/alerts.js?v2.26"></script>
<style>
.nice-select {
    -webkit-tap-highlight-color: transparent;
    height: 39px !important;
    background-color: #1b1422;
    border: solid 1px #7328a9;
    color: #6c6763;
    font-size: 14px;
    font-family: 'FSElliotPro';
    padding: 0 14px 0 14px;
    margin: 0 0 6px 0;
        margin-right: 0px;
        margin-left: 0px;
    box-sizing: border-box;
    clear: both;
    display: block;
    float: left;
    line-height: 39px;
    outline: none;
    position: relative;
    text-align: left !important;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    white-space: nowrap;
    width: auto;
    min-width: 132px;
}
</style>
<script>
function change_pack_alert_block() {
Swal.fire({
        title: 'Сменить пароль?',
        position: 'top',
		allowOutsideClick: false,
	    allowEscapeKey: false,
	    allowEnterKey: false,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		showCancelButton: true,
		cancelButtonText: 'Отмена',
		confirmButtonText: 'Сменить',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster',
		    input: 'flareinput',
        },
  html:
    '<input class="swal2-input flareinput" placeholder="Старый пороль" id="pass1" type="password" class="swal2-input">' +
	'<input class="swal2-input flareinput" placeholder="Новый пороль" id="pass2" type="password" class="swal2-input">' +
    '<input class="swal2-input flareinput" placeholder="Повтор нового пороля" id="pass3" type="password" class="swal2-input">',
  focusConfirm: false,
  preConfirm: () => {
	$.ajax({
        url: "/modules/lk/php/change_pass.php",
		type: "POST",
		data: {
		    pass1: document.getElementById('pass1').value,
			pass2: document.getElementById('pass2').value,
			pass3: document.getElementById('pass3').value
		},
        success: function(content){
            $("#ajax").html(content);
        }
    });
  }
})
}
var type_h = 0;
function lk_history() {
$('.selected').removeClass('selected');
$.ajax({
        url: "/modules/lk/ajax_page/history.php?type_h="+type_h,
        success: function(content){
            $("#lk_content").html(content);
			ajax_page = "history";
			history.pushState(null, null, lk_url+'?history');
        }
    });
}
if (document.location.search=="?history") {
	window.onload = function() {
   lk_history();
	}
}
function loaded_s() {
    Swal.fire({
        position: 'top',
        type: 'success',
        title: 'Успешно!',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        showConfirmButton: false,
        timer: 1000
    })
}
</script>
<div class="full_news_comment" style="margin-bottom: 28px; margin-top: 0px;">
    <div class="full_news_comment_top">
        <div class="news_comment_author">
            <div class="news_comment_author_pic">
                <img id="skin-img-avatar" alt="" width="36" height="36" class="rounded-circle img-responsive ml-1" width="50px" style="image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: -webkit-optimize-contrast; image-rendering: pixelated;">
            </div>
            <div class="news_comment_author_link">
                <div class="cabinet_panel_nickname">
                    <span class="hello_player">Кабинет</span>
                    <a class="shortened" tooltip="Кликните, чтобы перейти к настройкам" flow="right">{include file="/modules/libs/ints_api/login.php"}</a>
                </div>
            </div>
        </div>
        <div class="currency_information">
            <span id="realmoney" onclick="lk_money(); loadPage('money'); return false;">0</span>
            <b class="currency_type" tooltip="Монеты используются для покупкок в магазине блоков и привилегий, так же их можно отправить другим игрокам." flow="up">монет</b>

            <span id="money" onclick="lk_economy(); loadPage('econs'); return false;">0</span>
            <b class="currency_type" tooltip="$, это игровая валюта, используется на серверах для торговли между игроками." flow="up">$</b>

            <span id="cases" onclick="lk_case(); loadPage('cases'); return false;">0</span> <b class="currency_type" tooltip="Кейсы, дают вам возможность испытать удачу и выйграть предметы в игре или монеты и $!" flow="up">кейсов</b>
        </div>
    </div>
    <div class="full_news_comment_content" style="display: inline-block;">
        <div class="module_block" style="margin-bottom: 0px;">
            <div class="skin_view" id="skin-container" onclick="loadPage('profile'); return false;" tooltip="Кликните чтобы сменить скин или плащ" flow="right">
                <img id="skin-img-front" style="border: none;" src="/modules/lk/skin.php" alt="" width="90" height="180">
                <img id="skin-img-back" style="border: none; display: none;" src="/modules/lk/skin.php?mode=2&update=0" alt="" width="90" height="180">
            </div>

            <div class="basic_function_block" style="font-size: 15px;">
                Дата вашей регистрации на проекте: <b id="lk_int_reg_date"></b>.
                <br>
                С момента регистрации прошло: <b id="lk_int_reg_days"></b> дней.
                <br><br>
                Возможность установки HD скинов: <a><b id="lk_int_hd_s_pex"></b></a>.
                <br>
				Возможность установки HD плащей: <a><b id="lk_int_hd_c_pex"></b></a>.
                <br>
                Активных привилегий на серверах: <b><a id="lk_int_groups"></a></b>.
                <br>
				<div id="referal_nick"></div>
                <br><br>
                Список операций с аккаунтом можно узнать <b><a onclick="lk_history()">здесь</a></b>.
                <br><br>
                <b><a onclick="change_pack_alert_block()">Сменить пароль?</a></b><div id="radio_admin"></div>
                <br>
                
            </div>
        </div>
    </div>
</div>
<div class="full_news_comment" style="-webkit-box-shadow: 0px 1px 5px 0px rgba(164, 132, 100, .16); -moz-box-shadow: 0px 1px 5px 0px rgba(164, 132, 100, .16);  box-shadow: 0px 1px 5px 0px rgba(164, 132, 100, .16); margin-top: 0px; border-top: 2px solid #301f38; border-bottom: none;">
    <div class="full_news_comment_top">
        <div class="cabinet_functions_menu">
            <a class="tab selected" id="profile_tab" onclick="lk_profile(); history.pushState(null, null, lk_url);">
                <center>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <br>
                    <span>Профиль</span>
                </center>
            </a>
            <a class="tab" id="groups_tab" onclick="lk_donate()">
                <center>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <br>
                    <span>Привилегии</span>
                </center>
            </a>
            <a class="tab" id="money_tab" onclick="lk_money()">
                <center>
                    <i class="fa fa-money" aria-hidden="true"></i>
                    <br>
                    <span>Монеты</span>
                </center>
            </a>
            <!--<a class="tab" id="econs_tab" onclick="lk_economy()">
                <center>
                    <i class="fa fa-euro" aria-hidden="true"></i>
                    <br>
                    <span>Валюта</span>
                </center>
            </a>-->
            <a target="_blank" class="tab" id="cases_tab" onclick="lk_case()">
                <center>
                    <i class="fa fa-cube" aria-hidden="true"></i>
                    <br>
                    <span>Кейсы</span>
                </center>
            </a>
            <a class="tab" id="vote_tab" onclick="lk_votes()" style="border-right: none; padding: 14px 24px 14px 24px; width: 59px;">
                <center>
                    <i class="fa fa-gift" aria-hidden="true"></i>
                    <br>
                    <span>Бонусы</span>
                </center>
            </a>
        </div>
    </div>
</div>
<div id="lk_content" class="fullnews_craft" style="margin: 0 0 0px 0;"></div>
<script type="text/javascript" src="{THEME}/cp/js/cabinet.js"></script>
<script type="text/javascript" src="{THEME}/cp/js/cp.js"></script>

<script src="/modules/lk/js/func.js?v2.6.5.15"></script>
<script>
function lk_top() {
$('.selected').removeClass('selected');
$.ajax({
        url: "/modules/lk/ajax_page/top.php",
        success: function(content){
            $("#lk_content").html(content);
			ajax_page = "top";
			history.pushState(null, null, lk_url+'?top');
        }
    });
}
if (document.location.search=="?top") {
	window.onload = function() {
   lk_top();
	}
}
</script>