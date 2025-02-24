<script>
function not_case() {
    Swal.fire({
        position: 'top',
        title: 'У вас нет кейсов!',
		showConfirmButton: false,
		showCloseButton: true,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        type: 'error'
   })
}
</script>
<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
$server = $_POST['server'];

use Thedudeguy\Rcon;
$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);
if (!$rcon->connect()) {
    die("<script>not_connect();</script>");
}

/*Проверка человека на сервере*/
if($case_command_online){
	$players = $rcon->CommandRead('online');
			$onlines = explode(':', $players['body']);
			if (strpos($players['body'], ':') !== false){
				$users = explode(', ', $onlines[1]);
				foreach($users as $user){
					$simp = explode('§', $user);
					foreach($simp as $arg){
						$repl = substr($arg, 0, 1);
						$user = str_replace('§'.$repl, '', $user);
					}
					$user = preg_replace('%[^A-Za-zА-Яа-я0-9]%', '', $user);
					$all_users[] = $user;
				}
				if (in_array($login, $all_users)) {
					
				}else{
					die('<script>user_not_found()</script>');
				}
		}else{
				die('<script>user_not_found()</script>');
		}
}


if ($cases_1<1) {
	die('<script>not_case()</script>');
} else {
	$newcase = $cases_1-1;
	$mysqli->query("UPDATE dle_users SET `cases`='$newcase' WHERE name='$login'");
}
$rand = rand(0, count($cases[$server])-1);
$title = $cases[$server][$rand]['title'];
$type = $cases[$server][$rand]['type'];
$data = $cases[$server][$rand]['data'];
$id = $cases[$server][$rand]['id'];
$amount = $cases[$server][$rand]['amount'];
if ($type == 2 || $type == 3) {
	$amount = rand(($amount/2), $amount);
	if ($type == 2) {
		$newecons = $econs+$amount;
		$mysqli->query("UPDATE dle_users SET `econs`='$newecons' WHERE name='$login'");
	} elseif ($type == 3) {
		$newmoney = $money+$amount;
		$mysqli->query("UPDATE dle_users SET `money`='$newmoney' WHERE name='$login'");
	}
} elseif ($type == 1) {
	/*RCON выдача OPEN*/
	
	$command_send = $case_command_give;
	$command_send = str_replace('{username}', $login, $command_send);
	$command_send = str_replace('{item}', $id, $command_send);
	$command_send = str_replace('{data}', $data, $command_send);
	$command_send = str_replace('{amount}', $amount, $command_send);
	file_put_contents($_SERVER['DOCUMENT_ROOT'].'/test.txt', $command_send);
    $rcon->sendCommand($command_send);
	if($command_lng_case){
		$command_send = $command_lng_case;
		$command_send = str_replace('{username}', $login, $command_send);
		$command_send = str_replace('{title}', $title, $command_send);
		$command_send = str_replace('{amount}', $amount, $command_send);
		$rcon->sendCommand($command_send);
	}
	/*RCON выдача CLOSE*/
}

?>          
<script>
function case_give() {
    Swal.fire({
		position: 'top',
        type: 'success',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		imageUrl: '/uploads/shop/items/<?php echo $title;?>.png',
        imageHeight: 70,
        text: 'Вы получили из кейса <?php echo $title;?> (<?php echo $amount;?> шт.)',
	    confirmButtonText: 'Открыть ещё!',
		showCloseButton: true
    }).then((result) => {
        if (result.value) {
            fast_roll();
        }
    })
}
function case_give_e() {
    Swal.fire({
		position: 'top',
        type: 'success',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        text: 'Вы получили из кейса <?php echo $amount;?> $',
	    confirmButtonText: 'Открыть ещё!',
		showCloseButton: true
    }).then((result) => {
        if (result.value) {
            fast_roll();
        }
    })
}
function case_give_m() {
    Swal.fire({
		position: 'top',
        type: 'success',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        text: 'Вы получили из кейса <?php echo $amount;?> монет',
	    confirmButtonText: 'Открыть ещё!',
		showCloseButton: true
    }).then((result) => {
        if (result.value) {
            fast_roll();
        }
    })
}
</script>
<?php
if ($type == 1) {
echo '<script>case_give();</script>';
		  } elseif ($type == 2) {
			  echo '<script>case_give_e();</script>';
		  } elseif ($type == 3) {
			  echo '<script>case_give_m();</script>';
		  }
?>    