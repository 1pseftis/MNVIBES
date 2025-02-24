<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
//Vars
$donate = $_POST['donate'];
$server = $_POST['server'];
$period = $_POST['period']-1;
//Code
$price = $donates[$donate]['cost'] * $donates[$donate]['price'] * $periods[$period]['costx'] *  $periods[$period]['id'];
$cost = ceil($donates[$donate]['cost'] * $periods[$period]['costx'] *  $periods[$period]['id'] - $price);
if ($periods[$period][time]==-1) {
    $visual_p = " НАВСЕГДА";
} else {
	$visual_p = " на ".$periods[$period][time].' дней';
}
?>
<script>
Swal.fire({
    position: 'top',
    title: 'Вы уверены?',
    text: "Что хотите купить <?php echo $donates[$donate]['title'].' за '.$cost.' RUB '.$visual_p?>",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#35D59D',
    cancelButtonColor: '#2e3356',
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Да, купить за <?php echo $cost.' RUB'?>'
}).then((result) => {
    connect();
    if (result.value) {
		connect();
        $.ajax({
            url: "/modules/lk/api/donate/buy.php",
            type: "POST",
	    	data: {donate:'<?php echo $donate ?>',
	    	    period:'<?php echo $period ?>',
	    	    server:'<?php echo $server ?>'
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