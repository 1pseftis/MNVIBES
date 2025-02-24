<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
set_time_limit(600);


require '/server/web/modules/vk/vendor/autoload.php';

$rucaptcha = new Rucaptcha\Client(getenv('bac7c6ce686f020cc3d9e1602bf6d124'), [
    'verbose' => 1,
	'key' => 'bac7c6ce686f020cc3d9e1602bf6d124'
]);

$taskIds = [];

$taskIds[] = $rucaptcha->sendCaptcha(file_get_contents(__DIR__.'/data/captcha.png'));

$results = [];

while (true) {
    // Wait 5 sec
    sleep(5);

    $results = $rucaptcha->getCaptchaResultBulk($taskIds);

    if (!in_array(false, $results, true)) {
        break;
    }
}

print_r($results);
