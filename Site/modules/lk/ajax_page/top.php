<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
$_monthsList = array(
"1"=>"Январь","2"=>"Февраль","3"=>"Март",
"4"=>"Апрель","5"=>"Май", "6"=>"Июнь",
"7"=>"Июль","8"=>"Август","9"=>"Сентябрь",
"10"=>"Октябрь","11"=>"Ноябрь","12"=>"Декабрь");
 
$month = $_monthsList[date("n")];
?>
<div class="full_news_content">
        <fieldset id="cabinet_content" style="border: none; padding-top: 8px;"><div class="full_news_comment_content" style="display: inline-block;">

    <h3 style="display: inline-block; font-size: 24px; font-family: 'FSElliotPro-Heavy'; color: #828282; margin-bottom: 12px; line-height: 24px;">
        В чем суть топа?</h3>

    <p style="margin-bottom: 24px;">
       
    </p>

    <div style="display: inline-block; font-size: 16px; margin-bottom: 24px;">

        <span style="font-family: 'FSElliotPro-Heavy'; font-size: 18px;">Размер денежного вознаграждения составляет:</span>

        <div style="margin-top: 8px;">
            <b>#1 место</b> - 300 монет, 30 кейсов, 300000 $.<br>
            <b>#2 место</b> - 200 монет, 20 кейсов, 200000 $.<br>
            <b>#3 место</b> - 100 монет, 10 кейсов, 100000 $.
        </div>
    </div>

    <p style="margin-bottom: 24px;">

        Голоса в топе голосующих можно получать неограниченное количество раз, тем самым повышая свои шансы занять
        призовое место.

    </p>

    <a class="card_button_block"  onclick="lk_votes();" style="background: linear-gradient(to top right, #401611, #b74a3b, #9a3023, #4c241d);">
        <div class="cover_background" style="background: url(https://simpleminecraft.ru/uploads/svg/vote.svg) no-repeat top right; background-size: cover; width: 78px; height: 78px; margin: 40px;"></div>
        <h4>Вы проголосовали в этом месяце <?php echo $votes; ?> раз</h4>
        <div class="description">

            Ваша текущая позиция в рейтинге <b><?php echo $vote_top; ?></b> место.

            <br><br>
            Нажмите на плиточку чтобы проголосовать за проект и повысить позицию в рейтинге.

        </div>
        <div class="icon">
            <img src="../uploads/svg/arrow-pointing-to-right.svg">
        </div>
    </a>
</div>

<div class="groups_block">
    <div>
        <h3 style="margin-bottom: 18px; text-align: center; color: #828282;">Топ голосующих за <?php echo $month; ?></h3>
        <br><br>
    </div>

    <center>
	<?php 
	$top1 = $mysqli->query("SELECT * FROM `dle_users` ORDER BY `votes` DESC LIMIT 0, 1");
	while($item = $top1->fetch_assoc()) {
		print '<div class="circle_user_icon" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%); -webkit-linear-gradient(120deg, #f6d365 0%, #fda085 100%);">';
	    print '<a><div id="head_'.$item["name"].'" src="" alt=""></div>';
		print '<p>#1 - <b>'.$item["votes"].'</b> голосов</p>';
		print '<span>'.$item["name"].'</span>';
		print '</div>';
		print '<script>$.ajax({';
		print 'url: "/modules/lk/uploads/reser.php?login='.$item["name"].'",';
		print 'type: "POST",';
		print 'success: function(html){';
		print '$("#head_'.$item["name"].'").html(\'<img src="/modules/lk/uploads/head/'.$item["name"].'.png?'.time().'" class="rounded-circle img-responsive ml-1" width="32px" style="image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: -webkit-optimize-contrast; image-rendering: pixelated;">\')';
		print '}';
		print '});';
		print '</script>';
	}
	$top2 = $mysqli->query("SELECT * FROM `dle_users` ORDER BY `votes` DESC LIMIT 1, 1");
	while($item = $top2->fetch_assoc()) {
		print '<div class="circle_user_icon" style="background-image: linear-gradient(120deg, #E6E6E6 0%, #808080 100%); -webkit-linear-gradient(120deg, #E6E6E6 0%, #808080 100%);">';
	    print '<a><div id="head_'.$item["name"].'" src="" alt=""></div>';
		print '<p>#2 - <b>'.$item["votes"].'</b> голосов</p>';
		print '<span>'.$item["name"].'</span>';
		print '</div>';
		print '<script>$.ajax({';
		print 'url: "/modules/lk/uploads/reser.php?login='.$item["name"].'",';
		print 'type: "POST",';
		print 'success: function(html){';
		print '$("#head_'.$item["name"].'").html(\'<img src="/modules/lk/uploads/head/'.$item["name"].'.png?'.time().'" class="rounded-circle img-responsive ml-1" width="32px" style="image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: -webkit-optimize-contrast; image-rendering: pixelated;">\')';
		print '}';
		print '});';
		print '</script>';
	}
	$top3 = $mysqli->query("SELECT * FROM `dle_users` ORDER BY `votes` DESC LIMIT 2, 1");
	while($item = $top3->fetch_assoc()) {
		print '<div class="circle_user_icon" style="background-image: linear-gradient(120deg, #ffdabe 0%, #a57163 100%); -webkit-linear-gradient(120deg, #ffdabe 0%, #a57163 100%);">';
	    print '<a><div id="head_'.$item["name"].'" src="" alt=""></div>';
		print '<p>#3 - <b>'.$item["votes"].'</b> голосов</p>';
		print '<span>'.$item["name"].'</span>';
		print '</div>';
		print '<script>$.ajax({';
		print 'url: "/modules/lk/uploads/reser.php?login='.$item["name"].'",';
		print 'type: "POST",';
		print 'success: function(html){';
		print '$("#head_'.$item["name"].'").html(\'<img src="/modules/lk/uploads/head/'.$item["name"].'.png?'.time().'" class="rounded-circle img-responsive ml-1" width="32px" style="image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: -webkit-optimize-contrast; image-rendering: pixelated;">\')';
		print '}';
		print '});';
		print '</script>';
	}
    ?>
                <br>
                    </center>
    <style>
        .circle_user_icon {
            min-width: 188px;
            max-width: 188px;
            max-height: 188px;
            min-height: 188px;
            border-radius: 50%;
            display: inline-block;
            text-align: center;
            margin-right: 14px;
            margin-bottom: 14px;
        }

        .circle_user_icon img {
            margin: 52px 0px 8px 0px;
            display: inline-block !important;
        }

        .circle_user_icon p {
            color: #ffffff;
            font-size: 16px;
        }

        .circle_user_icon span {
            font-size: 21px;
            font-family: 'FSElliotPro-Heavy';
            color: #ffffff;
        }

        .circle_user_icon_mini {
            min-width: 128px;
            max-width: 128px;
            max-height: 128px;
            min-height: 128px;
            border-radius: 50%;
            display: inline-block;
            text-align: center;
            margin-right: 8px;
            margin-bottom: 8px;
        }

        .circle_user_icon_mini img {
            margin: 28px 0px 8px 0px;
            display: inline-block !important;
        }

        .circle_user_icon_mini p {
            color: #ffffff;
            font-size: 14px;
        }

        .circle_user_icon_mini span {
            font-size: 14px;
            font-family: 'FSElliotPro-Heavy';
            color: #ffffff;
        }

    </style>
</div>
<div class="news_text" style="padding: 34px 34px 26px 26px;">
    <center>
        <table class="tbl" width="678px" cellspacing="10" cellpadding="3">
            <thead>
            <tr class="label_tr">
                <th class="label_th" style="width: 50px;">Позиция:</th>
                <th class="label_th" width="170px">Игрок:</th>
                <th class="label_th">Кол-во голосов:</th>
                <th class="label_th">Последний голос:</th>
            </tr>
            </thead>
            <tbody style="line-height: 29px;">
<?php 
    $top_n = 4;
	$top = $mysqli->query("SELECT * FROM `dle_users` ORDER BY `votes` DESC LIMIT 3, 30");
	while($item = $top->fetch_assoc()) {
		print '<tr>';
		print '<td class="top_position" style="color: #828282; border-bottom: 1px solid #100e13;">'.$top_n.'</td>';
		print '<td class="th_base" style="background: #1b1422;">';
		print '<div class="skin-head">';
		print '<a><div id="head_'.$item["name"].'"></div>';
		print '<br>';
		print '<span>'.$item["name"].'</span>';
		print '</a>';
		print '</div>';
		print '</td>';
		print '<td class="th_base"><b>'.$item["votes"].'</b> голосов</td>';
		print '<td class="th_base" style="background: #1b1422;">'.date('d.m.Y в H:i', $item["votes_time"]).'</td>';
		print '<script>$.ajax({';
		print 'url: "/modules/lk/uploads/reser.php?login='.$item["name"].'",';
		print 'type: "POST",';
		print 'success: function(html){';
		print '$("#head_'.$item["name"].'").html(\'<img src="/modules/lk/uploads/head/'.$item["name"].'.png?'.time().'" class="rounded-circle img-responsive ml-1" width="32px" style="image-rendering: -moz-crisp-edges; image-rendering: -o-crisp-edges; image-rendering: -webkit-optimize-contrast; image-rendering: pixelated;">\')';
		print '}';
		print '});';
		print '</script>';
		print '</tr>';
		$top_n++;
	}
?>
                            </tbody>
        </table>
    </center>
</div>

</fieldset>
    </div>