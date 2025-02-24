<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Vars
$rg_id = $_POST['rg_id'];
$server = $_POST['server'];
$period = $_POST['period'];
$visual_p = " на ".$shop['cats']['rg']['periods'][$period]['time'].' дней';
if ($shop['cats']['rg']['periods'][$period]['type']==1) {
	$cost_text = $shop['cats']['rg']['regions'][$server][$rg_id]['cost_money']*$shop['cats']['rg']['periods'][$period]['costx'].' монет';
}  elseif ($shop['cats']['rg']['periods'][$period]['type']==2) {
	$cost_text = $shop['cats']['rg']['regions'][$server][$rg_id]['cost_econs']*$shop['cats']['rg']['periods'][$period]['costx'].' эконов';
} else {
	die();
}
$query_u_2 = $mysqli->query("SELECT * FROM `flare_regions` WHERE `server` LIKE '$server' AND `owner` LIKE '$login' AND `name` LIKE '$rg_id' ");
while($item = $query_u_2->fetch_array()) {
    $add_time = 'true';
}
if ($add_time == 'true') {
	$buy_text = 'продлить' ;
} else {
	$buy_text = 'купить' ;
}
?>
<script>
Swal.fire({
    position: 'top',
    title: 'Вы уверены?',
    text: "Что хотите <?php echo $buy_text.' '.$shop['cats']['rg']['regions'][$server][$rg_id]['title'].' за '.$cost_text.' '.$visual_p.' на сервере '.$server?>",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Да, купить за <?php echo $cost_text ?>'
}).then((result) => {
    if (result.value) {
		connect();
        $.ajax({
            url: "/modules/shop/regions/buy.php",
            type: "GET",
	    	data: {
				rg_id:'<?php echo $rg_id ?>',
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
			confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
            showConfirmButton: false,
            timer: 1500,
            confirmButtonColor: '#35D59D',
            cancelButtonColor: '#2e3356'
        })
    }
})
</script>