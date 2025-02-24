<?php 
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');

$server =  $_GET['shop_server']; 

$query = $mysqli->query("SELECT * FROM flare_regions");
?>

<style>
.flareinput {
    color: 
    #828282;
    font-family: 'FSElliotPro';
    font-size: 16px;
}
</style>
<script>	
var biome;
function rg_info(id, name, img, cost, size) {
    Swal.fire({
        position: 'top',
		width: '800px',
		imageUrl: '/modules/shop/regions/uploads/<?php echo $server; ?>/'+img,
		imageWidth: '45%',
        title: name,
		html: 'Цена: '+cost+'<br>'+
		      'Размер: '+size+'<br>'+
		      '<br>'+	  
		      '<a onclick="tp_rg(\''+id+'\')" class="smcui-button" onclick="showPayments(); return false;"><span class="masha_index masha_index6" rel="6"></span>Телепортироваться к региону</a>'+
		      '<a onclick="buy_rg_step_1(\''+id+'\', \''+name+'\')" class="smcui-button" onclick="showPayments(); return false;"><span class="masha_index masha_index6" rel="6"></span>Арендовать</a>',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        showConfirmButton: false,
		showCloseButton: true,
    })
}
function biome_rg(rg_id, name) {
swal.fire({
    position: 'top',
    title: 'Выберите биом',
    input: 'select',
    animation: false,
	confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
    cancelButtonText: 'Отмена',
    confirmButtonText: 'Далее',
    inputOptions: {
        <?php
	    foreach ($shop['cats']['rg']['biomes'] as $biome) {
            echo  "'".$biome['id']."': '".$biome['title']."',";
        }
	    ?>
    },
    showCancelButton: true,
    inputValidator: (value) => {
   $.ajax({
        url: "/modules/shop/regions/biome.php",
		data: {
			rg_id: rg_id,
			biome, value,
			server: '<?php echo $server; ?>'
		},
        success: function(html){
			$("#ajax").html(html);
        }
      });	   
    }
})
}
function addmember(id, name) {
    Swal.fire({
        position: 'top',
        title: name,
		html: '<input class="swal2-input flareinput" placeholder="Ник игрока" id="add_member_nick" type="text">'+	
		      '<a onclick="addmember_script(\''+id+'\', \''+name+'\')" class="smcui-button" onclick="showPayments(); return false;"><span class="masha_index masha_index6" rel="6"></span>Добавить</a>',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        showConfirmButton: false,
		showCloseButton: true,
    })
}
function remmember(id, name, member) {
    Swal.fire({
        position: 'top',
        title: name,
		html: 	
		      '<a onclick="remmember_script(\''+id+'\', \''+member+'\')" class="smcui-button" onclick="showPayments(); return false;"><span class="masha_index masha_index6" rel="6"></span>Удалить '+member+' из региона</a>',
		confirmButtonColor: '#7328a9',
		cancelButtonColor: '#2e3356',
		background: '#15101a',
		animation: false,
		customClass: {
            popup: 'animated fadeInDown faster'
         },
        showConfirmButton: false,
		showCloseButton: true,
    })
}
function tp_rg(rg_id, name) {
    $.ajax({
        url: "/modules/shop/regions/tp.php",
		data: {
			rg_id: rg_id,
			name: name,
			server: '<?php echo $server; ?>'
		},
        success: function(html){
			$("#ajax").html(html);
        }
    });
}
function buy_rg_step_1(rg_id) {
    $.ajax({
        url: "/modules/shop/regions/setperiod.php",
		data: {
			rg_id: rg_id,
			server: '<?php echo $server; ?>'
		},
        success: function(html){
			$("#ajax").html(html);
        }
    });
}

function addmember_script(rg_id, member) {
	var add_member0 = document.getElementById("add_member_nick");
    var add_member = add_member0.value;
    $.ajax({
        url: "/modules/shop/regions/members/add.php",
		data: {
			rg_id: rg_id,
			add_member, add_member,
			server: '<?php echo $server; ?>'
		},
        success: function(html){
			$("#ajax").html(html);
        }
    });
}
function remmember_script(rg_id, rem_member) {
    $.ajax({
        url: "/modules/shop/regions/members/rem.php",
		data: {
			rg_id: rg_id,
			rem_member, rem_member,
			server: '<?php echo $server; ?>'
		},
        success: function(html){
			$("#ajax").html(html);
        }
    });
}
</script>					
					
<div class="full_news_content">
        <div class="news_text" style="display: inline-block; padding: 34px 34px 0 34px; width: 672px;" id="contentPage">

            <div style="margin-bottom: 44px;">
                <h3 class="shop_category_title" style="display: inline-block; float: left;"> Свободные участки города <?php echo $server; ?></h3>
                <a onclick="select_cat('rg');" style="display: inline-block; float: right;"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-right: 10px;"></i><b>Выбрать другой сервер</b></a>
            </div>
     
<div class="mods">

<?php
$array = array();
while($item = $query->fetch_array()) {
   array_push($array, $item['name']);
}
foreach ($shop['cats']['rg']['regions'][$server] as $region) {
$cost_text = $region['cost_money'].' монет или '.$region['cost_econs'].' эконов в неделю';
if (!in_array($region['region'], $array)) {
echo '
<div class="mod">

                    <a href="#" onclick="rg_info(\''.$region['region'].'\', \''.$region['title'].'\', \''.$region['img'].'\', \''.$cost_text.'\', \''.$region['size'].'\')">
                        <div class="mod_icon">
                            <img src="/modules/shop/regions/uploads/'.$server.'/'.$region['img'].'">
                        </div>
                        <h3><span class="masha_index masha_index11" rel="11"></span>'.$region['title'].' (Подробнее)</h3>
                    </a>

                    <div class="mod_details">

                        <div class="addons">
						    <span class="addon"><a><h4><span class="masha_index masha_index14" rel="14"></span>Цена: '.$cost_text.'</h4></a></span><br><br>
                                                </div>
                    </div>
                </div>';
}
}				
?>
            </div>
                            
        
		<div style="margin-bottom: 44px;">
                <h3 class="shop_category_title" style="display: inline-block; float: left;"> Арендованные участки города <?php echo $server; ?></h3>
        </div>
		<div class="mods">
<?php
$query2 = $mysqli->query("SELECT * FROM flare_regions");
while($item = $query2->fetch_array()) {
echo '
<div class="mod">

                    <a>
                        <div class="mod_icon">
                            <img src="/modules/shop/regions/uploads/'.$server.'/'.$shop['cats']['rg']['regions'][$server][$item['name']]['img'].'">
                        </div>
                        <h3><span class="masha_index masha_index11" rel="11"></span> '.$shop['cats']['rg']['regions'][$server][$item['name']]['title'].'</h3>
                    </a>

                    <div class="mod_details">

                        <div class="addons">
						    <span class="addon"><a><h4><span class="masha_index masha_index14" rel="14"></span>Владелец: '.$item['owner'].'</h4></a></span><br><br>
							<span class="addon"><a><h4><span class="masha_index masha_index14" rel="14"></span>Аренда истекает: '.date('d.m.Y в H:i', $item['arenda']).'</h4></a></span><br><br>
                                                </div>
                    </div>
                </div>';
}
?>
</div>
</div>
<?php
$query_u = $mysqli->query("SELECT * FROM `flare_regions` WHERE `server` LIKE '$server' AND `owner` LIKE '$login' ");
while($item = $query_u->fetch_array()) {
    $rg_owner = true;
	$rg_name = $shop['cats']['rg']['regions'][$server][$item['name']]['title'];
	$rg_arenda = date('d.m.Y в H:i', $item['arenda']);
	$rg_regen = date('d.m.Y в H:i', ($item['arenda']+86400*3));
	$rg_id = $item['name'];
	$rg_biome = $item['biome'];
	$rg_arenda_unix = $item['arenda'];
	$rg_members = json_decode($item['members']);
}
if ($rg_owner === true) {
echo '
<div class="server_details">
            <div class="information_block" style="margin-right: 34px;">
                <span style="width: 600px"><span class="masha_index masha_index5" rel="5"></span>Управление регионом: '.$rg_name.'</span>

                <table>
                    <tbody><tr>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td class="icon"><i class="fa fa-code-fork" aria-hidden="true"></i></td>
                        <td><span class="masha_index masha_index6" rel="6"></span>Аренда истекает: <b onclick="buy_rg_step_1(\''.$rg_id.'\', \''.$rg_name.'\')">';
if ($rg_arenda_unix<time()) {
	echo ' Продлите аренду!!! (Иначе регион будет регенирирован)</b>';
} else {
	echo $rg_arenda. ' (Продлить)</b>';
}			
echo '</td>
                    </tr>
                    <tr>
                        <td class="icon"><i class="fa fa-globe" aria-hidden="true"></i></td>
                        <td><span class="masha_index masha_index7" rel="7"></span>Телепортироваться к региону: <b onclick="tp_rg(\''.$rg_id.'\')">Телепортироваться</b></td>
                    </tr>';
					/*<tr>
                        <td class="icon"><i class="fa fa-tree" aria-hidden="true"></i></td>
                        <td><span class="masha_index masha_index7" rel="7"></span>Сменить биом: <b>';
						if ($rg_biome == '') {
							echo 'Стандартный';
						}
						echo '</b> <b onclick="biome_rg(\''.$rg_id.'\', \''.$rg_name.'\')">(Сменить?)</b></td>
                    </tr>*/
                    echo '<tr>
                        <td class="icon"><i class="fa fa-users" aria-hidden="true"></i></td>
                        <td><span class="masha_index masha_index8" rel="8"></span>Участники: ';
$array_num = 0;
foreach ($rg_members as $member) {
	$array_num++;
	echo '<a onclick="remmember(\''.$rg_id.'\', \''.$rg_name.'\', \''.$member.'\')">'.$member.'</a>';
	if ($array_num<count($rg_members)) {
		echo ', ';
	}
}
						
						echo '<b onclick="addmember(\''.$rg_id.'\')">';
						echo ' (добавить)</b></td>
                    </tr>
                    <tr>
                        <td class="icon"><i class="fa fa-recycle" aria-hidden="true"></i></td>
                        <td><span class="masha_index masha_index9" rel="9"></span>Регенирировать участок: <b onclick="regen(\''.$rg_id.'\')">Регенирировать</b></td>
                    </tr>
                </tbody></table>
            </div>
        </div>
    </div>';
}
?>
<div class="news_text" style="display: inline-block; padding: 34px 34px 0 34px; width: 672px;" id="contentPage">
<div style="margin-bottom: 44px;">
                <h3 class="shop_category_title" style="display: inline-block; float: left;"> Очередь на реген регионов <?php echo $server; ?></h3>
        </div>
		</div>
<div class="news_text" style="padding: 34px 34px 26px 26px;">
    <center>
        <table class="tbl" width="678px" cellspacing="10" cellpadding="3">
            <thead>
            <tr class="label_tr">
                <th class="label_th" style="width: 60%;">Регион:</th>
                <th class="label_th">Назначил:</th>
                <th class="label_th">ID:</th>
            </tr>
            </thead>
            <tbody style="line-height: 35px;">
<tr>
<?php
$regen = $mysqli->query("SELECT * FROM `flare_regions_regen` WHERE `server` LIKE '$server'");
while($item = $regen->fetch_array()) {
	echo '<tr>';
    echo '<td class="th_base" style="color: #828282; border-bottom: 1px solid #100e13;">'.$shop['cats']['rg']['regions'][$server][$item['name']]['title'].'</td>';
	echo '<td class="th_base" style="color: #828282; border-bottom: 1px solid #100e13;">'.$item['admin'].'</td>';
	echo '<td class="th_base" style="color: #828282; border-bottom: 1px solid #100e13;">'.$item['id'].'</td>';
	echo '</tr>';
}
?>
</tr>
<tr></tr>                            </tbody>
        </table>
    </center>
</div>
<div class="news_text" style="display: inline-block; padding: 34px 34px 0 34px; width: 672px;" id="contentPage">
<div style="margin-bottom: 44px;">
                <h3 class="shop_category_title" style="display: inline-block; float: left;"> Онлайн карта города <?php echo $server; ?> (/warp town)</h3>
        </div>
<iframe src="<?php echo $shop['cats']['rg']['maps'][$server]['map']; ?>" width="100%" height="500px" align="left"></iframe>
		</div>
<div class="news_text" style="display: inline-block; padding: 34px 34px 0 34px; width: 672px;" id="contentPage">
<div style="margin-bottom: 44px;">
                <h3 class="shop_category_title" style="display: inline-block; float: left;"> Приймущества города <?php echo $server; ?></h3>
        </div>
<div class="server_details">
            <div class="information_block" style="margin-right: 34px;">

                <table>
                    <tbody><tr>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td class="icon"><i class="fa fa-spinner" aria-hidden="true"></i></td>
                        <td><span class="masha_index masha_index6" rel="6"></span>Все регионы постоянно прогружаюся мировыми якорями</td>
                    </tr>
                    <tr>
                        <td class="icon"><i class="fa fa-tasks" aria-hidden="true"></i></td>
                        <td><span class="masha_index masha_index7" rel="7"></span>К каждому региону проведенно электричество</td>
                    </tr>
                    <tr>
                        <td class="icon"><i class="fa fa-user" aria-hidden="true"></i></td>
                        <td><span class="masha_index masha_index8" rel="8"></span>Возможность добавить в регион неограниченное кол-во участников (удобная панель управления регионом на сайте)</td>
                    </tr>
                    <tr>
                        <td class="icon"><i class="fa fa-s15" aria-hidden="true"></i></td>
                        <td><span class="masha_index masha_index9" rel="9"></span>Гордской магазин, автошахта и мастерская</td>
                    </tr>
                </tbody></table>
            </div>
        </div>
		</div>