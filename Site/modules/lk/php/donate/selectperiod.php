<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Code
$donate = $_POST['donate'];
$server = $_POST['server'];
?>
<script>
swal.fire({
    position: 'top',
    title: 'Выберите период',
    input: 'select',
    animation: false,
	confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Далее',
    inputOptions: {
        <?php
	    foreach ($periods as $period) {
            $price = $donates[$donate]['cost'] * $donates[$donate]['price']* $period['costx'] *  $period['id'];
	        $cost = ceil($donates[$donate]['cost'] * $period['costx'] *  $period['id'] - $price);
            echo  "'".$period['id']."': '".$period['title']." | ЦЕНА ".$cost." RUB',";
        }
	    ?>
    },
    showCancelButton: true,
    inputValidator: (value) => {
        $.ajax({
            url: "/modules/lk/php/donate/ok.php",
            type: "POST",
		    data: {
				donate:'<?php echo $donate ?>',
				server:'<?php echo $server ?>',
		        period:value,
		    },
            success: function(html){
				$("#ajax").html(html);
            }
        });	   
    }
})
</script>