<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//Inject
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
?>
<script>
function gift_admin_error_code_1() {
    Swal.fire({
        position: 'top',
        title: 'Такой код уже существует',
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
function gift_admin_error_data() {
    Swal.fire({
        position: 'top',
        title: 'Поле дата/кол-во должно содержать целое, положительное число либо 0',
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
function gift_admin_error_noname() {
    Swal.fire({
        position: 'top',
        title: 'Не известная ошибка!',
		text: 'Наебал, известная, но мне лень писать под каждую ошибку сообщения - проверь данные <?php echo $login; ?>',
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
function gift_admin_success() {
    Swal.fire({
        position: 'top',
        title: 'Gift-код добавлен!',
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
//Security
if ($is_admin!=true) { die('Access deny'); }


//Vars
$gift_code = $_POST['gift_code'];
$gift_amount = $_POST['gift_amount'];
$gift_data = $_POST['gift_data'];
$gift_money = $_POST['gift_money'];
$gift_econs = $_POST['gift_econs'];
$gift_cases = $_POST['gift_cases'];

//Function

//Проверка как существование кода
$search_uuid = $mysqli->query("SELECT * FROM `dle_users` WHERE `uuid` LIKE '" . $gift_code . "'");
$count = 0;
while($uuid__ = $search_uuid->fetch_assoc()) {
	$count++;
}
if ($count>0) {
	echo '<script>gift_admin_error_code_1()</script>'; //Такой код уже существует
} else {
	$search_gift = $mysqli->query("SELECT * FROM `flare_gifts` WHERE `code` LIKE '" . $gift_code . "'");
	$count = 0;
	while($s_code = $search_gift->fetch_assoc()) {
		$count++;
	}
	if ($count>0) {
		die('<script>gift_admin_error_code_1()</script>'); //Такой код уже существует
	} 
}

//Проверки на поля
if (!preg_match('/^\+?\d+$/', $gift_amount) || !preg_match('/^\+?\d+$/', $gift_data)) {
    die('<script>gift_admin_error_data()</script>');
}

//Проверка даты
if ($gift_data < time()) {
	die('<script>gift_admin_error_noname()</script>');
}

//Разбираем данные - монеты
if (preg_match('/^\+?\d+$/', $gift_money)) { //Не диапазон
	if ($gift_money != 0 && preg_match('/^\+?\d+$/', $gift_money)) { //Не отключенно
		$give_money = '['.$gift_money.']';
	} elseif ($gift_money == 0) { //Отключенно
		$give_money = 0;
	} else {
		die('<script>gift_admin_error_noname()</script>');
	}
} elseif(stripos($gift_money, '-')) { //Это диапазон
    $give_money_arr = explode('-', $gift_money);
	if (preg_match('/^\+?\d+$/', rtrim($give_money_arr[0])) && preg_match('/^\+?\d+$/', ltrim($give_money_arr[1])) && ltrim($give_money_arr[1]) > rtrim($give_money_arr[0])) { //Проверка на то что в диапазоне числа
	    $give_money = '[' . rtrim($give_money_arr[0]) . ',' . ltrim($give_money_arr[1]) . ']';
	} else {
		die('<script>gift_admin_error_noname()</script>');
	}
} else {
	die('<script>gift_admin_error_noname()</script>');
}
//Разбираем данные - $
if (preg_match('/^\+?\d+$/', $gift_econs)) { //Не диапазон
	if ($gift_econs != 0 && preg_match('/^\+?\d+$/', $gift_econs)) { //Не отключенно
		$give_econs = '['.$gift_econs.']';
	} elseif ($gift_econs == 0) { //Отключенно
		$give_econs = 0;
	} else {
		die('<script>gift_admin_error_noname()</script>');
	}
} elseif(stripos($gift_econs, '-')) { //Это диапазон
    $give_money_arr = explode('-', $gift_econs);
	if (preg_match('/^\+?\d+$/', rtrim($give_money_arr[0])) && preg_match('/^\+?\d+$/', ltrim($give_money_arr[1])) && ltrim($give_money_arr[1]) > rtrim($give_money_arr[0])) { //Проверка на то что в диапазоне числа
	    $give_econs = '[' . rtrim($give_money_arr[0]) . ',' . ltrim($give_money_arr[1]) . ']';
	} else {
		die('<script>gift_admin_error_noname()</script>');
	}
} else {
	die('<script>gift_admin_error_noname()</script>');
}
//Разбираем данные - кейсы
if (preg_match('/^\+?\d+$/', $gift_cases)) { //Не диапазон
	if ($gift_cases != 0 && preg_match('/^\+?\d+$/', $gift_cases)) { //Не отключенно
		$give_cases = '['.$gift_cases.']';
	} elseif ($gift_cases == 0) { //Отключенно
		$give_cases = 0;
	} else {
		die('<script>gift_admin_error_noname()</script>');
	}
} elseif(stripos($gift_cases, '-')) { //Это диапазон
    $give_money_arr = explode('-', $gift_cases);
	if (preg_match('/^\+?\d+$/', rtrim($give_money_arr[0])) && preg_match('/^\+?\d+$/', ltrim($give_money_arr[1])) && ltrim($give_money_arr[1]) > rtrim($give_money_arr[0])) { //Проверка на то что в диапазоне числа
	    $give_cases = '[' . rtrim($give_money_arr[0]) . ',' . ltrim($give_money_arr[1]) . ']';
	} else {
		die('<script>gift_admin_error_noname()</script>');
	}
} else {
	die('<script>gift_admin_error_noname()</script>');
}

//Всё заебись, добавляем купон в БД
$mysqli->query("INSERT INTO `flare_gifts`(`id`, `code`, `date`, `amount`, `money`, `cases`, `econs`, `ip`, `name`, `admin`) VALUES ('0','$gift_code','$gift_data','$gift_amount','$give_money','$give_cases','$give_econs','[]','[]','$login')");
die('<script>gift_admin_success()</script>');
