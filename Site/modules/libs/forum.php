<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');

//**СКРИПТ**//
//Соединение с БД
$mysqli = new mysqli(DBHOST,DBUSER,DBPASS,'forum');
$mysqli->set_charset("utf8");
$forum = $mysqli->query("SELECT * FROM `forum_forums_posts` ORDER BY post_date DESC LIMIT 5");
$i=1;
while($post = $forum->fetch_assoc()) {
	$i++;
	if ($i = 1)
        $author_1 = $post['author_name'];
}
  $url = 'http://88.99.154.79/forum/index.php?/rss/1-api.xml';
  $content = file_get_contents($url); 

  $items = new SimpleXmlElement($content);
  $i = 0;
  foreach($items -> channel -> item as $item) {
	$i++;
	if ($i<6) {
    echo '<div class="total_online_block">
        <div class="information_v2">
            <b>Экономика Galaxy  </b>
            <span>Автор: ff, 41 минуту назад в Экономика</span>
			<a href="/download">Читать</a>
        </div>
    </div>';
	}
  }

?>