<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/config.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/lk/api/mysql.php');
//Vars
$case = $_POST['casee'];
$server = $_POST['server'];
?>
<script>
function free_case() {
    Swal.fire({
        position: 'top',
        title: 'Выдать бесплатный ежедневный кейс?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#35D59D',
        cancelButtonColor: '#2e3356',
        cancelButtonText: 'Отмена',
        confirmButtonText: 'Да!'
    }).then((result) => {
        if (result.value) {
			connect();
            $.ajax({
                url: "/modules/lk/api/case/give.php",
                type: "POST",
		        data: {
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
                timer: 1500,
                confirmButtonColor: '#35D59D',
                cancelButtonColor: '#2e3356'
            })
        }
    })
}
function buy_case_2() {
    Swal.fire({
        position: 'top',
        title: 'Сколько кейсов данного типа вы хотели бы приобрести?',
        input: 'number',
        inputValue: '1',
        confirmButtonColor: '#35D59D',
        cancelButtonColor: '#2e3356',
        cancelButtonText: 'Отмена',
        confirmButtonText: 'Далее',
        showCancelButton: true,
        inputValidator: (value) => {
	        if ((!value) || (value > 100) || (value < 1)) {
                return 'Можно использовать только целые числа от 1 до 100!'
            } else {
		        $.ajax({
                    url: "/modules/lk/api/case/dialog2.php",
                    type: "POST",
		            data: {
						casee:'<?php echo $case; ?>',
		                amount:value,
		                server:'<?php echo $server; ?>'
		            },
                    success: function(html){
					    $("#ajax").html(html);
                    }
                });
	        }
        } 
    })
}
</script>
<?php
//Code
if ($cases[$server][$case]['title'] == $everyday_case_name) {
			if (time() > $everyday_case) {
			    die('<script>free_case()</script>');
			} else {
			    die('<script>buy_case_2()</script>');	
			}
		} else {
			die('<script>buy_case_2()</script>');	
		}
?>