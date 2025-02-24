<?php
//Vars
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
//Code
$_GET['amount'] = str_replace('-', '', $_GET['amount']);

if (!is_numeric($_GET['id'])) {
	exit('Ошибка');
}

if (!is_numeric($_GET['amount'])) {
	exit('Ошибка');
}

if ($_GET['amount'] > 0) {
	
}else{
	exit('Ошибка');
}

$s_num = 0;
foreach ($servers as $server) {
	if($server['title']==$_GET['server']) {
		$s_num++;
	}
}
if($s_num!=1){
	die('<script>hz()</script>');
}
if ($_GET['ptype'] == 'price_v') {
	$cost = $mysqli->query("SELECT price_v FROM `flare_shop` WHERE `id` = ".$_GET['id'])->fetch_object()->price_v;
} else {
	$cost = $mysqli->query("SELECT price FROM `flare_shop` WHERE `id` = ".$_GET['id'])->fetch_object()->price;
}
$title = $mysqli->query("SELECT name FROM `flare_shop` WHERE `id` = ".$_GET['id'])->fetch_object()->name;
$i_id = $mysqli->query("SELECT * FROM `flare_shop` WHERE `id` = ".$_GET['id'])->fetch_object();
$amount2 = $mysqli->query("SELECT amount FROM `flare_shop` WHERE `id` = ".$_GET['id'])->fetch_object()->amount;
if($cost<1){
	die('<script>hz()</script>');
}
?>
<script>
function buy_item_swal() {
    Swal.fire({
        position: 'top',
        type: 'success',
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		confirmButtonColor: '#7328a9',
		background: '#15101a',
		position: 'top',
		animation: false,
        text: 'Покупка успешно совершенна',
        showConfirmButton: false,
        timer: 1500
    })
}
function error_amount() {
    Swal.fire({
        position: 'top',
        type: 'error',
		customClass: {
            popup: 'animated fadeInDown faster'
         },
		confirmButtonColor: '#7328a9',
		background: '#15101a',
		position: 'top',
		animation: false,
        text: 'Нельзя указывать отрицательные и 0 числа.',
        showConfirmButton: false,
        timer: 4500
    })
}
</script>
<?php
if ($_GET['ptype'] == 'price_v') {
	$p_text = 'голосов';
} else {
	$p_text = 'монет';
}
$cost2 = ceil($_GET['amount']/$amount2*$cost);
if ($_GET['ptype'] == 'price_v') {
	if ($votes<$cost2)
		die('<script>ex_minus()</script>');
} else {
	if ($money<$cost2)
		die('<script>ex_minus()</script>');
}
	print_r($_GET['amount']);
	if($_GET['amount'] < 1){
		die('<script>error_amount();</script>');
	}
	
	/*Подключение к RCON*/
	$server = $_GET['server'];
	use Thedudeguy\Rcon;
	$rcon = new Rcon($servers[$server]['rcon_host'], $servers[$server]['rcon_port'], $servers[$server]['rcon_password'], $servers[$server]['rcon_timeout']);
	if (!$rcon->connect()) {
		die("<script>not_connect();</script>");
	}
	/*Проверка человека на сервере*/
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
	
	if ($_GET['ptype'] == 'price_v') {
		$p_text = 'голосов';
		$newbal= $votes-$cost2;
	    $setmoney = $mysqli->query("UPDATE dle_users SET `votes`='$newbal' WHERE name='$login'");
	} else {
		$p_text = 'монет';
		$newbal= $money-$cost2;
	    $setmoney = $mysqli->query("UPDATE dle_users SET `money`='$newbal' WHERE name='$login'");
	}
	if($setmoney){
	
		//print_r($i_id);
		$amount_item = $_GET['amount'];
		$command_send = $i_id->block_command;
		$command_send = str_replace('{username}', $login, $command_send);
		$command_send = str_replace('{block_id}', $i_id->block_id, $command_send);
		$command_send = str_replace('{data}', $i_id->block_data, $command_send);
		
		if($amount_item > 64){
			while($amount_item != 0){
			if($amount_item != 0){
					if($amount_item / 64 > 1){
						/*Действие*/
						$command_send_b = str_replace('{amount}', 64, $command_send);
						$rcon->sendCommand($command_send_b);
						/*Действие*/
						$amount_item = $amount_item-64;

					}else{
						/*Действие*/
						$command_send_b = str_replace('{amount}', $amount_item, $command_send);
						$rcon->sendCommand($command_send_b);
						/*Действие*/
						$amount_item = $amount_item-$amount_item;
						
					}
				}else{
					break;
				}
			}
		}else{
			$command_send_b = str_replace('{amount}', $amount_item, $command_send);
			$rcon->sendCommand($command_send_b);
		}
		
		//$mysqli->query("INSERT INTO `".$_GET['server']."`(`id`, `item_id`, `nickname`, `item_amount`) VALUES ('0','$i_id','$login','".$_GET['amount']."')");
		$mysqli->query("INSERT INTO `flare_history`(`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES ('0','$login','$server','6','".$_GET['amount']." штук','".time()."','Покупка <b>".$title."</b> на сервере <b>".$_GET['server']."</b> за $cost2 $p_text')");
		die('<script>buy_item_swal();</script>');
	}