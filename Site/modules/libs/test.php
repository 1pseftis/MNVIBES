<?php
$curl = curl_init('https://edge.qiwi.com/payment-history/v2/persons/79132632836/payments?rows=50&operation=IN&sources=QW_RUB');
$headers = array(
	'Accept: application/json',
	'Authorization: Bearer f9b90f171ece519f168f85f1268e20e2 ',
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
$data = json_decode($response, true);
$val=0;
foreach ($data['data'] as $value) {
	if ($data['data'][$val]['provider']['id'] == 7) {
		if ($data['data'][$val]['comment'] != '') {
	        echo $data['data'][$val]['sum']['amount'].',';
		}
    }
    $val++;
};
//curl_setopt($ch, CURLOPT_URL,"https://edge.qiwi.com/payment-history/v2/persons/79132632836/payments?rows=50");
//print_r($response);