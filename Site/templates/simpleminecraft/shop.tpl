<link href="/templates/simpleminecraft/css/shop.css?v1.1.3" rel="stylesheet" type="text/css">
<script src="/modules/lk/js/alerts.js?v2"></script>
<script>
function select_cat(cat, server) {
	$.ajax({
            url: "/modules/shop/script/server.php",
            type: "POST",
	    	data: {
				cat:cat,
				server:server
	    	},
            success: function(html){
	    		$("#shop_content").html(html);
            }
        });
}
function loading() {
    Swal.fire({
        position: 'top',
		allowOutsideClick: false,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
	    allowEscapeKey: false,
	    allowEnterKey: false,
		showConfirmButton: false,
        text: 'Загрузка...',
        onBeforeOpen: () => {
            Swal.showLoading()
        }
    })
}
function loading_close() {
    Swal.fire({
        position: 'top',
		allowOutsideClick: false,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		timer: 1,
	    allowEscapeKey: false,
	    allowEnterKey: false,
		showConfirmButton: false,
        text: 'Загрузка...',
        onBeforeOpen: () => {
            Swal.showLoading()
        }
    })
}
</script>
<div id='shop_content' class="fullnews_craft">
    <div class="full_news_content">
        <div class="news_text" style="display: inline-block; padding: 34px 34px 0 34px; width: 672px;" id="contentPage">
            <h3 class="shop_category_title">Магазин предметов</h3>

            <br><br>

            <!--style>
                .servers_row {
                    display: flex;
                    flex-wrap: wrap;
                    margin-bottom: 31px;
                }

                .servers_row .item {
                    text-align: left;
                    padding: 24px;
                    width: 336px;
                    background: linear-gradient(to top right, #07597b, #27867b, #3aa17e, #3aa17e);
                    line-height: 1;
                    color: #ffffff !important;
                    display: inline-block;
                    box-sizing: border-box;
                    text-decoration: unset;
                    transition: 0.3s;
                    overflow: hidden;
                    box-shadow: inset 0 -4px rgba(0,0,0,.2), inset 0 4px hsla(0,0%,100%,.3), inset -4px 0 hsla(0,0%,100%,.3), inset 4px 0 rgba(0,0,0,.2);
                }

                .servers_row .item img {
                    display: block;
                    float: left;
                    width: 64px;
                    margin-right: 20px;
                }


                .servers_row .item h4 {
                    font-family: 'FSElliotPro-Heavy';
                    font-size: 21px;
                }

                .servers_row .item div {
                    font-size: 14px;
                    margin-top: 6px;
                }

            </style>

            <div class="servers_row">
                <div class="item">
                    <img src="/uploads/shop/items/Classic/%D0%90%D0%BB%D0%BC%D0%B0%D0%B7%D0%BD%D0%B0%D1%8F%20%D1%81%D1%82%D0%B0%D0%BC%D0%B5%D1%81%D0%BA%D0%B0.png">
                    <h4>Classic</h4>
                    <div>Всего доступно 1337 предметов для сервера.</div>
                </div>
                <div class="item">
                    <img src="/uploads/shop/items/Classic/%D0%90%D0%BB%D0%BC%D0%B0%D0%B7%D0%BD%D0%B0%D1%8F%20%D1%81%D1%82%D0%B0%D0%BC%D0%B5%D1%81%D0%BA%D0%B0.png">
                    <h4>Industrial</h4>
                    <div>Всего доступно 1337 предметов для сервера.</div>
                </div>
                <div class="item">
                    <img src="/uploads/shop/items/Classic/%D0%90%D0%BB%D0%BC%D0%B0%D0%B7%D0%BD%D0%B0%D1%8F%20%D1%81%D1%82%D0%B0%D0%BC%D0%B5%D1%81%D0%BA%D0%B0.png">
                    <h4>Galaxy</h4>
                    <div>Всего доступно 1337 предметов для сервера.</div>
                </div>
                <div class="item">
                    <img src="/uploads/shop/items/Classic/%D0%90%D0%BB%D0%BC%D0%B0%D0%B7%D0%BD%D0%B0%D1%8F%20%D1%81%D1%82%D0%B0%D0%BC%D0%B5%D1%81%D0%BA%D0%B0.png">
                    <h4>Название сервера</h4>
                    <div>Всего доступно 1337 предметов для сервера.</div>
                </div>
            </div-->

            <div style="margin-top: 4px; display: inline-block; margin-bottom: 0px;">
                <div style="float: left; width: 340px;">
                    <a class="card_button_block" onclick="select_cat('kits');" style="background: linear-gradient(to top right, #29480c, #50772e, #88bd5a, #aed48e); width: 332px;">
                        <div class="cover_background" style="background: url(https://simpleminecraft.ru/uploads/shop/items/Classic/Лаймовый%20шалкеровый%20ящик.png) no-repeat top right; background-size: cover; width: 64px; height: 64px; margin: 20px;"></div>
                        <h4>Наборы ресурсов</h4>
                        <div class="description">
                            Вы можете приобрести различные наборы (киты) и этим ускорить своё развитие на сервере.
                        </div>
                        <div class="icon">
                            <img src="../uploads/svg/arrow-pointing-to-right.svg" style="display: block;">
                        </div>
                    </a>
                </div>
                <div style="float: right;">
                    <a class="card_button_block" onclick="select_cat('items');" style="background: linear-gradient(to right top, #382752 0%, #9d95b3 100%); width: 332px;">
                        <div class="cover_background" style="background: url(https://simpleminecraft.ru/uploads/shop/items/TechnoMagic/%D0%9A%D0%B8%D1%80%D0%BA%D0%B0%20%D0%9E%D0%B3%D0%BD%D1%8F.png) no-repeat top right; background-size: cover; width: 64px; height: 64px; margin: 20px;"></div>
                        <h4>Магазин предметов</h4>
                        <div class="description">
                            В этом разделе можно найти нужный вам предмет или блок и приобрести его за монеты сайта.
                        </div>
                        <div class="icon">
                            <img src="../uploads/svg/arrow-pointing-to-right.svg" style="display: block;">
                        </div>
                    </a>
                </div>
            </div>
			<!--div style="display: block;">
                <a class="card_button_block" onclick="payment();" style="background: linear-gradient(to top right, #235D79, #235D79, #086FA1, #086FA1);">
                    <div class="cover_background" style="background: url(https://victorycraft.ru/sources/cases/gold.png) no-repeat top right; background-size: cover; width: 78px; height: 78px; margin: 40px;"></div>
                    <h4>Магазин кейсов</h4>
                    <div class="description">
                        Полный состав кейса вы можете прочитать, нажав кнопку "Купить за ...". Там же выберите сервер и укажите количество кейсов для совершения покупки.

                        <br>
                    </div>
                    <div class="icon">
                        <img src="../uploads/svg/arrow-pointing-to-right.svg" style="display: block !important;">
                    </div>
                </a>
            </div-->
			<!--
            <div style="margin-top: 4px; display: inline-block; margin-bottom: 0px;">
                <div style="float: left; width: 340px;">
                    <a class="card_button_block" onclick="select_cat('rg');" style="background: linear-gradient(to top right, #A65800, #BF7C30, #FFA540, #FFBD73); width: 332px;">
                        <div class="cover_background" style="background: url(/modules/shop/uploads/07cb03fd9a4f545225cb07d1152836c2.png) no-repeat top right; background-size: cover; width: 64px; height: 64px; margin: 20px;"></div>
                        <h4>Аренда региона</h4>
                        <div class="description">
                            Вы можете арендовать дом, и жить в городе вместе с другими игроками (/warp town).
                        </div>
                        <div class="icon">
                            <img src="../uploads/svg/arrow-pointing-to-right.svg" style="display: block;">
                        </div>
                    </a>
                </div>
                <div style="float: right;">
                    <a class="card_button_block" onclick="select_cat('tc');" style="background: linear-gradient(to right top, #750062 0%, #D936C0 100%); width: 332px;">
                        <div class="cover_background" style="background: url(https://six.u-studio.su/modules/shop/uploads/3505b3ba4c47a9d088d797e137ffdea7.png) no-repeat top right; background-size: cover; width: 64px; height: 64px; margin: 20px;"></div>
                        <h4>Исследования и аспекты</h4>
                        <div class="description">
                           Исследования и аспекты ThaumCraft'a
                        </div>
                        <div class="icon">
                            <img src="../uploads/svg/arrow-pointing-to-right.svg" style="display: block;">
                        </div>
                    </a>
                </div>
            </div>
			<!--div style="margin-top: 4px; display: inline-block; margin-bottom: 0px;">
                <div style="float: left; width: 340px;">
                    <a class="card_button_block" onclick="select_cat('farm');" style="background: linear-gradient(to top right, #A65800, #BF7C30, #FFA540, #FFBD73); width: 332px;">
                        <div class="cover_background" style="background: url(/modules/shop/uploads/07cb03fd9a4f545225cb07d1152836c2.png) no-repeat top right; background-size: cover; width: 64px; height: 64px; margin: 20px;"></div>
                        <h4>Облачные фермы</h4>
                        <div class="description">
                            Фармь ресурсы! Аналог внутриигровых ферм, но расположенных на облаке.
                        </div>
                        <div class="icon">
                            <img src="../uploads/svg/arrow-pointing-to-right.svg" style="display: block;">
                        </div>
                    </a>
                </div>
            </div-->
            <div style="display: block; margin-bottom: 24px;">
                <a class="card_button_block" onclick="payment();" style="background: linear-gradient(to top right, #4a3736, #6a4b4a, #a27767, #efda8e);">
                    <div class="cover_background" style="background: url(https://simpleminecraft.ru/uploads/svg/coins.svg) no-repeat top right; background-size: cover; width: 78px; height: 78px; margin: 40px;"></div>
                    <h4 id="money_shop">Баланс монет: Загрузка...</h4>
                    <div class="description">
                        Нехватает монеток для приобретения желаемого предмета или набора ресурсов?
                        <br><br><br>
                        Нажмите здесь и пополните счет без коммисии за пару секунд!

                        <br>
                    </div>
                    <div class="icon">
                        <img src="../uploads/svg/arrow-pointing-to-right.svg" style="display: block !important;">
                    </div>
                </a>
            </div>
            <div class="full_news_comment_content" style="display: inline-block; padding: 0px 34px 31px 0px; width: 100%;">
                <div class="basic_function_block" style="margin-left: 0px; margin-bottom: 4px; margin-top: 8px; width: 632px;">
                    <div class="basic_function_block_title">
                        <h3>Как получить наборы
                            ресурсов?</h3>
                    </div>
                    <div>
                        Перед покупкой нужно <b>полностью очистить инвентарь</b> и <b>находится на сервере</b> во
                        время покупки.
                        После нажатия кнопки "Купить набор" все выдаётся автоматически вам в инвентарь.
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<script>
function load_money_shop() {
    $.ajax({
        url: "/modules/libs/ints_api/money.php",
        type: "POST",
		success: function(html){
					$("#money_shop").html('Баланс монет: '+html+'.00');
        }
    });
}
load_money_shop()
setInterval(function() {
  load_money();
}, 100);
var gets = (function() {
    var a = window.location.search;
    var b = new Object();
    a = a.substring(1).split("&");
    for (var i = 0; i < a.length; i++) {
  	c = a[i].split("=");
        b[c[0]] = c[1];
    }
    return b;
})();
if (gets['cat']=='kits' || gets['cat']=='items') {
    $(document).ready(function() {
	    loading()
        select_cat(gets['cat'], gets['server'])
	});
}
</script>