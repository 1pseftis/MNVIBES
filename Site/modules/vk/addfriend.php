<?php
$arr = explode("\n", $_GET['user_list']);
unset($arr[count($arr)-1]);
if ($_GET['count']==count($arr)) {
	die('Всео :D');
}
if ($_GET['count']== -1) {
echo 'Выполнение 0/'.count($arr);
echo 
'<script>
start(0, '.count($arr).')
</script>
';
} else {
	sleep(1);
	$countee = $_GET['count']+1;
	$s2 = json_decode(file_get_contents( 'https://api.vk.com/method/friends.areFriends?access_token='.$_GET['acess'].'&v=5.15&user_ids='.$arr[$_GET['count']]), true);
	if ($s2['response'][0]['friend_status'] != 0) {
		echo 'Уже добавлен '.$countee.'/'.$_GET['count_all'].' (ID: '.$arr[$_GET['count']].'), ответ сервера: '.$s2['response'][0]['friend_status'];
       echo 
       '<script>
       start('.$countee.', '.$_GET['count_all'].')
      </script>
     ';
		die();
	}
	//if($s2['response'][0]['friend_status'] != 3) {
		//echo $get;
		//die();
	//}
	sleep(rand(1, 4));
	$s = file_get_contents( 'https://api.vk.com/method/friends.add?access_token='.$_GET['acess'].'&user_id='.$arr[$_GET['count']].'&v=5.103&captcha_sid='.$_GET['captcha_sid'].'&captcha_key='.$_GET['captcha_key']);
	//$s = '{"error":{"error_code":14,"error_msg":"Captcha needed","request_params":[{"key":"user_id","value":"545532828"},{"key":"v","value":"5.103"},{"key":"method","value":"friends.add"},{"key":"oauth","value":"1"}],"captcha_sid":"224066635829","captcha_img":"https:\/\/api.vk.com\/captcha.php?sid=224066635829&s=1"}}';
	if (json_decode($s, true)['error']['error_code'] == 14) {
		//$imagedata = file_get_contents(json_decode($s, true)['error']['captcha_img']);
		//$base64 = base64_encode($imagedata);
		//$file_get_contents('https://rucaptcha.com/in.php?key=bac7c6ce686f020cc3d9e1602bf6d124&method=base64&');
        //echo $base64 ;
		die('<img src="'.json_decode($s, true)['error']['captcha_img'].'"><br>
		<input id="captha_key_text"></input><br>
		<a href="#" onclick="captha('.$countee.', '.$_GET['count_all'].', \''.json_decode($s, true)['error']['captcha_sid'].'\')">Продолжить</a>
		');
	}
	echo 'Выполнение '.$countee.'/'.$_GET['count_all'].' (ID: '.$arr[$_GET['count']].'), ответ сервера: '.$s;
echo 
'<script>
start('.$countee.', '.$_GET['count_all'].')
</script>
';
}

//$s = file_get_contents('https://api.vk.com/method/friends.add?access_token='.$_GET['access'].'&user_id='.$_GET['user_id'].'&v=5.103')
//if ($s['response']==1)
	//echo '1';

?>
