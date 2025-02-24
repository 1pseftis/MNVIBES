<div id="modal_form">
    <span id="modal_close"><i class="fa fa-times" aria-hidden="true"></i></span>
    <div id="modal"></div>
</div>
<div id="overlay"></div>

<div style="display: none;" id="VIP">
    <div style="margin-left: 16px;">
        <div style="float: left; min-width: 450px;">
            <h3 style="color: #828282">Набор ресурсов VIP</h3>
            <p>Команда: /kit vip <b>(1 раз в месяц)</b></p>
        </div>
        <div class="kit_block">
            <b style="color: #828282">Hi-Tech</b>
            <img src="/uploads/kits/Hi-Tech_vip.png?41949841894"/>
        </div>
		<div class="kit_block">
            <b style="color: #828282">TechnoMagic</b>
            <img src="/uploads/kits/TechnoMagic_vip.png?41949841894"/>
        </div>
		<div class="kit_block">
            <b style="color: #828282">SkyLand</b>
            <img src="/uploads/kits/SkyLand_vip.png?41454449841894"/>
        </div>
		<div class="kit_block">
            <b style="color: #828282">UniversalStudio</b>
            <img src="/uploads/kits/FirstWorld_vip.png?41949841894"/>
        </div>
    </div>
</div>


<div style="display: none;" id="Premium">
    <div style="margin-left: 16px;">
        <div class="kit_about">
            <h3 style="color: #828282">Набор ресурсов Premium</h3>
            <p>Команда: /kit Premium <b>(1 раз в месяц)</b></p>
        </div>
        <div class="kit_block">
            <b style="color: #828282">Hi-Tech</b>
            <img src="/uploads/kits/Hi-Tech_Premium.png?41949841894"/>
        </div>
		<div class="kit_block">
            <b style="color: #828282">TechnoMagic</b>
            <img src="/uploads/kits/TechnoMagic_Premium.png?41949841894"/>
        </div>
		<div class="kit_block">
            <b style="color: #828282">SkyLand</b>
            <img src="/uploads/kits/SkyLand_Premium.png?4194948441894"/>
        </div>
		<div class="kit_block">
            <b style="color: #828282">UniversalStudio</b>
            <img src="/uploads/kits/FirstWorld_Premium.png?41949841894"/>
        </div>
    </div>
</div>


<div style=" display: none;" id="Deluxe">
    <div style="margin-left: 16px;">
        <div class="kit_about">
            <h3 style="color: #828282">Набор ресурсов Deluxe</h3>
            <p>Команда: /kit Deluxe <b>(1 раз в месяц)</b></p>
        </div>
        <div class="kit_block">
            <b style="color: #828282">Hi-Tech</b>
            <img src="/uploads/kits/Hi-Tech_Deluxe.png?41949841894"/>
        </div>
		<div class="kit_block">
            <b style="color: #828282">TechnoMagic</b>
            <img src="/uploads/kits/TechnoMagic_Deluxe.png?41949841894"/>
        </div>
		<div class="kit_block">
            <b style="color: #828282">SkyLand</b>
            <img src="/uploads/kits/SkyLand_Deluxe.png?419494841894?"/>
        </div>
		<div class="kit_block">
            <b style="color: #828282">UniversalStudio</b>
            <img src="/uploads/kits/FirstWorld_Deluxe.png?41949841894"/>
        </div>
    </div>
</div>


<div style=" display: none;" id="Legendary">
    <div style="margin-left: 16px;">
        <div class="kit_about">
            <h3 style="color: #828282">Набор ресурсов Legendary</h3>
            <p>Команда: /kit Legendary <b>(1 раз в месяц)</b></p>
        </div>
        <div class="kit_block">
            <b style="color: #828282">Hi-Tech</b>
            <img src="/uploads/kits/Hi-Tech_Legendary.png?41949841894"/>
        </div>
		<div class="kit_block">
            <b style="color: #828282">TechnoMagic</b>
            <img src="/uploads/kits/TechnoMagic_Legendary.png?41949841894"/>
        </div>
		<div class="kit_block">
            <b style="color: #828282">SkyLand</b>
            <img src="/uploads/kits/SkyLand_Legendary.png?419494841894"/>
        </div>
    </div>
</div>
<script>
    function getKitsModal(type) {

        var modalForm = $(" #modal");
        modalForm.empty();
        modalForm.html($("#" + type).html());

        $("#overlay").fadeIn(400, function () {
            $("#modal_form")
                .css("display", "block")
                .css("width", "860px")
                .css("height", "auto")
				.css("background", "#15101a")
                .css("left", "28%")
                .animate({opacity: 1, top: "30%"}, 200);
        });
    }

    $("#modal_close, #overlay").click(function () {
        $("#modal_form")
            .animate({opacity: 0, top: "45%"}, 200,
                function () {
                    $(this).css("display", "none");
                    $("#overlay").fadeOut(400);
                }
            );
    });
</script>




<div class="fullnews_craft">
    <div class="full_news_top">
        <div class="news_title">
            <h1>Донат услуги</h1>
        </div>
        <div class="full_news_top_img">
            <img src="/templates/simpleminecraft/images/pages/donate.png?41949841894" alt="Для чего нужен донат?" title="Для чего нужен донат?">
        </div>
    </div>
    <div class="full_news_content">
        <div class="news_text">
            <br>
            Донат от английского donate – жертвовать, дарить. Любому бесплатному проекту необходима помощь его
            пользователей, для его развития и улучшения. Мы работаем
            над ним каждую минуту свободного времени, осваиваем новое и надежное оборудование, совершенствуем наши
            серверы, делаем игру приятной и интересной для вас. Все это было бы невозможным без вашей поддержки!

            <br><br><br>

            <center><a  href="/cabinet?money" class="smcui-button" onclick="showPayments(); return false;">Сделать пожертвование и получить
                    монетки</a></center>

            <br><br>

            За пожертвование вы получаете монеты, своеобразную валюту проекта. Одна монета условно ровняется одному
            российскому рублю. Монеты можно <a href="/cabinet?money">передать друзьям</a>, на них можно <a href="/cabinet?donate">купить привилегии</a> или потратить в <a href="/shop">нашем магазине</a>. :)

            <br><br><br>

            <div class="basic_function_block" style="text-align: center; font-size: 14px; margin-left: 0px; width: 632px; display: inline-block;">
                <div>
                    <b>Огромное спасибо тем игрокам, кто сделали свой личный вклад в развитие проекта! <i class="fa fa-heart" aria-hidden="true" style="color: red;"></i></b>
                </div>
            </div>

            <br><br><br>

            <br>

            <span style="font-family: 'FSElliotPro-Heavy'; font-size: 25px; color: #343434; line-height: 86px;">Пакеты услуг</span>

            <table class="tbl" width="674px" cellspacing="10" cellpadding="3">
                <thead>
                <tr class="label_tr">
                    <th class="label_th" style="min-width: 300px;">Возможности:</th>
                    <th class="label_th" style="min-width: 55px; text-align: center;">VIP</th>
                    <th class="label_th" style="min-width: 55px; text-align: center;">Premium</th>
                    <th class="label_th" style="min-width: 55px; text-align: center;">Deluxe</th>
                    <th class="label_th" style="min-width: 55px; text-align: center;">Legendary</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="th_base">
                        Максимальное количество приватных зон
                    </td>
                    <td class="th_base">
                        <center><b>2</b>
                        </center>
                    </td>
                    <td class="th_base">
                        <center><b>4</b>
                        </center>
                    </td>
                    <td class="th_base">
                        <center><b>5</b>
                        </center>
                    </td>
                    <td class="th_base">
                        <center><b>6</b>
                        </center>
                    </td>
                </tr><br>
                <tr>
                    <td class="th_base">
                        Максимальное количество точек дома</td>
                    <td class="th_base">
                        <center><b>2</b>
                        </center>
                    </td>
                    <td class="th_base">
                        <center><b>4</b>
                        </center>
                    </td>
                    <td class="th_base">
                        <center><b>5</b>
                        </center>
                    </td>
                    <td class="th_base">
                        <center><b>6</b>
                        </center>
                    </td>
                </tr>
                <!--tr>
                    <td class="th_base">
                        Ограничение производимой энергии EU
                        <br><br>
                        <small>
                            На серверах: Industrial, Hi-Tech, HiTech, SkyFactory, TechnoMagic
                        </small>
                    </td>
                    <td class="th_base">
                        <center><b>73728</b></center>
                    </td>
                    <td class="th_base">
                        <center><b>77824</b></center>
                    </td>
                    <td class="th_base">
                        <center><b>81920</b></center>
                    </td>
                    <td class="th_base">
                        <center><b>114688</b></center>
                    </td>
                </tr-->
                <tr>
                    <td class="th_base">
                        Пакет флагов <b>VIP</b>
                        <br><br>
                        <small>Флаги: pistons,potion-splash,pvp,use</small>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Сохранение инвентаря после смерти
                        <br><br>
                        <small>Из-за многочисленных багов игры, есть вероятность выпадения вещей.</small>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">Вход на переполенный сервер</td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Восстановление здоровья
                        <br><br>
                        <small>Команда: /heal (1 раз в минуту)</small>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Восстановление сытости
                        <br><br>
                        <small>Команда: /feed (1 раз в минуту)</small>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr><tr>
                    <td class="th_base">
                        Узнать тех кто находится рядом с вами
                        <br><br>
                        <small>Команда: /near</small>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <!--tr>
                    <td class="th_base">
                        Запуск фейерверка
                        <br><br>
                        <small>Команда: /firework <br>
                            <br><b>Недоступно на Industrial</b></small>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr-->
                <tr>
                    <td class="th_base">
                        Возврат на место вашей гибели
                        <br><br>
                        <small>Команда: /back</small>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Починка предмета в руке или инвентаре
                        <br><br>
                        <small>Команда: /repair [all - починить весь инвентарь] (Не работает на вещах из модов)</small>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Режим полёта
                        <br><br>
                        <small>Команда: /fly</small>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Телепортация игрока к себе
                        <br><br>
                        <small>Команда: /tpahere [ник]</small>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Установка плаща в <a href="/caninet">личном кабинете</a>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Получать пакет ресурсов <a href="#" onclick="getKitsModal('VIP'); return false;"><b>VIP</b></a>
                        <br><br>
                        <small>Команда: /kit vip <b>(1 раз в месяц)</b></small>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Пакет флагов <b>Premium</b><br><br>
                        <small>Флаги: Chest-access, enderman-grief, ice-form, mob-spawning, snow-fall .</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Использование кодов цвета на табличках
                        <br><br>
                        <small>Пример: &amp;aПривет мир!</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Установка HD скинов и HD плащей в <a href="/caninet">личном
                            кабинете</a>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Открытие верстака в любом месте
                        <br><br>
                        <small>Команда: /craft</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Очистка инвентаря
                        <br><br>
                        <small>Команда: /clear</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Установка персонального времени суток
                        <br><br>
                        <small>Команда: /ptime [day или night]</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Открытие эндер-судука в любом месте
                        <br><br>
                        <small>Команда: /enderchest</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Режим бессмертия
                        <br><br>
                        <small>Команда: /god</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Надеть блок на голову
                        <br><br>
                        <small>Команда: /hat</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Получать пакет ресурсов <a href="#" onclick="getKitsModal('Premium'); return false;"><b>Premium</b></a>
                        <br><br>
                        <small>Команда: /kit Premium <b>(1 раз в месяц)</b></small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr><br>
                <tr>
                    <td class="th_base">                        Сохранение очков опыта после смерти
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Потушиться или потушить игрока
                        <br><br>
                        <small>Команда /ext [ник]</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Прыжок в место куда вы смотрите
                        <br><br>
                        <small>Команда /jumpto</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Использование разных цветов в чате
                        <br><br>
                        <small>Пример: &amp;aПривет мир!</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Получение данных о местонахождении
                        <br><br>
                        <small>Команда: /getpos</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Открытие электронного компаса
                        <br><br>
                        <small>Команда: /compass</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Получать пакет ресурсов <a href="#" onclick="getKitsModal('Deluxe'); return false;"><b>Deluxe</b></a>
                        <br><br>
                        <small>Команда: /kit Deluxe (1 раз в месяц)</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr><br>
                <tr>
                    <td class="th_base" style="border-bottom: 4px solid #98d48b;">
                        Телепортация по координатам
                        <br><br>
                        <small>Команда: /tppos [x y z]</small>
                    </td>
                    <td class="th_base" style="border-bottom: 4px solid #98d48b;">
                        <!-- X -->
                    </td>
                    <td class="th_base" style="border-bottom: 4px solid #98d48b;">
                        <!-- X -->
                    </td>
                    <td class="th_base" style="border-bottom: 4px solid #98d48b;">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                    <td class="th_base" style="border-bottom: 4px solid #c59cce;">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Телепорт на ближайшую точку над головой
                        <br><br>
                        <small>Команда: /top</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Использование /heal и /feed без ожидания
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Накормить другого игрока
                        <br><br>
                        <small>Команда: /feed [ник]</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Ваш уровень отностительно уровня моря
                        <br><br>
                        <small>Команда: /depth</small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Изменение цвета сообщений в <a href="/caninet">личном
                            кабинете</a>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
				<tr>
                    <td class="th_base">
                        Изменение цвета ника в <a href="/caninet">личном кабинете</a>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center></center>
                    </td>
                    <td class="th_base">
                        <center></center>
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Изменение цвета префикса в <a href="/caninet">личном
                            кабинете</a>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Использование цветов в личном чате
                        <br><br>
                        <small>
                            Команда: /m [ник] &amp;aПривет!
                        </small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Установка персональной погоды
                        <br><br>
                        <small>
                            Команда: /pweather [sun или storm]
                        </small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Установка скорости полёта
                        <br><br>
                        <small>
                            Команда: /speed [от 1 до 10]
                        </small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base">
                        Получать пакет ресурсов <a href="#" onclick="getKitsModal('Legendary'); return false;"><b>Legendary</b></a>
                        <br><br>
                        <small>Команда: /kit Legendary <b>(1 раз в месяц)</b></small>
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <!-- X -->
                    </td>
                    <td class="th_base">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base" style="border-bottom: 4px solid #c59cce;">
                        Кастомизация префикса
                        <br><br>
                        <small>Изменить префикс можно в <a href="/?do=cp">личном кабинете</a></small>
                    </td>
                    <td class="th_base" style="border-bottom: 4px solid #c59cce;">
                        <!-- X -->
                    </td>
                    <td class="th_base" style="border-bottom: 4px solid #c59cce;">
                        <!-- X -->
                    </td>
                    <td class="th_base" style="border-bottom: 4px solid #c59cce;">
                        <!-- X -->
                    </td>
                    <td class="th_base" style="border-bottom: 4px solid #c59cce;">
                        <center><i class="fa fa-check" aria-hidden="true"></i></center>
                    </td>
                </tr>
                <tr>
                    <td class="th_base" style="font-size: 16px; border: none; text-align: right;">
                        <b>Стоимость привилегии:</b>
                        <br><br>
                        <small>Привилегия выдаётся на 30 дней.</small>
                    </td>
                    <td class="th_base">
                        <center>
                          <!--s>149</s><br><br--><b>130</b> монет
                        </center>
                    </td>
                    <td class="th_base">
                        <center>
                          <!--s>239</s><br><br--><b>250</b> монет
                        </center>
                    </td>
                    <td class="th_base">
                        <center>
                          <!--s>429</s><br><br--><b>550<br>
                          </b> монет
                        </center>
                    </td>
                    <td class="th_base">
                        <center>
                          <!--s>990</s><br><br--><b>950</b> монет
                        </center>
                    </td>
                </tr>
                </tbody>
            </table>

            <br><br>

            <center>
                <a class="smcui-button" target="_blank" href="/cabinet?donate">Приобрести привилегию</a>
            </center>

            <br><br>
        </div>
    </div>
</div>








