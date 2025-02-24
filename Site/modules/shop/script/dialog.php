<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
if ($_GET['ptype'] == 'price_v') {
	$cost = $mysqli->query("SELECT price_v FROM `flare_shop` WHERE `id` = ".$_GET['id'])->fetch_object()->price_v;
} else {
	$cost = $mysqli->query("SELECT price FROM `flare_shop` WHERE `id` = ".$_GET['id'])->fetch_object()->price;
}
$amount2 = $mysqli->query("SELECT amount FROM `flare_shop` WHERE `id` = ".$_GET['id'])->fetch_object()->amount;
$cost2 = ceil($_GET['amount']/$amount2*$cost);
//echo $cost;
//Code
if ($_GET['ptype'] == 'price_v') {
	$p_text = 'голосов';
} else {
	$p_text = 'монет';
}
?>
<script>
Swal.fire({
    position: 'top',
	confirmButtonColor: '#7328a9',
	background: '#15101a',
	position: 'top',
	animation: false,
	cancelButtonColor: '#828282',
	customClass: {
            popup: 'animated fadeInDown faster'
    },
    title: 'Вы уверены?',
    text: "Что хотите купить <?php echo $_GET['title'].' ('.$_GET['amount'].' штук) за '.ceil($cost2).' '.$p_text.'  на сервере '.$_GET['server']?>",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#35D59D',
    cancelButtonColor: '#2e3356',
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Да'
}).then((result) => {
    if (result.value) {
		//connect();
        $.ajax({
            url: "/modules/shop/script/buy.php",
	    	data: {
				amount:'<?php echo $_GET['amount'] ?>',
				server:'<?php echo $_GET['server'] ?>',
				ptype:'<?php echo $_GET['ptype'] ?>',
				id: '<?php echo $_GET['id'] ?>'
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
			background: '#15101a',
            timer: 1500,
            confirmButtonColor: '#35D59D',
            cancelButtonColor: '#2e3356'
        })
    }
})
</script>