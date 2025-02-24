<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
set_time_limit(600);


require '/server/web/modules/vk/vendor/autoload.php';

$rucaptcha = new Rucaptcha\Client(getenv('bac7c6ce686f020cc3d9e1602bf6d124'), [
    'verbose' => 1,
]);

$taskIds = [];

$taskIds[] = $rucaptcha->sendCaptcha(file_get_contents('data/captcha.png'));

$results = [];

while (count($taskIds) > 0) {
    // Try get results
    foreach ($taskIds as $i => $taskId) {
        // Wait 5 sec
        sleep(5);

        $results[$taskId] = $rucaptcha->getCaptchaResult($taskId);

        // false === is not ready or exception on error
        if ($results[$taskId] === false) {
            continue;
        } else {
            unset($taskIds[$i]);
        }
    }
}

print_r($results);
