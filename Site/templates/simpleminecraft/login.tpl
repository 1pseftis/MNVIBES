[group=5]
<div id="login">
    <h3>Авторизация</h3>
    <form method="post" action="#">
        <input type="text" class="loginfield" name="login_name" id="login_name" placeholder="Логин"/>
        <input type="password" class="loginfield" name="login_password" id="login_password" placeholder="Пароль"/>
        <button onclick="submit();" type="submit" class="loginbutton">ВОЙТИ</button>
        <input name="login" type="hidden" id="login" value="submit"/>
    </form>

    <a class="login_register" href="/index.php?do=register">Регистрация</a>
    <a class="login_recovery" href="{lostpassword-link}">Не удаётся войти?</a>

</div> <!-- login -->
[/group]
[not-group=5]
<style>
.flareinput {
    color: #828282;
    font-family: 'FSElliotPro';
    font-size: 16px;
}
</style>
<script>
//ЗАГРУЗКА ИКОНКИ СКИНА 
function loaded() {
    Swal.fire({
        position: 'top',
		allowOutsideClick: false,
	    allowEscapeKey: false,
	    allowEnterKey: false,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		showConfirmButton: false,
        text: 'Загрузка...',
        onBeforeOpen: () => {
            Swal.showLoading()
        }
    })
}
function payment() {
Swal.fire({
    title: 'Пополнить баланс',
	text: 'Введите сумму пополнения',
    position: 'top',
	confirmButtonColor: '#7328a9',
	input: 'number',
    inputValue: 100,
	showCloseButton: true,
	confirmButtonText: 'Далее',
	background: '#15101a',
	animation: false,
	customClass: {
        popup: 'animated fadeInDown faster',
		input: 'flareinput',
   }
}).then((result) => {
    if (result.value) {
	    loaded();
	    $.ajax({
        url: "/modules/lk/php/payment/url.php",
        data: {
		    sum: result.value
		},
		success: function(html){
					$("#ajax").html(html);
        }
    });
    }
})
}
function load_avatar() {
    $.ajax({
        url: "/modules/lk/uploads/reser.php?login={login}",
        type: "POST",
		success: function(html){
					$("#avatar").html('<img src="/modules/lk/uploads/head_128/{login}.png?='+new Date()+'" class="rounded-circle img-responsive ml-1" width="72px" style="image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: -webkit-optimize-contrast; image-rendering: pixelated;">');
        }
    });
}
function load_money() {
    $.ajax({
        url: "/modules/libs/ints_api/money.php",
        type: "POST",
		success: function(html){
					$("#realmoney-info-login").html(html);
        }
    });
}
/*function load_coins() {
    $.ajax({
        url: "/modules/lk/api/profile/coins.php",
        type: "POST",
		success: function(html){
					$("#profile_coins").html(html);
        }
    });
}*/
//ИНИЦИАЛИЗАЦИЯ ФУНКЦИЙ
function load_profile() {
    load_money();
	//load_coins();
}
load_avatar();
load_profile();
</script>
<div id="user_panel">
    <div id="user_panel_top">
        <div id="avatar" class="user_panel_userpic">
            <img alt="Загрузка..." width="72" height="72 class="rounded-circle img-responsive ml-1" width="50px" style="image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: -webkit-optimize-contrast; image-rendering: pixelated;"">
        </div> <!-- user_panel_userpic -->
        <div class="user_panel_nickname">
            <span class="hello_player">Привет,</span>
            <a id="sidepanel_nickname" href="/cabinet" class="shortened">{login}!</a>
        </div> <!-- user_panel_nickname -->
        <a class="user_panel_logout" href="{logout-link}"></a>
    </div> <!-- user_panel_top -->
    <div id="user_panel_balance">
        <div class="user_panel_balance_current">
            <span id="realmoney-info-login">0</span>
        </div> <!-- user_panel_balance_current -->
        <div class="user_panel_balance_type">
            <span id="user_panel_balance_type">МОНЕТ</span>
        </div> <!-- user_panel_balance_type -->
        <a class="user_panel_balance_add"  onclick="payment();">ПОПОЛНИТЬ</a>
    </div> <!-- user_panel_balance -->
    <div id="user_panel_navigation">
        <ul>
            <li class="user_panel_navigation_cp">
                <a href="/cabinet">Личный кабинет</a>
            </li>
            <li class="user_panel_navigation_privilege">
                <a href="/cabinet?donate">Покупка привилегий</a>
            </li>
            <li class="user_panel_navigation_merchant">
                <a href="/shop">Магазин предметов</a>
            </li>
            <li class="user_panel_navigation_vote">
                <a href="/cabinet?votes">Голосование</a>
            </li>
			<li class="user_panel_navigation_settings">
                <a href="/cabinet?history">История действий</a>
            </li>
			[admin-link]<li class="user_panel_navigation_admin">
                <a style="color: #541d7e" href="{admin-link}" target="_blank">Админ Панель</a>
            </li>[/admin-link]
        </ul>
    </div> <!-- user_panel_navigation -->
</div>
[/not-group]