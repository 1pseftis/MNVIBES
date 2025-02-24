<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//Code
$server = $_GET['server'];
$server_small = mb_strtolower($_GET['server']);
$kit = $_GET['kit_name'];
$title = $shop['cats']['kits']['kits'][$kit]['title'];
$cost = $shop['cats']['kits']['kits'][$kit]['cost'];
?>
<script>
function buy_info_alert() {
    Swal.fire({
		position: 'top',
		animation: false,
		title: 'Набор <?php echo $title;?>',
		imageUrl: '/uploads/kits/<?php echo $server_small.'_'.$kit;?>.png?v3',
		imageWidth: 298,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		confirmButtonColor: '#7328a9',
		background: '#15101a',
        text: 'Перед покупкой обязательно очистите свой инвентарь, иначе купленные вещи выпадут на землю!',
	    showCloseButton: true,
		confirmButtonText: 'Купить за <?php echo $cost.' монет'?>'
    }).then((result) => {
        if (result.value) {
		    connect();
            buy_kit('<?php echo $kit;?>');
        }
    })
}
function buy_kit(kit_name) {
	$.ajax({
        url: "/modules/shop/script/buy_kit.php",
		data: {
			kit_name: "<?php echo $kit; ?>",
			server: "<?php echo $server; ?>"
		},
        success: function(html){
			$("#ajax").html(html);
        }
    });
}
</script>
<?php
$s_num = 0; 
$s_num2 = 0;
foreach ($servers as $item) {
	if($item['title']==$server) {
		$s_num++;
	}
}
foreach ($shop['cats']['kits']['kits'] as $item) {
	if($item['id']==$kit) {
		$s_num2++;
	}
}
if($s_num!=1 || $s_num2!=1){
	die('<script>hz();</script>');
} else {
    echo '<script>buy_info_alert();</script>';	
}
?>