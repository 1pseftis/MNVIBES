<!DOCTYPE HTML>
<html>
    <!-- UniversalStudio! ИГРОВОЙ ПРОЕКТ МЕЧТЫ! -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta name="google-site-verification" content="dqT2xPcfLobRRMrbIwUlwD7TEsY_F04YSIrg3nJ9RJI" />
[aviable=main]
<title>UniversalStudio - игровой проект мечты!</title>
[/aviable]
{headers} 
    <link rel="shortcut icon" href="{THEME}/images/favicon.ico"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.6.0/dist/sweetalert2.all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	

    <link href="{THEME}/css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="{THEME}/css/engine.css" rel="stylesheet" type="text/css"/>
    <link href="{THEME}/css/main.css?1.3.9" rel="stylesheet" type="text/css"/>
    <link href="{THEME}/css/cabinet.css?1.0.0.1" rel="stylesheet" type="text/css"/>
    <link href="{THEME}/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="{THEME}/css/modal-app.css?1.3" rel="stylesheet" type="text/css"/>
	<link href="{THEME}/css/animate.css" rel="stylesheet" type="text/css"/>

    <script src="{THEME}/js/slides.min.jquery.js"></script>
    <script src="{THEME}/js/circle-progress.js"></script>
    
    <script src="{THEME}/js/jquery.nice-select.js"></script>
    
    <script src="{THEME}/js/jquery.shorten.1.0.js"></script>
    <script type="text/javascript" src="{THEME}/js/scripts.js"></script>
    <script type="text/javascript" src="{THEME}/cp/js/notify.min.js"></script>
    <script type="text/javascript" src="{THEME}/js/simpleminecraft.js"></script>
</head>
<body>
<div id="ajax"></div>
<div id="wrapper">

    <div class="modal_overlay" onclick="closeModalApp();"></div>
    <div class="modal_wrapper">
        <div class="modal_app">
        </div>
    </div>

    <!-- UniversalStudio! ИГРОВОЙ ПРОЕКТ МЕЧТЫ! -->
    <header>
        <div class="content">
            <a class="logo" href="/"></a>
            <nav>
                <ul>
                    [group=5]
                    <li class="start">
                        <a href="/start">НАЧАТЬ ИГРУ</a>
                    </li>
					[/group]
					[not-group=5]
					<li class="cp">
                        <a href="/cabinet">ЛИЧНЫЙ КАБИНЕТ</a>
                    </li>
					[/not-group]
                    
                    
                    <li class="donate">
                        <a href="/donate">ДОНАТ УСЛУГИ</a>
                    </li>
                    <li class="rules">
                        <a href="/rules.html">ПРАВИЛА</a>
                    </li>
                    <li class="forum">
                        <a target="blank" href="https://forum.UniversalStudio.online">ФОРУМ</a>
                    </li>
                </ul>
            </nav>
            [aviable=main]
            				<div id="slider">
					<div id="slides">
						
						<a href="/start">
							<div class="slide">
								<h3>ДОБРО ПОЖАЛОВАТЬ НА НАШ ПРОЕКТ!</h3>
								<span>Желаем вам удачной и продуктивной игры!</span>
							</div> <!-- slide -->
						</a>
						<a href="/about">
							<div class="slide">
								<h3>ЗАРЕГИСТРИРУЙТЕСЬ, ЧТОБЫ НАЧАТЬ ИГРАТЬ!</h3>
								<span>Буквально два шага и вы игрок UniversalStudio!</span>
							</div> <!-- slide -->
						</a>
						<a href="/start">
							<div class="slide">
								<h3>У НАС ВЫ НАЙДЁТЕ ТОЛЬКО ЛУЧШИЕ СЕРВЕРА!</h3>
								<span>Сервера на любой вкус - только у нас!</span>
							</div> <!-- slide -->
						</a>
						<a href="/start">
							<div class="slide">
								<h3>УДОБНЫЙ И ЛАМПОВЫЙ ЛАУНЧЕР!</h3>
								<span>Скачивайте и присоединяйтесь играть с нами!</span>
							</div> <!-- slide -->
						</a>
						
						
					</div> <!-- slides -->
				</div> <!-- slider -->
				[/aviable]
            
        </div>
    </header>
    <div id="middle">
        <div id="leftSide">
            {info}{content}			
        </div>
        <div id="rightSide">

            
    <!-- UniversalStudio! ИГРОВОЙ ПРОЕКТ МЕЧТЫ! -->
{login}
    <!-- UniversalStudio! ИГРОВОЙ ПРОЕКТ МЕЧТЫ! -->
            				<!--suppress ALL -->
				<div id="navigation">
					<h3>Навигация</h3>
					<ul>
						<li>
							<a href="/download">Скачать лаунчер</a>
						</li>
						[not-group=5]
					    <li>
							<a href="/cabinet?top">Топ голосующих</a>
						</li>
					    <li>
							<a href="/cabinet?case">Кейсы</a>
						</li>
					    [/not-group]
						<li>
							<a href="/about">О наших серверах</a>
						</li>
					</ul>
				</div> <!-- navigation -->

				
            <div id="mon_block" class="monitoring_block">
    
</div>



             <div class="widgets">
                <div class="discord">
                    <a href="https://discord.com/invite/H2JtAUxFrV/" target="_blank">
                        <div class="discord_information">
                            <img src="https://discordapp.com/assets/35d75407bd75d70e84e945c9f879bab8.svg" title="Бесплатный голосовой и текстовый чат для геймеров!">
                            <div style="display:none;" class="discord_status"><b id="discord_members_count"></div>
                        </div>
                        <div class="discord_connect">Присоединиться <i class="fa fa-headphones" aria-hidden="true"></i></div>
                    </a>
                </div>
		</div>
	<style>
.monitoring_block .total_online_block .information_v2 {
    border-down: 1px solid #100e13;
    width: 307px;
    height: 50px;
    float: left;
    padding: 26px 0 0 24px;
}
.monitoring_block .total_online_block .information_v2 b {
    font-family: 'FSElliotPro-Bold';
    font-size: 18px;
    max-width: 333px;
    display: block;
    color: #828282;
    margin-bottom: 6px;
}
.monitoring_block .total_online_block .information_v2 span {
    font-family: 'FSElliotPro';
    font-size: 13px;
    max-width: 333px;
    display: block;
    color: 
    #7d7177;
}
	</style>
                <!--style>

                    .youtube_widget {
                        display: block;
                        padding: 24px;
                        font-family: 'FSElliotPro';
                        font-size: 14px;
                        background: #ffffff;
                        margin-left: -3px;
                    }

                    .youtube_widget a {
                        text-decoration: none;
                    }

                    .youtube_widget img {
                        width: 100px;
                        height: 22px;
                        transition: 0.3s;
                    }

                    .youtube_widget img:hover {
                        opacity: 0.8;
                    }

                    .youtube_widget b {
                        font-family: 'FSElliotPro-Bold';
                    }

                    .youtube_status {
                        font-size: 14px;
                        width: 120px;
                        float: right;
                        text-align: right;
                        color: #ffffff;
                    }

                    .youtube_connect {
                        width: 100%;
                        height: 42px;
                        display: block;
                        font-size: 16px;
                        color: #dedede;
                        font-family: 'FSElliotPro-Bold';
                        line-height: 40px;
                        text-decoration: none;
                        text-indent: 15px;
                        margin: 18px 0 0 0;
                        background: #2C2F33;
                        transition: 0.3s;
                    }

                    .youtube_connect:hover {
                        -webkit-box-shadow: 0 4px 27px rgba(0, 0, 0, 0.25);
                        -moz-box-shadow: 0 4px 27px rgba(0, 0, 0, 0.25);
                        box-shadow: 0 4px 27px rgba(0, 0, 0, 0.25);
                        background: #23272A;
                        color: #ffffff;
                        text-indent: 20px;
                    }

                    .youtube_connect i {
                        transition: 0.3s;
                        float: right;
                        padding: 14px;
                        opacity: 0;
                    }

                    .youtube_connect:hover i {
                        opacity: 1;
                    }
                </style>

                <div class="youtube_widget">
                    <a href="https://youtu.be/HNR1etbAe" target="_blank">
                        <div class="youtube_information">
                            <img src="/uploads/svg/youtube-logo.svg"
                                 title="Наша группа в VK">
                            <div class="youtube_status"><b
                                        id="youtube_subscribers_count">17529</b>
                                Подписчиков
                            </div>
                        </div>
                        <div class="youtube_connect">Подписаться<i class="fa fa-plus" aria-hidden="true"></i>
                        </div>
                    </a>
                </div-->
            </div>
        </div>
        <div class="clr"></div>
    </div>
    <footer>
        <div id="footer_container">
            <div class="content">
                <a class="gamesymbol" href="/"></a>
                <div id="copyrights">
                    <span>© 2020 UniversalStudio Project</span>
                    <p>Все права защищены. Копирование материалов сайта запрещено.</p>
                </div>
                <div id="banners">
			
                    <a title="Мы принимаем Free-Kassa" href="//www.free-kassa.ru/"><img width="88px" src="//www.free-kassa.ru/img/fk_btn/21.png"></a>
<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=69871315&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/69871315/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="69871315" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(69871315, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/69871315" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
                </div> <!-- banners -->
            </div> <!-- content -->
        </div> <!-- footer_container -->
    </footer>
</div>

            <script>
                $.get('https://discordapp.com/api/guilds/667454537187065875/widget.json?v2', function (data) {
                    $("#discord_members_count").html(data['members'].length);
                });
				$.get('/modules/libs/ints_api/vk.php', function (data) {
                    $("#vk_members_count").html(data);
                });
				$.get('/modules/lk/php/mon/mon.php', function (data) {
					console.log(data);
                    $("#mon_block").html(data);
                });
            </script>
<!-- NOTIFICATIONS>
<div id="notify-content">
</div>
<script type="text/javascript" src="/{THEME}/js/notify/notify-0.0.1.js?v=3.0"></script>
<script>
    showNotifyBlock('Привет, друг!', 'Если тебе не сложно, поддержи любимый проект в рейтинге серверов!<br><br><b>Сделать это можно <a href="/?do=cp&page=vote">здесь</a>. Спасибо! :)</b>', 7);
[aviable=main]
<!--script src="templates/flareworldru/js/snowstorm-min.js"></script-->
[/aviable]
</body>
</html>

