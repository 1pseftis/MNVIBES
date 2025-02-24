//ЗАГРУЗКА СКИНА
var skin
function load_skin_init(skin) {
document.getElementById('skin0').src = '/modules/lk/skin.php?username='+skin;
document.getElementById('skin0_f').src = '/modules/lk/skin.php?username='+skin+'&mode=front';
document.getElementById('skin1').src = '/modules/lk/skin.php?username='+skin;
document.getElementById('skin1_f').src = '/modules/lk/skin.php?username='+skin+'&mode=front';
document.getElementById('skin2').src = '/modules/lk/skin.php?username='+skin;
document.getElementById('skin2_f').src = '/modules/lk/skin.php?username='+skin+'&mode=front';
}
$.ajax({
        url: "/modules/lk/api/profile/login.php",
        success: function(code){
            skin = code;
			load_skin_init(skin); //ИНИЦИАЛИЗАЦИЯ
        }
    });
// ПОДГРУЗКА СТРАНИЦ// 
function donate_lk() {
    $.ajax({
        url: "/modules/lk/api/donate.php",
        type: "POST",
		success: function(html){
					$("#donate_page").html(html);
        }
    });
}
function unban_page() {
    $.ajax({
        url: "/modules/lk/api/unban/index.php",
        type: "POST",
		success: function(html){
			$("#unban_page").html(html);
        }
    });
}
function case_page() {
    $.ajax({
        url: "/modules/lk/api/case/index.php",
        type: "POST",
		success: function(html){
			$("#case_page").html(html);
        }
    });
}
/////// VARS ///////
var lk_url = "/lk.html";
/////////////////////////
//// ЗАГРУЗКА ФАЙЛОВ ////
/////////////////////////
if (document.location.search=="?cloak_success") {
   cloak_success();
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?cloak_error") {
   cloak_error();
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?no_upload") {
   no_upload();
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?max_file") {
   max_file();
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?huyna") {
   huyna();
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?hz") {
   hz();
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?max") {
   max();
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?no_image") {
   no_image();
   history.pushState(null, null, lk_url);
}
if (document.location.search=="?skin_success") {
   skin_success();
   history.pushState(null, null, lk_url);
}
/////////////////////
//// ТП НА СПАВН ////
/////////////////////
var hschtoeto = document.getElementById("spawn_select_server");
var spawn_select_server = hschtoeto.options[hschtoeto.selectedIndex].value;
var change = 0;
var change_get = 15 - change;
function returned() {                   
	let timerInterval
    Swal.fire({
		position: 'top',
		animation: false,
		allowEscapeKey: false,
		allowOutsideClick: false,
		customClass: {
            popup: 'animated pulse'
         },
        title: 'Вы не обнаружены на сервере!',
        html: 'Ожидается повтор через <timer></timer>. <br>Осталось попыток ' + change_get,
        timer: 1000,
        onBeforeOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
                Swal.getContent().querySelector('timer')
                .textContent = Swal.getTimerLeft()
            }, 100)
        },
    }).then((result) => {
        if (result.dismiss === Swal.DismissReason.timer){
            tp_spawn_init();
        }
    })					
}
function tp_spawn_init() {
    $.ajax({
        url: "/modules/lk/api/tp-spawn.php?server=" + spawn_select_server + "&change=" + change_get,
        type: "POST",
		success: function(html){	
            change_get--;	    
			$("#ajax").html(html);
		}
    });
}
function tp_spawn() {
    Swal.fire({
        position: 'top',
        title: 'Вы будите телепртированы на спавн?',
        text: "После нажатия кнопки телепортироваться на спавн вы должны будите подключиться к серверу в течение 15 секунд. Сервер засечёт ваш онлайн ещё до прогрузки мира.",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#35D59D',
        cancelButtonColor: '#2e3356',
        cancelButtonText: 'Отмена',
        confirmButtonText: 'Да, телепортироваться!'
    }).then((result) => {
        if (result.value) {
			connect();
            tp_spawn_init();
        }
    })
}
/////////////////////////
//// УДАЛЕНИЕ ФАЙЛОВ ////
/////////////////////////
function delete_skin() {
    Swal.fire({
        position: 'top',
        title: 'Вы уверены?',
        text: "Что хотите удалить скин",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#35D59D',
        cancelButtonColor: '#2e3356',
        cancelButtonText: 'Отмена',
        confirmButtonText: 'Да, удалить'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: "/modules/lk/uploads/delete_skin.php",
                type: "POST",
                success: function(html){
				    $("#ajax").html(html);
                }
            });
        } else {
            Swal.fire({
	            position: 'top',
                title: 'Действие отменено',
	            confirmButtonColor: '#35D59D'
            })
        }
    })
}
function delete_cloak() {
    Swal.fire({
        position: 'top',
        title: 'Вы уверены?',
        text: "Что хотите удалить плащ",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#35D59D',
        cancelButtonColor: '#2e3356',
        cancelButtonText: 'Отмена',
        confirmButtonText: 'Да, удалить'
    }).then((result) => {
        if (result.value) {
        $.ajax({
                url: "/modules/lk/uploads/delete_cloak.php",
                type: "POST",
                success: function(html){
	    			$("#ajax").html(html);
                }
            });
        } else {
            Swal.fire({
	            position: 'top',
                title: 'Действие отменено',
	            confirmButtonColor: '#35D59D'
            })
        }
    })
}
//////////////////
//// ОБМЕННИК ////
//////////////////
function exchane() {	
    var sum = (document.getElementById("input_exchane").value);
    $.ajax({
        url: "/modules/lk/api/exchane/dialog.php",
        type: "POST",
		data: {sum:sum},
        success: function(html){
			$("#ajax").html(html);
        }
    });	   
}
//////////////////////
//// СМЕНА ПОРОЛЯ ////
//////////////////////
function change_pass() {	
    var pass1 = encodeURIComponent(document.getElementById("I_pass1").value);
    var pass2 = encodeURIComponent(document.getElementById("I_pass2").value);
    var pass3 = encodeURIComponent(document.getElementById("I_pass3").value);
    $.ajax({
        url: "/modules/lk/api/change_pass.php",
        type: "POST",
		data: {
			pass1:pass1,
			pass2:pass2,
			pass3:pass3
			},
        success: function(html){
			$("#ajax").html(html);
        }
    });	   
}