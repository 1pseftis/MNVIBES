<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
//Vars
$case = $_POST['casee'];
$server = $_POST['server'];
$amount = $_POST['amount'];
$ico = $_POST['ico'];
//Code
if (is_numeric($amount)) {
    $amount = ceil($_POST['amount']);
} else {
	die("<script>error_noname();</script>");
}
if ($ico == "money" || $ico == "coins") {
	if ($ico == "money") {
	    $cost = ceil($cases[$server][$case]['cost'] * $amount);
		$ico_title = "RUB";
	} else {
		$cost = ceil($cases[$server][$case]['cost'] * $case_coins_dableprice * $amount);
		$ico_title = "коинов";
	}
}
?>
<script>
Swal.fire({
    position: 'top',
    title: 'Вы уверены?',
    html: 'Что хотите купить - кейс: "<?php echo $cases[$server][$case]['title'].'" за '.$cost.' '.$ico_title?> в количестве <?php echo $amount?> штук на сервере <?php echo $server?>',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#35D59D',
    cancelButtonColor: '#2e3356',
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Да, купить за <?php echo $cost.' '.$ico_title?>'
}).then((result) => {
    if (result.value) {
		connect();
        $.ajax({
            url: "/modules/lk/api/case/buy.php",
            type: "POST",
		    data: {
			   casee:'<?php echo $case; ?>',
		       ico:'<?php echo $ico; ?>',
			   amount:'<?php echo $amount; ?>',
		       server:'<?php echo $server; ?>'
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
            timer: 1500
        })
    }
})
</script>