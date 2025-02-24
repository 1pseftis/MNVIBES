<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Code
/*
    opacity: 0.7;
    cursor: default;
    background: #16101b;
*/
foreach ($servers as $server) {
	if($server['title']==$_POST['server']) {
		$s_num++;
	}
}
if($s_num!=1){
	die('<script>ex_error()</script>');
}
?>
<script>
var spawn_select_server = '<?php echo $_POST["server"];?>';
var change = 0;
var change_get = 15 - change;
function tp_spawn() {
    Swal.fire({
        position: 'top',
        title: 'Телепортироваться на спавн <?php echo $_POST["server"];?>',
        text: "После нажатия кнопки телепортироваться на спавн вы должны будите подключиться к серверу в течение 15 секунд. Сервер засечёт ваш онлайн ещё до прогрузки мира.",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        cancelButtonText: 'Отмена',
        confirmButtonText: 'Да, телепортироваться!'
    }).then((result) => {
        if (result.value) {
			connect();
            tp_spawn_init();
        }
    })
}
function returned() {                   
	let timerInterval
    Swal.fire({
		position: 'top',
		animation: false,
		allowEscapeKey: false,
		allowOutsideClick: false,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		customClass: {
            popup: 'animated pulse'
         },
        title: 'Вы не обнаружены на сервере <?php echo $_POST["server"];?>!',
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
        url: "/modules/lk/php/spawn/tp-spawn.php?server=" + spawn_select_server + "&change=" + change_get,
		success: function(html){	
            change_get--;	  		
			$("#ajax").html(html);
		}
    });
}
tp_spawn()
</script>