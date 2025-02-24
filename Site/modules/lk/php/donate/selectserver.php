<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Code
$donate = $_POST['donate'];
?>
<script>
swal.fire({
    position: 'top',
    title: 'Выберите сервер',
    input: 'select',
	confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
    animation: false,
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Далее',
    inputOptions: {
        <?php
	    foreach ($servers as $server) {
            echo  "'".$server['title']."': '".$server['title']."',";
        }
	    ?>
    },
    showCancelButton: true,
    inputValidator: (value0) => {
        $.ajax({
            url: "/modules/lk/php/donate/selectperiod.php",
            type: "POST",
		    data: {
				donate:'<?php echo $donate ?>',
		        server:value0
		    },
            success: function(html){
				$("#ajax").html(html);
            }
        });	   
    }
})
</script>