<?php
//**ИНИЦИЛИЗАЦИЯ**//
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
//**СКРИПТ**//
echo '<div class="fullnews_craft">
	<div class="full_news_top">
		<div class="news_title">
		<h1>Администрация проекта:</h1>
		</div>
	</div><div style="text-align: center;">
	<a  style="text-decoration: none;">';
foreach ($team['admins']['first_block'] as $admin) {
					if(strlen($admin['name']) > 2){
                   echo' <a href="'.$admin['link'].'" target="_blank" style="text-decoration: none;"><div class="admin_icon" style="'.$admin['style'].'">
                        <img class="avatar_round" src="/modules/lk/uploads/head_128/'.$admin['name'].'.png?'.time().'">
                        <p>'.$admin['title'].'</p>
                        <span>'.$admin['name'].'</span>
                    </div></a>';
					}
}	
echo '<br></a><div class="admins_two_step">';
foreach ($team['admins']['second_block'] as $admin) {
					if(strlen($admin['name']) > 2){
						echo '<a href="'.$admin['link'].'" target="_blank" style="text-decoration: none;">
							<div class="admin_icon" style="'.$admin['style'].'">
								<img class="avatar_round" src="/modules/lk/uploads/head_128/'.$admin['name'].'.png?'.time().'">
								<p>'.$admin['title'].'</p>
								<span>'.$admin['name'].'</span>
							</div>
						</a>';
					}
}
echo '</div></div></div>';
foreach ($servers as $server) {	
    echo '<div class="fullnews_craft">
	<div class="full_news_top">
		<div class="news_title">
		<h1>Модераторский состав сервера: '.$server['title'].'</h1>
		</div>
	</div>
	<div style="text-align: center;">';
	$mysqli_s = new mysqli(DBHOST,DBUSER,DBPASS,$server['db_base']);
	$mysqli_s->set_charset("utf8");
	foreach ($team['staff_groups'] as $group) {	
		$users = $mysqli_s->query("SELECT * FROM `permissions_inheritance` WHERE `parent` LIKE '" . $group['id'] . "' AND `type` = 1 ");
		while($user = $users->fetch_assoc()) {
			$name =  $mysqli->query("select name from dle_users where uuid='".$user['child']."'")->fetch_object()->name;
			if(strlen($name) > 2){
				echo '<div class="moderator_icon" style="'.$group['style'].'">
				<img width="32px" src="https://UniversalStudio.online/modules/lk/uploads/head_128/'.$name.'.png?='.time().'">
				<p>'.$group['title'].'</p>
				<span>'.$name.'</span>
				</div>';
			}
		}
	}
    echo '</div></div>';
}