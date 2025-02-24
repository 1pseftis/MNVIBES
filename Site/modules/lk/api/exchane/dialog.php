<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
//Code
$sum = ceil($_POST['sum']);
if ($sum<=0) {
	die('<script>ex_error()</script>');
}
?>
<script>
Swal.fire({
    position: 'top',
    title: 'Вы уверены?',
    text: "Что хотите обменять <?php echo $sum.' RUB на '.$sum*$curs['coins'].' коинов'?>",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#35D59D',
    cancelButtonColor: '#2e3356',
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Да, обменять за <?php echo $sum.' RUB'?>'
}).then((result) => {
    if (result.value) {
        $.ajax({
            url: "/modules/lk/api/exchane/buy.php",
            type: "POST",
	        data: {
				sum:'<?php echo $sum ?>'
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
            timer: 1500,
            confirmButtonColor: '#35D59D',
            cancelButtonColor: '#2e3356'
        })
    }
})
</script>