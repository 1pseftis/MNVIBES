<?php
$imagedata = file_get_contents("https://api.vk.com/captcha.php?sid=224066635829&s=1");
             // alternatively specify an URL, if PHP settings allow
$base64 = base64_encode($imagedata);
echo $base64 ;
?>