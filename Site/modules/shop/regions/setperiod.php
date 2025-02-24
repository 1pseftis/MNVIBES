<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Code
$rg_id = $_GET['rg_id'];
$server = $_GET['server'];
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
	    foreach ($shop['cats']['rg']['periods'] as $period) {
			if ($period['type']==1) {
				$type = 'cost_money';
			}  elseif ($period['type']==2) {
				$type = 'cost_econs';
			}
            $cost = $shop['cats']['rg']['regions'][$server][$rg_id][$type] *  $period['costx'];
            echo  "'".$period['id']."': '".$period['title']." | ЦЕНА ".$cost;
			if ($period['type']==1) {
				echo ' монет ';
			} elseif ($period['type']==2) {
				echo ' эконов ';
			}
			echo "',";
        }
	    ?>
    },
    showCancelButton: true,
    inputValidator: (value) => {
		//alert(value);
        $.ajax({
            url: "/modules/shop/regions/ok.php",
            type: "POST",
		    data: {
				rg_id:'<?php echo $rg_id ?>',
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