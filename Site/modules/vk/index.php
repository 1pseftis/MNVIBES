<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>

<a onclick="get_id()" href="#">Получить список ID для работы</a><br><br>
<a target="blank" href="https://vkhost.github.io/">Получить access token</a><br>
<br>
<textarea rows="20" cols="34" id='id_area'>
  Список ID пуст
</textarea>
<br><br>
<input placeholder='Acces Token' id='acess'></input>
<input placeholder='Тип 1/2' id='type'></input>
<br>

<a onclick="start('-1')" href="#">Начать отправку друзей</a>
<br>
<div id='status'>В ожидании...</div>



<script>

var count_all=0;
function get_id() {
	var type = $("#type").val(); 
    $.ajax({
            url: "my.php",
            type: "GET",
		    data: {
				type:type
		    },
            success: function(html){
				$('#id_area').val(html);
            }
        });	
}

function start(count, count_all) {
	var acess = $("#acess").val(); 
	var user_list = $("#id_area").val(); 
    $.ajax({
            url: "addfriend.php",
            type: "GET",
		    data: {
				acess:acess,
				count, count,
				count_all, count_all,
				user_list:user_list
		    },
            success: function(status){
				$('#status').html(status);
            }
        });	
}
function captha(count, count_all, captcha_sid) {
	var acess = $("#acess").val(); 
	var captcha_key = $("#captha_key_text").val(); 
	var user_list = $("#id_area").val(); 
    $.ajax({
            url: "addfriend.php",
            type: "GET",
		    data: {
				acess:acess,
				count, count,
				count_all, count_all,
				captcha_sid: captcha_sid,
				captcha_key: captcha_key,
				user_list:user_list
				
		    },
            success: function(status){
				$('#status').html(status);
            }
        });	
}

</script>
