<?php
if (date('m')!=file_get_contents('data.falre')) {
	$votes_list=$mysqli->query("SELECT * FROM `dle_users` WHERE `votes` != 0 ORDER BY `votes` DESC");
	$num = 0;
	while($votes_list_num = $votes_list->fetch_assoc()) {
		$num++;
		$cases_1 =  $mysqli->query("select cases from dle_users WHERE name='".$votes_list_num['name']."' LIMIT 1")->fetch_object()->cases;
		$money =  $mysqli->query("select money from dle_users WHERE name='".$votes_list_num['name']."' LIMIT 1")->fetch_object()->money;
        $econs =  $mysqli->query("select econs from dle_users WHERE name='".$votes_list_num['name']."' LIMIT 1")->fetch_object()->econs;
		if ($num == 1) {
			$newmoney = $money + 300; 
			$newecons = $econs + 300000; 
			$newcases = $cases_1 + 30; 
			$mysqli->query("UPDATE dle_users SET `money`='$newmoney' WHERE name='".$votes_list_num['name']."'");
			$mysqli->query("UPDATE dle_users SET `econs`='$newecons' WHERE name='".$votes_list_num['name']."'");
			$mysqli->query("UPDATE dle_users SET `cases`='$newcases' WHERE name='".$votes_list_num['name']."'");
		} elseif ($num == 2) {
			$newmoney = $money + 200; 
			$newecons = $econs + 200000; 
			$newcases = $cases_1 + 20; 
			$mysqli->query("UPDATE dle_users SET `money`='$newmoney' WHERE name='".$votes_list_num['name']."'");
			$mysqli->query("UPDATE dle_users SET `econs`='$newecons' WHERE name='".$votes_list_num['name']."'");
			$mysqli->query("UPDATE dle_users SET `cases`='$newcases' WHERE name='".$votes_list_num['name']."'");
		} elseif ($num == 3) {
			$newmoney = $money + 100; 
			$newecons = $econs + 100000; 
			$newcases = $cases_1 + 10; 
			$mysqli->query("UPDATE dle_users SET `money`='$newmoney' WHERE name='".$votes_list_num['name']."'");
			$mysqli->query("UPDATE dle_users SET `econs`='$newecons' WHERE name='".$votes_list_num['name']."'");
			$mysqli->query("UPDATE dle_users SET `cases`='$newcases' WHERE name='".$votes_list_num['name']."'");
		}
		$mysqli->query("UPDATE dle_users SET `votes`='0' WHERE name='".$votes_list_num['name']."'");
	}
	file_put_contents('data.falre', date('m'));
}