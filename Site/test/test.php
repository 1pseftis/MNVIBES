<meta charset="utf-8">
<?PHP
$r = 1546;
while(true){
	if($r != 0){
		if($r / 64 > 1){
			echo "64 <br>";
			$r = $r-64;

		}else{
			echo "$r <br>";
			$r = $r-$r;
			
		}
	}else{
		break;
	}
}

?>