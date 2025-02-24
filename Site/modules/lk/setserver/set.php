<?php
$login = $_POST['login'];
$result = $_POST['result'];
$hash = $_POST['hash'];
$mysqli = new mysqli('localhost','root','zvwdE-UxnE9-P4etr-hgpyR','core');
$test=$mysqli->query("SELECT `hash` FROM `dle_users` WHERE `name` LIKE '$login'")->fetch_object()->hash; 
if ($test == $hash && $hash != '') {
$mysqli->query("UPDATE dle_users SET `defserv`='$result' WHERE name='$login'"); 
if($result == 'galaxy') $server = 'Galaxy';
if($result == 'terrafirm') $server = 'TerraFirm';
if($result == 'technomagic') $server = 'TechnoMagic';
} else {
    echo "Ошибка хеша - обновите страницу!";
	exit();
}
?> 
<script>
function exterioreset()
{
swal({
  title: 'Сервер <?php echo $server;?> успешно выбран!',
  showConfirmButton: false,
  background: '#15101a',
  showCloseButton: true,
  timer: 3000,
  confirmButtonColor: "#433354"
})
}
</script>
<?php
echo "<script>exterioreset();</script>";
?>