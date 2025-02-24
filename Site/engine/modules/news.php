<?php
if( ! defined( 'DATALIFEENGINE' ) ) {die( "Hacking attempt!" );}

$news = json_decode(file_get_contents('https://api.vk.com/method/wall.get?owner_id=-197044406&count=16&v=5.74&access_token=a2cd35bf1d837f9e20f1887fdb89ec7c9e3d74c2e9f9835ef9dd52e68dfc9b37885b753a588841c9955af'), true)['response'];
print_r($news);
$i = 1;
foreach($news['items'] as $n) {
	$tpl->set('{img}', '/templates/simpleminecraft/images/news/news'.rand(1,4).'.png'); //Картиночка, если атачмен передан нулевой
	$tpl->set('{id}', $i++);
	$tpl->set('{date}', date('d.m.Y в H:i',$n['date']));
	$tpl->load_template('shortstory.tpl'); 
	$tpl->set('{news}', mb_strimwidth($n['text'], 0, 350, "...")); 
	foreach($n['attachments'] as $item) {
		$tpl->set('{img}', $item['photo']['photo_604']); 
	}
    
    if ($item['photo']['photo_604'] == null){
        $tpl->set('{img}', '/templates/simpleminecraft/images/news/news'.rand(1,4).'.png'); //Картиночка, если атачмен передан нулевой
    }
	$tpl->set('{likes}', $n['likes']['count']);
	$tpl->set('{view}', $n['views']['count']);
	$tpl->set('{comment}', $n['comments']['count']);
	$tpl->set('{post}', $n['id']);
	$tpl->compile('content'); 
}

$tpl->clear();

?>