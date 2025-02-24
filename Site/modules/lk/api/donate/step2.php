<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
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
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Далее',
    confirmButtonColor: '#35D59D',
    cancelButtonColor: '#2e3356', 
    customClass: {
		input: 'form-control',
		popup: 'animated pulse'
    },
    inputOptions: {
        <?php
	    foreach ($periods as $period) {
			file_put_contents($_SERVER['DOCUMENT_ROOT'].'/test.txt', json_encode($donates));
			exit("LOL");
            $price = $donates[$donate]['cost'] * $donates[$donate]['price']* $period['costx'] *  $period['id'];
	        $cost = ceil($donates[$donate]['cost'] * $period['costx'] *  $period['id'] - $price);
            echo  "'".$period['id']."': '".$period['title']." | ЦЕНА ".$cost." RUB',";
        }
	    ?>
    },
    showCancelButton: true,
    inputValidator: (value) => {
        $.ajax({
            url: "/modules/lk/api/donate/step3.php",
            type: "POST",
		    data: {
				donate:'<?php echo $donate ?>',
		        period:value,
		        server:'<?php echo $server ?>'
		    },
            success: function(html){
				$("#ajax").html(html);
            }
        });	   
    }
})
</script>