<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
$server = $_POST['case_serv'];
?>
<script> 
function roll() {
    $.ajax({
            url: "/modules/lk/php/cases/roll.php",
            type: "POST",
	        data: {
				server:'<?php echo $server ?>'
				},
            success: function(html){
			    $("#casesRollete").html(html);
            }
        });
}
function fast_roll() {
    $.ajax({
            url: "/modules/lk/php/cases/fast_roll.php",
            type: "POST",
	        data: {
				server:'<?php echo $server ?>'
				},
            success: function(html){
			    $("#ajax").html(html);
            }
        });
}
</script>
<fieldset id="cabinet_content" style="border: none; padding-top: 8px;">
            
            
            <div class="full_news_comment_content">
            
                <h3 style="display: inline-block; font-size: 24px; font-family: 'FSElliotPro-Heavy'; color: #828282; margin-bottom: 12px; line-height: 24px;">
                    Кейсы для сервера: <?php echo $server; ?> </h3>
            
                
            <style>
            
                #giftItemInfo {
                    text-align: center;
                    display: none;
                    margin-top: 12px;
                }
            
                .casesGift {
                    width: 32px;
                    margin-right: 2px;
                    border: 2px solid #301f38;
                    padding: 2px;
                }
            
                .casesSuperGift {
                    width: 32px;
                    margin-right: 2px;
                    border: 2px solid #ede6d7;
                    background: #cfc4ae;
                    padding: 2px;
                }
            
                .casesRolleteArrow {
                    width: 3px;
                    height: 78px;
                    background: #a29e9e;
                    margin: 0 auto;
                    position: relative;
                    z-index: 10000;
                }
            
                .casesRollete {
                    border: 3px solid #cdcccc;
                    background: #eaeaea;
                    overflow: hidden;
                    width: 632px;
                    height: 78px;
                }
            
                .casesRollete img {
                    display: inline-block;
                    padding-top: 6px;
                    /*padding: 6px 3px 0px 3px;*/
                }
            
                .roll {
                    position: relative;
                    margin-left: 8px;
                    height: 78px !important;
                    margin-top: -78px;
                    right: -318px;
                }
            
            </style>
            
            <p>Здесь выпадают следующие предметы:<br><br></p>
            <?php
foreach ($cases[$server] as $item) {
    if ($item["type"]==1) {
        echo '<img class="casesGift" src="/uploads/shop/items/'.$item["title"].'.png" title="'.$item["title"].' ('.$item["amount"].' шт.)">';
    } elseif ($item["type"]==2) {
	    echo '<img class="casesGift" src="/uploads/cases/econs.png" title="'.$item["title"].' (до '.$item["amount"].' шт.)" style="border: 2px solid #7328a9; background: #301f38;">';
    } elseif ($item["type"]==3) {
	    echo '<img class="casesGift" src="/uploads/cases/monets1.png" title="'.$item["title"].' (до '.$item["amount"].' шт.)" style="border: 2px solid #7328a9; background: #301f38;">';
    }
}


			?>
                <br><br>
            
                <div class="basic_function_block" style="margin-bottom: 24px; margin-left: 0px; width: 636px;">
                    <div class="basic_function_block_title">
                        <h3>Рулетка:</h3>
                    </div>
                    <div>
            
                        У Вас <b id="casesCount"><?php echo $cases_1; ?></b> кейсов. Хотите больше? <a href="#" onclick="lk_votes(); loadPage('vote'); return false;"><b>Проголосуйте</b></a>!
            
                        <br><br><br><br>
            
                        <div id="casesRollete">
                            <center><a id="caseOpenButton" onclick="roll();" class="smcui-button" style="margin-right: 0px; padding: 18px 38px 18px 34px; margin-right: 0px; font-size: 18px;"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;&nbsp;Открыть кейс!</a><br><br>
							<a href="#" onclick="fast_roll();"><i class="fa fa-key" aria-hidden="true" style="margin-right: 10px;"></i><b>Открыть кейс быстро</b></a></center>
							
                        </div>
            
                        <br><br>
                    </div>
                </div>
            </div>
            
            <div class="news_text" style="text-align: center; margin: 24px;">
                <a href="#" onclick="lk_case(); loadPage('cases'); return false;"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-right: 10px;"></i><b>Вернуться обратно</b></a>
            </div>
        </fieldset>