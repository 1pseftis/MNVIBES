<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Code
$s_server = $_POST['s_server'];
$s_type = $_POST['s_type'];
$count = ceil($_POST['count']);
$count2 = ceil($count-($count*0.05));
$s_num = 0;
if ($count<=0) {
	die('<script>ex_error()</script>');
}
$mysqli_s = new mysqli(DBHOST,DBUSER,DBPASS,$servers[$_POST['s_server']]['db_base']);
$mysqli_s->set_charset("utf8");
foreach ($servers as $server) {
	if($server['title']==$s_server) {
		$s_num++;
	}
}
if($s_num!=1){
	die('<script>ex_error()</script>');
}
?>
<script>
function in_server() {
Swal.fire({
    position: 'top',
    title: 'Вы уверены?',
    text: "Что хотите перевести <?php echo $count.' $ на сервер '.$s_server.''?>",
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
    confirmButtonText: 'Да, перевести <?php echo $count.' $'?>'
}).then((result) => {
    if (result.value) {
        $.ajax({
            url: "/modules/lk/php/econs/serv.php",
            type: "POST",
	        data: {
				s_server:'<?php echo $s_server ?>',
				count:'<?php echo $count ?>',
				s_type: '<?php echo $s_type ?>'
				},
            success: function(html){
			    $("#ajax").html(html);
            }
        });
    } else {
        Swal.fire({
	        position: 'top',
            title: 'Действие отменено',
			confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
            showConfirmButton: false,
            timer: 1500,
            confirmButtonColor: '#35D59D',
            cancelButtonColor: '#2e3356'
        })
    }
})
}
function from_server() {
Swal.fire({
    position: 'top',
    title: 'Вы уверены?',
    text: "Что хотите вывести <?php echo $count.' $ с сервера '.$s_server.', вы получите '.$count2.' $ на счёт с учётом комиссии 5%'?>",
    type: 'warning',
	confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
    showCancelButton: true,
    confirmButtonColor: '#35D59D',
    cancelButtonColor: '#2e3356',
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Да, вывести <?php echo $count.' $'?>'
}).then((result) => {
    if (result.value) {
        $.ajax({
            url: "/modules/lk/php/econs/serv.php",
            type: "POST",
	        data: {
				s_server:'<?php echo $s_server ?>',
				count:'<?php echo $count ?>',
				s_type: '<?php echo $s_type ?>'
				},
            success: function(html){
			    $("#ajax").html(html);
            }
        });
    } else {
        Swal.fire({
	        position: 'top',
            title: 'Действие отменено',
			confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
            showConfirmButton: false,
            timer: 1500,
            confirmButtonColor: '#35D59D',
            cancelButtonColor: '#2e3356'
        })
    }
})
}
</script>
<?php
if($s_type=='toserver') {
	die('<script>in_server()</script>');
} elseif($s_type=='fromserver') {
	die('<script>from_server()</script>');
} else {
	die('<script>hz()</script>');
}
?>