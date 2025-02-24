<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
//Code
$unban_cost = $unban_data['cost'] + $unban_data['cost_plus']*$unban;
if ($baned == 'yes') {
    echo '<div class="outline-block p-3 rounded text-center mb-2">
          Покупка разбана для вас на серверах стоит: <b>'.$unban_cost.' рублей</b>
          </div>
          <div class="bg-gradient rounded p-3 text-white">
          <div class="col-md-12 text-center">
          <input type="hidden" name="unban_buy"><button onclick="unban()" class="btn btn-rounded btn-outline-white">Приобрести платный разбан</button>
          </div>
          </div>';
} else {
	echo '<div class="outline-block p-3 rounded text-center mb-2">
          Вы не забанены ни на одном из серверов';
}
?>
<script>
function unban() {
    Swal.fire({
        position: 'top',
        title: 'Вы уверены?',
        text: "Что хотите приобрести разбан за <?php echo $unban_cost.' RUB'?>",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#35D59D',
        cancelButtonColor: '#2e3356',
        cancelButtonText: 'Отмена',
        confirmButtonText: 'Да, купить за <?php echo $unban_cost.' RUB'?>'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: "/modules/lk/api/unban/buy.php",
                type: "POST",
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
                cancelButtonColor: '#2e3356',
            })
        }
    })
}
</script>