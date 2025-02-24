<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
?>
<script>
function tp_spawn_select_server() {
	swal.fire({
    position: 'top',
    title: 'Выберите сервер',
    input: 'select',
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Далее',
    confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
    inputOptions: {
        <?php
	    foreach ($servers as $server) {
            echo  "'".$server['title']."': '".$server['title']."',";
        }
	    ?>
    },
    showCancelButton: true,
    inputValidator: (server_spawn) => {
        $.ajax({
            url: "/modules/lk/php/spawn/d.php",
            type: "POST",
		    data: {
		        server:server_spawn
		    },
            success: function(html){
				$("#ajax").html(html);
            }
        });	   
    }
    })
}
</script>
<div class="full_news_content">
        <fieldset style="border: none; padding-top: 8px;">


<style>

    /* Стили изменения цвета привилегий */
    @font-face {
        font-family: Minecraft;
        src: url("./templates/simpleminecraft/images/cabinet/minecraft.ttf");
    }

    .chat-pan {
        color: #FFF;
        font-size: 14px;
        text-shadow: 1px 1px 1px #3e3e3e;
        line-height: 24px;
        width: 100%;
        text-align: left;
        background: url("./templates/simpleminecraft/images/cabinet/chat.png");
        padding: 20px 20px 20px 20px;
        margin: 20px 20px 0px -20px;
        font-family: 'Minecraft';
    }

    .prefix_close {
        color: #555555;
        text-shadow: 1px 1px 1px #151515;
    }

    .prefix_default_color {
        color: #AA00AA;
        text-shadow: 1px 1px 1px #2A002A;
    }

    .prefix_name_color {
        color: #AAAAAA;
        text-shadow: 1px 1px 1px #2A2A2A;
    }

</style>

<div id="lk_content" class="full_news_comment_content" style="display: inline-block;">
    <div class="module_block" style="margin-bottom: 24px;">
        <div class="basic_function_block" style="width: 238px; float: left; margin-left: 0px;">
            <div class="basic_function_block_title">
                <h3>Смена скина и плаща</h3>
            </div>
            <div>
                Создать свои скины или плащи можно используя <b><a target="_blank" href="https://minecraft.novaskin.me/">редактор</a></b>.

                <br><br><br>
                <div class="select" style="width: 238px; margin: 0 0 24px 0; display: inline-block;">
                    <select oninput="uploadType()" class="select-text" id="uploadType" required="">
                        <option value="" disabled="" selected="" style="display: none;"></option>
                        <option value="skin">Скин</option>
                        <option value="cloak">Плащ</option>
                    </select>
                    <span class="select-highlight"></span>
                    <span class="select-bar"></span>
                    <label class="select-label">Выберите скин или плащ</label>
                </div>
				<style>
                    .skin_panel_buttons {
                        text-align: center;
                        font-size: 25px;
                    }

                    .skin_panel_buttons b {
                        color: #541d7e;
                        display: inline-block;
                        width: 88px;
                        transition: 0.3s;
                        padding: 14px;
                        background: #15101a;
                        cursor: pointer;
                    }

                    .skin_panel_buttons b:hover {
                        padding: 16px;
                        margin: -2px -2px;
                    }

                </style>
                <form enctype="multipart/form-data" action="__URL__" method="POST" id="upload_form">
                <input class="file_input_block" type="file" id="userFile" name="setskin" accept=".png" style="width: 216px; font-size: 13px; padding: 10px;">
                <div class="skin_panel_buttons">
                    <b onclick="upload();" title="Загрузить скин или плащ" id="uploadFile"><i class="fa fa-cloud-upload" aria-hidden="true"></i></b>
                    <!--span tooltip="Скачать текущий скин или плащ" flow="right"><i class="fa fa-cloud-download" aria-hidden="true" id="downloadFile"></i></span-->
                    <b onclick='deleteee()' title="Удалить текущий плащ" id="deleteCloak"><i class="fa fa-trash" aria-hidden="true"></i></b>
                </div>
				</form>
            </div>
        </div>

        <div class="basic_function_block" style="width: 332px; float: right;">
            <div class="basic_function_block_title">
                <h3>Настройки префикса</h3>
                            </div>
            <div id="prefix_panel" style="min-height: 268px;">
                
                            <div class="select" style="margin-right: 16px; margin-top: 26px; display: none;">
                                <select class="select-text" id="prefix_type" required="">
                                    <option value="nickcolor">Цвет ника</option>
                                    <option value="prefixcolor">Цвет префикса</option>
                                    <option value="chatcolor">Цвет сообщений</option>
                                </select>
                                <span class="select-highlight"></span>
                                <span class="select-bar"></span>
                                <label class="select-label">Что будем менять?</label>
                            </div>
            
                            <div class="select" id="prefix_color_block" style="margin-right: 16px; ">
                                <select onchange="prefix_color();" class="select-text" id="prefix_color" required="">
                                </select>
                                <span class="select-highlight"></span>
                                <span class="select-bar"></span>
                                <label class="select-label">Выберите цвет префикса</label>
                            </div>
            
                            <div class="select" id="nick_color_block" style="margin-right: 16px; margin-top: 26px; display: inline-block;">
                                <select onchange="nick_color();" class="select-text" id="nick_color" required="">

                                </select>
                                <span class="select-highlight"></span>
                                <span class="select-bar"></span>
                                <label class="select-label">Выберите цвет ника</label>
                            </div>
            
                            <div class="select" id="msg_color_block" style="margin-right: 16px; margin-top: 26px;">
                                <select onchange="msg_color();" class="select-text" id="msg_color" required="">
 
                                </select>
                                <span class="select-highlight"></span>
                                <span class="select-bar"></span>
                                <label class="select-label">Выберите цвет сообщений</label>
                            </div>
            
                            <div class="select" style="margin-right: 16px; margin-top: 26px; display: inline-block;">
                                <select onchange="p_server_func();" class="select-text" id="prefix_server" required="">
                                    
								</select>
                                <span class="select-highlight"></span>
                                <span class="select-bar"></span>
                                <label class="select-label">Сервер на котором меняем префикс</label>
                            </div>
            
                            <div class="chat-pan">
                                <font class="prefix_close" style='color: #FFFFFF;'>[</font><span id="prefix-pan" class="prefix_default_color">Группа</span><font style='color: #FFFFFF;' class="prefix_close">]</font>
                                <span id="username-pan" class="prefix_name_color"></span>:
                                <span id="message-pan">Текст.</span>
                            </div>
            
                            <div style="float: right; margin-top: 20px;">
                                <a  id="prefixButton" class="smcui-button" onclick="change_prefix();" style="margin-right: 4px;">Изменить
                                    префикс</a>
                            </div>
                            
                            <div style="float: left; margin-top: 24px; width: 124px;">
                                <a href="#" onclick="standart(); return false;" id="resetPrefixButton"><b>Установить стандартный</b></a> <b tooltip="Будет установлен префикс, по умолчанию для вашей группы." flow="left" style="cursor: help;">*</b>
                            </div>
                                </div>
        </div>
    </div>

    <a class="card_button_block" href="#" onclick="tp_spawn_select_server(); return false;" style="background: linear-gradient(to top right, #104c4c, #1c6558, #12907b, #00e5b9);">
        <div class="cover_background" style="background: url(../uploads/svg/teleport.svg?v2) no-repeat top right; background-size: cover;"></div>
        <h4>Помогите, я застрял!</h4>
        <div class="description">
            Вы зависли где-то на сервере? Попали в лаго-зону?
            <br>
            Нажмите здесь, перезайдите на сервер, при входе мы телепортируем вас на спавн!
        </div>
        <div class="icon">
            <img src="../uploads/svg/arrow-pointing-to-right.svg">
        </div>
    </a>

    <div style="margin-top: 10px;">
        <div style="float: left;">
            <a class="card_button_block" href="#" onclick="lk_votes(); loadPage('vote'); return false;" style="background: linear-gradient(to top right, #bf2525, #d05950, #d87474, #ffaeac); width: 332px; height: 220px;">
                <div class="cover_background" style="background: url(../uploads/svg/gift.svg?v2) no-repeat top right; background-size: cover; width: 108px; height: 108px; margin: 90px 14px 0px 0px;"></div>
                <h4>Ежедневный бонус!</h4>
                <div class="description">
                    Каждый день можно голосовать и зарабатывать игровую валюту - <b>$ и кейсы</b>, из которых
                    можно получить предметы различной редкости.
                </div>
                <div class="icon">
                    <img src="../uploads/svg/arrow-pointing-to-right.svg">
                </div>
            </a>
        </div>
        <div style="float: right;">
            <a class="card_button_block" onclick="lk_top()" style="background: linear-gradient(to top right, #c75a1e, #e68b59, #eeb357, #f3d05a); width: 332px; height: 220px;">
                <div class="cover_background" style="background: url(../uploads/svg/rating.svg?v2) no-repeat top right; background-size: cover; width: 108px; height: 108px; margin: 18px;"></div>
                <h4>Рейтинг голосующих</h4>
                <div class="description">
                    Вы находитесь на <b><?php echo $vote_top; ?></b> месте, 
                    проголосовав <b><?php echo $votes; ?></b> раз.<br><br>
                    <b>Поднимитесь в пятёрку лучших и получите денежный приз!</b>
                </div>
                <div class="icon">
                    <img src="../uploads/svg/arrow-pointing-to-right.svg">
                </div>
            </a>
        </div>
    </div>
</div>
</fieldset>
</div>
<script>
var prefix, nick, msg, p_server;
$.ajax({
        url: "/modules/libs/ints_api/server_option.php",
        success: function(content){
            $("#prefix_server").html(content);
        }
});
$.ajax({
        url: "/modules/libs/ints_api/chat_colors.php",
        success: function(content){
            $("#msg_color").html(content);
			$("#nick_color").html(content);
			$("#prefix_color").html(content);
        }
});
function p_server_func() {
    p_server1 = document.getElementById("prefix_server");
    p_server = $('#prefix_server').val();
	console.log(p_server);
	$.ajax({
        url: "/modules/libs/ints_api/donate_title.php",
		data: {
			p_server: p_server
		},
        success: function(text){
			$("#prefix-pan").html(text);
        }
    });
}
function msg_color() {
	var msg_color1 = document.getElementById("msg_color");
    var msg_color = msg_color1.options[msg_color1.selectedIndex].value;
	$.ajax({
        url: "/modules/libs/ints_api/hex.php",
		data: {
			msg_color: msg_color
		},
        success: function(hex){
			msg = msg_color;
			document.getElementById('message-pan').style.color = hex;
        }
    });
}
function nick_color() {
	var msg_color1 = document.getElementById("nick_color");
    var msg_color = msg_color1.options[msg_color1.selectedIndex].value;
	$.ajax({
        url: "/modules/libs/ints_api/hex.php",
		data: {
			msg_color: msg_color
		},
        success: function(hex){
			nick = msg_color;
			document.getElementById('username-pan').style.color = hex;
        }
    });
}
function prefix_color() {
	var msg_color1 = document.getElementById("prefix_color");
    var msg_color = msg_color1.options[msg_color1.selectedIndex].value;
	$.ajax({
        url: "/modules/libs/ints_api/hex.php",
		data: {
			msg_color: msg_color
		},
        success: function(hex){
			prefix = msg_color;
			document.getElementById('prefix-pan').style.color = hex;
        }
    });
}
function change_prefix() {
	//alert(prefix+nick+msg+p_server);
	$.ajax({
        url: "/modules/lk/php/chat/change.php",
		type: "POST",
		data: {
			prefix: prefix,
			nick: nick,
			msg: msg,
			p_server: p_server
		},
        success: function(content){
            $("#ajax").html(content);
        }
    });
}
function standart() {
	$.ajax({
        url: "/modules/lk/php/chat/standart.php",
		type: "POST",
		data: {
			p_server: p_server
		},
        success: function(content){
            $("#ajax").html(content);
        }
    });
}
function upload() {
	var uploadType1 = document.getElementById("uploadType");
    var uploadType = uploadType1.options[uploadType1.selectedIndex].value;
	var form = document.getElementById("upload_form");
	if ((uploadType == 'skin')||(uploadType == 'cloak')) {
		form.submit();
	} else {
	    skin_selector_error();
	}
}
function deleteee() {
	var uploadType1 = document.getElementById("uploadType");
    var uploadType = uploadType1.options[uploadType1.selectedIndex].value;
	var form = document.getElementById("upload_form");
	if (uploadType == 'skin') {
		$.ajax({
            url: "/modules/lk/uploads/delete_skin.php",
            type: "POST",
		    success: function(html){
			     $("#ajax").html(html);
            }
        });
	}
	if (uploadType == 'cloak') {
		$.ajax({
            url: "/modules/lk/uploads/delete_cloak.php",
            type: "POST",
		    success: function(html){
			     $("#ajax").html(html);
            }
        });
	}
}
function uploadType() {
	var uploadType1 = document.getElementById("uploadType");
    var uploadType = uploadType1.options[uploadType1.selectedIndex].value;
	if (uploadType == 'skin') {
		document.getElementById("upload_form").action = "/modules/lk/uploads/uploader_skin.php";
	}
	if (uploadType == 'cloak') {
		document.getElementById("upload_form").action = "/modules/lk/uploads/uploader_cloak.php";
	}
}

</script>