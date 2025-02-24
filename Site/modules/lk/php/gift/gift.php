<script>
function not_code() {
    Swal.fire({
        position: 'top',
        title: 'Гифт-код не найден либо не активен',
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
function gift_actived_ip() {
    Swal.fire({
        position: 'top',
        title: 'С этого IP код уже активирован',
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
function gift_actived_name() {
    Swal.fire({
        position: 'top',
        title: 'Вы уже активировали этот Gift-код',
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
function gift_get(money, econs, cases) {
    Swal.fire({
        position: 'top',
        title: 'Gift-код активирован',
		text: 'Ваш бонус: '+money+' монет, '+econs+' $, '+cases+' кейсов.',
		showConfirmButton: false,
		showCloseButton: true,
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        type: 'success'
   })
}
</script>
<?php
//Inject
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');

function search_in_array($array , $findme)
{
foreach ($array as $c)
 {
 if (strpos(strtolower($c), strtolower($findme)) !== false )
   return true;
 }
return false;
}

$search_gift = $mysqli->query("SELECT * FROM `flare_gifts` WHERE `code` LIKE '" . $_POST['code'] . "'");
$count = 0;
while($s_code = $search_gift->fetch_assoc()) {
	$count++;
	$gift_data = $s_code['date'];
	$gift_amount = $s_code['amount'];
	$gift_money = json_decode($s_code['money'], true);
	$gift_econs = json_decode($s_code['econs'], true);
	$gift_cases = json_decode($s_code['cases'], true);
	$gift_ip = json_decode($s_code['ip'], true);
	$gift_name = json_decode($s_code['name'], true);
}
if ($count == 1 && $gift_amount>0 && $gift_data>time()) {
	if (search_in_array($gift_name, $login)) { //Name Check
		die('<script>gift_actived_name()</script>');
	} else {
		array_push($gift_name, $login);
		$gift_name = json_encode($gift_name);
		$mysqli->query("UPDATE flare_gifts SET `name`='$gift_name' WHERE code='" . $_POST['code'] . "'");
	}
	if (search_in_array($gift_ip, user_ip())) { //IP Check
		die('<script>gift_actived_ip()</script>');
	} else {
		array_push($gift_ip, user_ip());
		$gift_ip = json_encode($gift_ip);
		$mysqli->query("UPDATE flare_gifts SET `ip`='$gift_ip' WHERE code='" . $_POST['code'] . "'");
	}
	$gift_amount--;
	$mysqli->query("UPDATE flare_gifts SET `amount`='$gift_amount' WHERE code='" . $_POST['code'] . "'");
	
	//Обработка бонуса
	if (count($gift_money) == 2) {//Монеты
		$give_money = $money + rand($gift_money[0], $gift_money[1]);
		$bonus_money = rand($gift_money[0], $gift_money[1]);
	} else {
		if ($gift_money[0] == 0) {
			$give_money = $money;
			$bonus_money = 0;
		} else {
			$give_money = $money + $gift_money[0];
			$bonus_money = $gift_money[0];
		}
	}
	if (count($gift_econs) == 2) {//$
		$give_econs = $econs + rand($gift_econs[0], $gift_econs[1]);
		$bonus_econs = rand($gift_econs[0], $gift_econs[1]);
	} else {
		if ($gift_econs[0] == 0) {
			$give_econs = $econs;
			$bonus_econs = 0;
		} else {
			$give_econs = $econs + $gift_econs[0];
			$bonus_econs = $gift_econs[0];
		}
	}
	if (count($gift_cases) == 2) {//$
		$give_cases = $cases_1 + rand($gift_cases[0], $gift_cases[1]);
		$bonus_cases = rand($gift_cases[0], $gift_cases[1]);
	} else {
		if ($gift_cases[0] == 0) {
			$give_cases = $cases_1;
			$bonus_cases = 0;
		} else {
			$give_cases = $cases_1 + $gift_cases[0];
			$bonus_cases = $gift_cases[0];
		}
	}
	
	//Выдача выигрыша
	$mysqli->query("UPDATE dle_users SET `money`='$give_money' WHERE name='$login'");
	$mysqli->query("UPDATE dle_users SET `econs`='$give_econs' WHERE name='$login'");
	$mysqli->query("UPDATE dle_users SET `cases`='$give_cases' WHERE name='$login'");
	echo '<script>gift_get("'.$bonus_money.'","'.$bonus_econs.'","'.$bonus_cases.'")</script>';
} else {
	echo '<script>not_code()</script>';
}