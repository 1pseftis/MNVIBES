<?php
//DDOS PROTECTION BY FLIPFLARE

function GetIP() {
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

if (file_exists($_SERVER['DOCUMENT_ROOT']. '/modules/ddos/sessions/' . GetIP())) {
	if (file_get_contents($_SERVER['DOCUMENT_ROOT']. '/modules/ddos/sessions/' . GetIP())>=time()) {
		sleep(2);
	} 
}
file_put_contents($_SERVER['DOCUMENT_ROOT']. '/modules/ddos/sessions/' . GetIP(), time()+5);
?>