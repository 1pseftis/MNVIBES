<?php

$s = json_decode(file_get_contents('https://api.vk.com/method/wall.get?owner_id=-176990385&count=150&v=5.74&access_token=ce8893ddce8893ddce8893dd0dceeafdddcce88ce8893dd945d938bcc73633ffbd0f2b6'), true)['response']['items'];

$s2 = json_decode(file_get_contents('https://api.vk.com/method/wall.get?owner_id=-132909030&count=150&v=5.74&access_token=ce8893ddce8893ddce8893dd0dceeafdddcce88ce8893dd945d938bcc73633ffbd0f2b6'), true)['response']['items'];

$s3 = json_decode(file_get_contents('https://api.vk.com/method/wall.get?owner_id=-25885216&count=150&v=5.74&access_token=ce8893ddce8893ddce8893dd0dceeafdddcce88ce8893dd945d938bcc73633ffbd0f2b6'), true)['response']['items'];

if ($_GET['type'] == 1) {
preg_match_all("/\[(.+?)\|/", $s[0]['text'], $m);
foreach ( $m[0] as $value ) {
   
   echo str_replace(array( '[id', '|' ), '', $value)."\n";
}
} elseif ($_GET['type'] == 2) {
	foreach ( $s as $value ) {
		if ($value['is_pinned']!=1) {
		    echo $value['from_id']."\n";
		}
	}
	
} elseif ($_GET['type'] == 3) {
	foreach ( $s2 as $value ) {
		if ($value['is_pinned']!=1) {
		    echo $value['from_id']."\n";
		}
	}
	
} elseif ($_GET['type'] == 4) {
	foreach ( $s3 as $value ) {
		if ($value['is_pinned']!=1) {
		    echo $value['from_id']."\n";
		}
	}
	
}
//e