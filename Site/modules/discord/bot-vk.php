<?php
$online = file_get_contents('https://six.u-studio.su/modules/lk/php/mon/discord/online.txt');
$recordday = file_get_contents('https://six.u-studio.su/modules/lk/php/mon/discord/recordday.txt');
$status = urlencode('Начинай игру вместе с нами | Общий онлайн: '.$online.' | Рекорд за сегодня: '.$recordday);
file_get_contents('/server/web/modules/discord/vk_mon.txt');
if ('/server/web/modules/discord/vk_mon.txt'!=$online) {
    file_get_contents('https://api.vk.com/method/status.set?group_id=154537019&v=5.103&access_token=5c6d0e05db707efd3bca80d97e5cc015ecaa3b602caa0bdf932737cca82bf8299940100aa97a91e66f955&text='.$status);
	file_put_contents('/server/web/modules/discord/vk_mon.txt', $online);
}