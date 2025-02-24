<?php
if( !defined( 'BLOCKSHOP' ) ) {
die('Нельзя так!');
}
if($username){
if(isset($_POST['buy'])){
$error = false;
if(!preg_match("|^[\d]+$|",$_POST['amount']) OR $_POST['amount'] == '0' OR $_POST['amount'] > 128 OR !preg_match("|^[\d]+$|",$_POST['buy'])
) $error = true;
if($error) {$message = "<div class='warningbad'>Неверно введено количество предметов!<br>Допустимые значения от 1 до 128 шт!</div>";file_put_contents('logs/error.txt',$log_date . "Некорректный ввод данных!\n",FILE_APPEND);} else {
	$query =  mysqli_query("SELECT * FROM `{$btable}` WHERE `id`='{$_POST['buy']}';"); ///не волнуйтесь, запрос безопасен///
	$rows = mysqli_num_rows($query);
	if($rows == 0) {$message = "<div class='warningbad'>Данный блок отсутствует в продаже!</div>";file_put_contents('logs/error.txt',$log_date . "Покупка вымышленного блока\n",FILE_APPEND);
	} else {
		$q = mysqli_query("SELECT * FROM `{$bico}` WHERE `name`='{$username}';");
        if (mysqli_num_rows($q) == 0 ) {mysqli_query("INSERT INTO `{$bico}`(name`,`money`) VALUES ('{$username}','1000');"); $q = mysqli_query("SELECT * FROM `{$bico}` WHERE `name`='{$username}';");}
		$user = mysqli_fetch_assoc($q);
		$result = mysqli_fetch_assoc($query);
		$price = $result['price']*$_POST['amount'];
		$amount = $result['amount']*$_POST['amount'];
		///скидки (удалите если не нужно)///
		if($amount > 63) {$price = round($price*0.95);$skidka = 'Скидка <b>5%</b>.';}
		if($result['action'] !== '0') {$action=1-$result['action']/100;$price = round($price*$action);$skidka = 'Скидка <b>'.$result['action'].'%</b>.';}
		///сопоставление баланса с ценой///
		if($user['money'] >= $price) {
		$now = $user['money'] - $price;
		$time=time();
		$time1=$time+10;
		mysqli_query("UPDATE `{$bico}` SET `money`='{$now}' WHERE `name`='{$username}';");
		if(mysqli_num_rows(mysqli_query("SELECT id from `{$result['server']}` where `nickname`='{$username}' and `name`='{$result['name']}'")) == 1) {
		mysqli_query("UPDATE `{$result['server']}` set `item_amount`= item_amount + {$amount} where `nickname`='{$username}' and `item_id`='{$result['block_id']}'");
		} else {
		mysqli_query("INSERT INTO `{$result['server']}`(`id`,`nickname`,`item_id`,`item_amount`, `img`, `name`) VALUES (NULL, '{$username}','{$result['block_id']}','{$amount}', '{$result['image']}', '{$result['name']}');");}
		$message = "<div class='warninggood'>Вы совершили покупку предмета <b>\"{$result['name']}\"</b> в количестве <b>{$amount}</b> шт. за <b>{$price}</b> рублей.<br>{$skidka}Ваш текущий баланс <b>\"{$now}\"</b> рублей</div>";
		file_put_contents('logs/log.txt',$log_date . "Блок \"{$result['name']}\", кол-во {$amount} шт, цена {$price} рублей, сервер {$result['server']}.\n",FILE_APPEND);
		} else {$message = "<div class='warningbad'>У Вас не хватает денег на счету для выполнения данной операции!<br/></div>";}
	}
  }
  }
////админка///
if($group == 1){
	///редактирование блока
	if (isset($_POST['edit'])) {
		///массив изображений блоков
		$error = false;
		$files = scandir('images/'); 
		for($i=2; $i < sizeof($files); $i++){$imglist .= '<div id="ach"><input type=radio name="image" id="'.$files[$i].'" value="'.$files[$i].'" onChange="javascript: doIcon( this.value );"><label for="'.$files[$i].'"><img src="'.$dir.'images/'.$files[$i].'"></label></div>';}
		///построение списка серверов
		for($i = 0, $size = count($s); $i < $size; ++$i) {$opt .='<option value="'.$s[$i].'">'.$s[$i].'</option>';}
		if(!preg_match("|^[\d]+$|",$_POST['edit'])) $error = true;
		if($error){$message = "<div class='warningbad'>Неверно заполнено одно из полей!</div>";} else {
		///определение значений добавления/редактирования блоков
		if(!isset($_POST['add'])){
		$que = mysqli_query("SELECT * FROM {$btable} where id='{$_POST['edit']}'");
		while($res = mysqli_fetch_array($que)) {$f1 = '<div id="img_box" style="width: 36px;height:36px;background-image: url('.$dir.'images/'.$res['image'].'); background-position: 50% 50%; background-repeat: no-repeat no-repeat;"></div><input type=hidden id="b1" name="image" value="'.$res['image'].'" style="display:none">';$f2 = $res['block_id'];$f3 = $res['name'];
		$f4 = $res['amount'];$f5 = $res['price'];$f6 = $res['id'];$f7 = $res['action'];$f8 = '<option value="'.$res['server'].'" CHECKED>Сейчас '.$res['server'].'</option>';}
		} else { $f1 = '<div id="img_box" style="width:36px;height:36px;background-image: url('.$dir.'images/1.png);"></div><input type=hidden id="b1" name="image" value="1.png" style="display:none">';$f6 = "0";$f7 = "0";}
		///вывод формы добавления/редактирования///
		$content.='<form method="post"><center><p>Выберите картинку блока:<br><div class="slider"><div class="sliderContent"><div class="item">'.$imglist.' </div></div></div><br>Текущая картинка блока:<br>'.$f1.'
		<div class="field">
		ID блока:<br /><input type="text" class="form" pattern="[0-9\.\:]*" name="block_id" value="'.$f2.'" required><br />
		Название:<br /><input type="text" class="form" name="imya" value="'.$f3.'" required><br />
		</div><div class="field">
		Количество:<br /><input type="number" class="form" pattern="[0-9]*" name="amount" onkeyup="this.value=this.value.replace(/[^\d\.]+/g,\'\');" value="'.$f4.'" required><br />
		Сервер:<br /><select name="server" class="form">'.$f8.$opt.'</select><br>
		</div><div class="field">
		Цена:<br /><input type="number" class="form" pattern="[0-9]*" name="price" value="'.$f5.'" required><br />
		Скидка:<br /><input type="number" class="form" name="action" value="'.$f7.'"><br><br></div>
		<button type="submit" name="mid" value="'.$f6.'" class="btn-shop">Сохранить</button></p></center></form>';
		}
	}
	///добавление и редактирование блока///
	if (isset($_POST['mid'])) {
        $error = false;
		if(!preg_match("|^[\d]+$|",$_POST['price']) or !preg_match("|^[\d]+$|",$_POST['mid']) or !preg_match("|^[\d]+$|",$_POST['action']) or $_POST['action'] < 0 or $_POST['action'] > 99 or !preg_match("|^[\d]+$|",$_POST['amount']) or $_POST['amount'] < 1) $error=true;
		if(!in_array($_POST['server'],$s) or !preg_match("|^([0-9\.\:]{1,8})$|is",$_POST['block_id']) or !file_exists($dir.'images/'.$_POST['image']) or empty($_POST['image']) or $_POST['image'] != mysqli_real_escape_string($_POST['image']) or $_POST['imya'] != mysqli_real_escape_string($_POST['imya'])) $error = true;
		if($error){$message = "<div class='warningbad'>В полях ввода обнаружены запрещенные символы!</div>";} else {
		 if($_POST['mid'] != 0){
		  mysqli_query("UPDATE `{$btable}` SET `image`='{$_POST['image']}', `block_id`='{$_POST['block_id']}', `amount`='{$_POST['amount']}', `price`='{$_POST['price']}', `name`='{$_POST['imya']}', `action`='{$_POST['action']}', `server`='{$_POST['server']}' WHERE `id`='{$_POST['mid']}';");
          $message = "<div class='warninggood'>Вы успешно отредактировали блок под ID: ".$_POST['block_id']."</div>";
		  file_put_contents('logs/admin.txt',$log_date . "Отредактирован блок под id: {$_POST['block_id']}.\n",FILE_APPEND);} else {
		  mysqli_query("INSERT INTO `{$btable}` (`image`,`block_id`,`amount`,`price`, `name`, `action`, `server`) VALUES ('{$_POST['image']}', '{$_POST['block_id']}', '{$_POST['amount']}', '{$_POST['price']}', '{$_POST['imya']}', '{$_POST['action']}', '{$_POST['server']}');");
          $message = "<div class='warninggood'>Вы успешно добавили блок под ID: ".$_POST['block_id']."</div>";
		  file_put_contents('logs/admin.txt',$log_date . "Добавлен блок под id: {$_POST['block_id']}.\n",FILE_APPEND);}
		}
	}
	///удаление блока
	if(isset($_POST['del'])) {
        $error = false;
        if(!preg_match("|^[\d]+$|",$_POST['del'])) $error = true;
        if($error){$message = "<div class='warningbad'>Обнаружены некорректные символы!</div>";} else {
            mysqli_query("DELETE FROM `{$btable}` WHERE `id`='{$_POST['del']}';");
			$message = "<div class='warninggood'>Блок успешно удален!</div>";
			file_put_contents('logs/admin.txt',$log_date . "Удален блок под id: {$_POST['del']}.\n",FILE_APPEND);}
	}
	}
}else{$message = "<div class='warningbad'>Авторизируйся, лошпидза!<br/></div>";}
?>