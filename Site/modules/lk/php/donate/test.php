<?PHP
header('Content-Type: text/html; charset=utf-8');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
use Thedudeguy\Rcon;
$rcon = new Rcon('144.76.36.221', '25571', '', 3);
if (!$rcon->connect()) {
    die("<script>not_connect();</script>");
}
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
?>