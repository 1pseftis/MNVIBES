<div class="registration_craft_page" id="registration_content">
    <div class="registration_craft_page_text">
        <h1>Регистрация</h1>
        <h3>Ты сделал правильный выбор!</h3>
        <span>
			Регистрация необходима для создания аккаунта, с помощью которого будет осуществляться вход в лаунчер и на наши серверы.
            <br><br>
		</span>
    </div>
    <div class="registration_craft_page_fields">
        <div class="registration_craft_page_fields_item">
            <div class="registration_craft_page_fields_lable">
                <span class="field_lable_black">Логин:</span>
                <!--span class="field_lable_red">*</span-->
            </div>
            <div class="registration_craft_page_field">
                <input type="text" name="name" id="name" class="registration_field" placeholder="От 4 - до 16 символов">
                <div id="result-registration" style="padding: 3px;"></div>
            </div>
        </div>

        <br><br>

        <div class="registration_craft_page_fields_item">
            <div class="registration_craft_page_fields_lable">
                <span class="field_lable_black">Пароль:</span>
                <!--span class="field_lable_red">*</span-->
            </div> <!-- registration_craft_page_fields_lable -->
            <div class="registration_craft_page_field">
                <input type="text" name="password1" id="password1" class="registration_short_field" placeholder="Не менее 8 символов" value="">
                <input type="button" onclick="generatePassword(); return false;" class="registration_check_login" value="Генерировать">
            </div> <!-- registration_craft_page_field -->
        </div> <!-- registration_craft_page_fields_item -->
        <div class="registration_craft_page_fields_item">
            <div class="registration_craft_page_fields_lable">
                <span class="field_lable_black">Повторите пароль:</span>
                <!--span class="field_lable_red">*</span-->
            </div> <!-- registration_craft_page_fields_lable -->
            <div class="registration_craft_page_field">
                <input type="text" name="password2" id="password2" class="registration_field" placeholder="Повторите ранее введённый пароль" value="">
                <span style="color: #c78282; display: inline-block; margin-top: 8px;">Советуем использовать сгенерированный пароль.</span>
            </div> <!-- registration_craft_page_field -->
        </div> <!-- registration_craft_page_fields_item -->

        <br><br>

        <div class="registration_craft_page_fields_item">
            <div class="registration_craft_page_fields_lable">
                <span class="field_lable_black">Ваш E-Mail:</span>
                <!--span class="field_lable_red">*</span-->
            </div> <!-- registration_craft_page_fields_lable -->
            <div class="registration_craft_page_field">
                <input type="text" name="email" id="email" class="registration_field" placeholder="Без почты Вы не сможете восстановить доступ к аккаунту">
            </div> <!-- registration_craft_page_field -->
        </div> <!-- registration_craft_page_fields_item -->

        <br><br>

        <div class="registration_craft_send" style="margin: 0px 0 0 204px;">

            
            {recaptcha}

            <br><br>

            <button type="submit" style="background: #1b1422;" name="submit"><a  class="smcui-button">Зарегистрировать
                аккаунт&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></a></button>
        </div>
    </div>
</div>
<script>

    function generatePassword() {

        var password = $("#password1");
        var password_repeat = $("#password2");

        var length = selfRandom(8, 16),
            charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_-",
            retVal = "";

        for (var i = 0, n = charset.length; i < length; ++i) {
            retVal += charset.charAt(Math.floor(Math.random() * n));
        }

        password.attr("value", retVal);
        password_repeat.attr("value", retVal);
    }

    function selfRandom(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

</script>
[validation]
<script>
window.location.replace('http://UniversalStudio.online/download'); 
</script>
[/validation]