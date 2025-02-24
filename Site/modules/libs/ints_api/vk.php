<?php
$data = json_decode(file_get_contents('https://api.vk.com/method/groups.getMembers?group_id=154537019&count=16&v=5.74&access_token=ce8893ddce8893ddce8893dd0dceeafdddcce88ce8893dd945d938bcc73633ffbd0f2b6'), true)['response'];
//echo $data['response']['count']; ['response']
$data['count'] = '1956';
echo $data['count'];