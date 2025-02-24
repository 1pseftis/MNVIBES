<div class="full_news_content">
        <fieldset id="cabinet_content" style="border: none; padding-top: 8px;">
        
         
<script>
function case_page() {
	var case_serv1 = document.getElementById("casesServer");
    var case_serv = case_serv1.options[case_serv1.selectedIndex].value;
	if (case_serv=='') {
		case_server();
	} else {
		$.ajax({
			type: "POST",
            url: "/modules/lk/php/cases/page.php",
		    data: {
			    case_serv:case_serv
		    },
		    type: "POST",
            success: function(content){
                $("#lk_content").html(content);
            }
        });
	}
}
        </script>

        <div class="full_news_comment_content">
        
            <h3 style="display: inline-block; font-size: 24px; font-family: 'FSElliotPro-Heavy'; color: #828282; margin-bottom: 12px; line-height: 24px;">
                Кейсы:</h3>
        
            <p style="margin-bottom: 24px;">
                Добро пожаловать на страницу открытия кейсов! В этих кейсах вы сможете выиграть различные предметы, $ и даже
                монеты!
                Получить кейсы можно за <a href="#" onclick="lk_votes(); return false;">голосование</a>.
            </p>
        
            <div class="basic_function_block" style="margin-bottom: 24px; margin-left: 0px; width: 636px;">
                <div class="basic_function_block_title">
                    <h3>Выберите сервер для открытия кейсов:</h3>
                </div>
                <div>
                    <div class="select" style="margin-right: 16px; margin-top: 26px; display: inline-block; width: 348px;">
                        <select class="select-text" id="casesServer" required="">
                        </select>
                        <span class="select-highlight"></span>
                        <span class="select-bar"></span>
                        <label class="select-label">Сервер для отрытия кейсов</label>
                    </div>
        
                    <a id="goToCases" onclick="case_page()" class="smcui-button" style="margin-right: 0px;">Перейти к открытию кейсов</a>
                </div>
            </div>
        </div>
    </fieldset>
    </div>
<script>
$.ajax({
        url: "/modules/libs/ints_api/server_option.php",
        success: function(content){
            $("#casesServer").html(content);
        }
});
</script>