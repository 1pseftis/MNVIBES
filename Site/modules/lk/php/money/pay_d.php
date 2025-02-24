<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Code
$ingame = $_POST['ingame'];
$sum = ceil($_POST['money']);
if ($sum<=0) {
	die('<script>ex_error()</script>');
}
$member = $mysqli->query("SELECT * FROM `dle_users` WHERE `name` LIKE '$ingame'");
$member_num = 0;
while($row = $member->fetch_assoc()) {
	$member_num++;
}
if ($member_num <= 0) {
	die('<script>ex_not_member()</script>');
}
?>
<script>
Swal.fire({
    position: 'top',
    title: 'Вы уверены?',
	confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
    text: "Что хотите перевести <?php echo $sum.' RUB игроку '.$ingame.''?>",
    type: 'warning',
    showCancelButton: true,
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Да, перевести <?php echo $sum.' RUB'?>'
}).then((result) => {
    if (result.value) {
        $.ajax({
            url: "/modules/lk/php/money/pay.php",
            type: "POST",
	        data: {
				sum:'<?php echo $sum ?>',
				ingame: '<?php echo $ingame ?>'
				},
            success: function(html){
			    $("#ajax").html(html);
            }
        });
    } else {
        Swal.fire({
	        position: 'top',
            title: 'Действие отменено',
            showConfirmButton: false,
			confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
            timer: 1500,
            confirmButtonColor: '#35D59D',
            cancelButtonColor: '#2e3356'
        })
    }
})
</script>