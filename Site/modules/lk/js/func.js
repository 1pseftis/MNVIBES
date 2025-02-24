//ЗАГРУЗКА СКИНА
var skin, ajax_page;
function load_skin_init(skin) {
    document.getElementById('skin-img-front').src = '/modules/lk/skin.php?username='+skin;
	document.getElementById('skin-img-back').src = '/modules/lk/skin.php?username='+skin+'&mode=2&update=0';
	document.getElementById('skin-img-avatar').src = '/modules/lk/uploads/head/'+skin+'.png?'+new Date();
}
$(".skin_view").mouseover(function(){
  $(this).find("#skin-img-front").css("display", "none");
  $(this).find("#skin-img-back").css("display", "block");
});
$(".skin_view").mouseout(function(){
  $(this).find("#skin-img-front").css("display", "block");
  $(this).find("#skin-img-back").css("display", "none");
});

$.ajax({
        url: "/modules/libs/ints_api/login.php",
        success: function(code){
            skin = code;
			load_skin_init(skin); //ИНИЦИАЛИЗАЦИЯ
        }
    });
	
	
//ЗАГРУЗКА СТРАНИЦ

//Profile
//Функции подгрузки страниц
function lk_profile() {
$('.selected').removeClass('selected');
$("#profile_tab").addClass("selected");
$.ajax({
        url: "/modules/lk/ajax_page/profile.php",
        success: function(content){
            $("#lk_content").html(content);
			ajax_page = "profile";
			$.ajax({
                url: "/modules/libs/ints_api/login.php",
                success: function(content){
                    $("#username-pan").html(content);
                }
            });
        }
    });
}
function lk_donate() {
$('.selected').removeClass('selected');
$.ajax({
        url: "/modules/lk/ajax_page/donate.php",
        success: function(content){
            $("#lk_content").html(content);
			ajax_page = "donate";
			$("#groups_tab").addClass("selected");
			history.pushState(null, null, lk_url+'?donate');
        }
    });
}
if (document.location.search=="?donate") {
	window.onload = function() {
   lk_donate();
	}
}
function lk_money() {
$('.selected').removeClass('selected');
$.ajax({
        url: "/modules/lk/ajax_page/money.php",
        success: function(content){
            $("#lk_content").html(content);
			$("#money_tab").addClass("selected");
			ajax_page = "money";
			history.pushState(null, null, lk_url+'?money');
        }
    });
}
if (document.location.search=="?money") {
	window.onload = function() {
   lk_money();
	}
}
function lk_economy() {
$('.selected').removeClass('selected');
$.ajax({
        url: "/modules/lk/ajax_page/economy.php",
        success: function(content){
            $("#lk_content").html(content);
			ajax_page = "economy";
			$("#econs_tab").addClass("selected");
			history.pushState(null, null, lk_url+'?econs');
        }
    });
}
if (document.location.search=="?econs") {
	window.onload = function() {
   lk_economy();
	}
}
function lk_case() {
$('.selected').removeClass('selected');
$.ajax({
        url: "/modules/lk/ajax_page/case.php",
        success: function(content){
            $("#lk_content").html(content);
			ajax_page = "case";
			$("#cases_tab").addClass("selected");
			history.pushState(null, null, lk_url+'?case');
        }
    });
}
if (document.location.search=="?case") {
	window.onload = function() {
   lk_case();
	}
}
function lk_votes() {
$('.selected').removeClass('selected');
$.ajax({
        url: "/modules/lk/ajax_page/votes.php",
        success: function(content){
            $("#lk_content").html(content);
			ajax_page = "votes";
			$("#vote_tab").addClass("selected");
			history.pushState(null, null, lk_url+'?votes');
        }
    });
}
if (document.location.search=="?votes") {
	window.onload = function() {
   lk_votes();
	}
}
//Функции подгрузки переменных
$.ajax({
        url: "/modules/libs/ints_api/reg_date.php",
        success: function(content){
            $("#lk_int_reg_date").html(content);
        }
    });
$.ajax({
        url: "/modules/libs/ints_api/reg_days.php",
        success: function(content){
            $("#lk_int_reg_days").html(content);
        }
    });
$.ajax({
        url: "/modules/libs/ints_api/hds_pex.php",
        success: function(content){
            $("#lk_int_hd_s_pex").html(content);
        }
    });
$.ajax({
        url: "/modules/libs/ints_api/hdc_pex.php",
        success: function(content){
            $("#lk_int_hd_c_pex").html(content);
        }
    });
$.ajax({
        url: "/modules/libs/ints_api/groups_active.php",
        success: function(content){
            $("#lk_int_groups").html(content);
        }
    });
$.ajax({
        url: "/modules/libs/ints_api/discord.php",
        success: function(content){
            $("#lk_int_discord").html(content);
        }
    });
$.ajax({
        url: "/modules/libs/ints_api/ref.php",
        success: function(content){
            $("#referal_nick").html(content);
        }
    });
$.ajax({
        url: "/modules/libs/ints_api/radio.php",
        success: function(content){
            $("#radio_admin").html(content);
        }
    });
function money_core(){
    $.ajax({
        url: "/modules/libs/ints_api/money.php",
        type: "POST",
		success: function(html){
			$("#realmoney").html(html);
        }
    });
    $.ajax({
        url: "/modules/libs/ints_api/econs.php",
        type: "POST",
		success: function(html){
			$("#money").html(html);
        }
    });
    $.ajax({
        url: "/modules/libs/ints_api/cases.php",
        type: "POST",
		success: function(html){
			$("#cases").html(html);
        }
    });
}
//ALERTS
function skin_selector_error() {

}
/////////////////////////
//// ЗАГРУЗКА ФАЙЛОВ ////
/////////////////////////
var lk_url = "/cabinet";
if (document.location.search=="?cloak_success") {
	window.onload = function() {
   cloak_success();
	}
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?cloak_error") {
	window.onload = function() {
   cloak_error();
	}
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?no_upload") {
   window.onload = function() {
       no_upload();
   }
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?max_file") {
	window.onload = function() {
   max_file();
	}
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?huyna") {
	window.onload = function() {
   huyna();
	}
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?hz") {
	window.onload = function() {
   hz();
	}
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?max") {
	window.onload = function() {
   max();
	}
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?no_image") {
	window.onload = function() {
   no_image();
	}
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?skin_success") {
	window.onload = function() {
   skin_success();
	}
   history.pushState(null, null, lk_url);
}	






//DISCORD
function logout_discord() {
    window.location.replace('https://UniversalStudio.online/modules/api/discord_auth.php?action=logout'); 
}
function login_discord() {
    window.location.replace('https://UniversalStudio.online/modules/api/discord_auth.php?action=login'); 
}
if (document.location.search=="?discord_error") {
	window.onload = function() {
    error_discord();
	}
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?discord_success") {
	window.onload = function() {
   login_discord_alert();
	}
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?discord_logout") {
	window.onload = function() {
   logout_discord_alert();
	}
   history.pushState(null, null, lk_url);
}
//ИНИЦИАЛИЗАЦИЯ
if (document.location.search!="?donate" && document.location.search!="?money" && document.location.search!="?econs" && document.location.search!="?cases" && document.location.search!="?votes" && document.location.search!="?history" && document.location.search!="?top") {
	lk_profile();
}
money_core();
setInterval(function() {
  money_core();
  load_money();
}, 4000);


