<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
//Vars
$case = $_POST['casee'];
$server = $_POST['server'];
$server = $_POST['server'];
$amount = $_POST['amount'];
//Code
if (is_numeric($amount)) {
    $amount = ceil($_POST['amount']);
} else {
	die("<script>error_noname();</script>");
}
$case_cost_coins = ceil($cases[$server][$case]['cost'] * $case_coins_dableprice * $amount);
$case_cost_money = ceil($cases[$server][$case]['cost'] * $amount);
?>
<script>
swal.fire({
    position: 'top',
    title: 'Выберите валюту',
    input: 'select',
    animation: false,
	width: 600,
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Далее',
    confirmButtonColor: '#35D59D',
    cancelButtonColor: '#2e3356', 
    customClass: {
		input: 'form-control',
		popup: 'animated pulse'
    },
    inputOptions: {
	    'money': 'Купить за рубли - цена <?php echo $case_cost_money; ?> рублей | Баланс: <?php echo $money; ?> RUB',
        'coins': 'Купить за коины - цена <?php echo $case_cost_coins; ?> коинов | Баланс: <?php echo $coins; ?> коинов',
    },
    showCancelButton: true,
    inputValidator: (value) => {
        $.ajax({
            url: "/modules/lk/api/case/dialog3.php",
            type: "POST",
		    data: {
				casee:'<?php echo $case; ?>',
		        ico:value,
			    amount:'<?php echo $amount; ?>',
		        server:'<?php echo $server; ?>'
		    },
            success: function(html){
	         	$("#ajax").html(html);
            }
        });	   
    }
})
</script>