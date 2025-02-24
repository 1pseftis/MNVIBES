 <h3>Наши сервера</h3>
 <style>
 .swal-height {
  height: 90%;
}
</style>
<script>
function no_map() {
Swal.fire({
  type: 'error',
  text: 'Данный сервер не имеет онлайн-карты!',
  showConfirmButton: false,
  background: "#15101a",
  position: 'top',
  showCloseButton: true,
  customClass: {
	popup: 'animated fadeInDown faster'
  },
  animation: false
})
}
</script>
<?php
//Libs
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/config/cfg_lib.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/ints.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/mysql.php');
require_once ($_SERVER['DOCUMENT_ROOT']. '/modules/libs/rcon.php');
$data = json_decode(file_get_contents('https://UniversalStudio.online/modules/lk/php/mon/ajax.json'), true);
foreach ($versions as $version) {
	print '<div class="version_block">';
	print '<span>Версия серверов '.$version['title'].':</span>';
	print '</div>';
	foreach ($servers as $server) {
		if ($version['id']==$server['version']) {
			$procent = (100/$data['servers'][$server['title']]['slots'])*$data['servers'][$server['title']]['online'];
			print '<div class="server_block">';
			print '<div class="online_block" style="width: 197px">';
			print '<span class="name">'.$server['mon_name'].'</span>';
			if ($data['servers'][$server['title']]['status']=='online') {
			    print '<span class="online" style="line-height: 14px">'.$data['servers'][$server['title']]['online'].' из '.$data['servers'][$server['title']]['slots'].'</span>';
			} else {
				print '<span class="online" style="line-height: 11px">Выключен</span>';
			}
			print '<div class="status_line">';
			if ($data['servers'][$server['title']]['status']=='online') {
			    print '<div class="progressbar" style="width: '.$procent.'%;"></div>';
			} else {
				print '<div class="progressbar" style="width: 0%;"></div>';
			}
			print '</div>';
			print '</div>';
			print '</div>';
			print '<script>';
			print 'function show_map_'.$server['title'].'() {';
			print 'if ("'.$server['dynmap'].'"=="none") {';
			print 'no_map();';
			print '} else {';
			print 'Swal.fire({';
			print "position: 'top',";
			print 'customClass: {';
			print "popup: 'animated fadeInDown faster'";
			print '},';
			print 'animation: false,';
			print 'title: "Онлайн-карта '.$server['title'].'",';
			print 'html: \'<iframe src="'.$server['dynmap'].'" width="100%" height="500px" align="left"></iframe>\',';
			print 'background: "#15101a",';
			print 'showConfirmButton: false,';
			print 'showCloseButton: true,';
			print 'width: "90%"';
			print '})';
			print '}';
			print '}';
			print '</script>';
			
		}
    }
}
?> 

    <div class="total_online_block">
        <div class="information">
            <b><?php echo  $data['record'] ?> </b>
            <span>РЕКОРД ЗА ВСЕ ВРЕМЯ</span>
        </div>
        <div class="information">
            <b class="today_record"><?php echo  $data['recordday'] ?></b>
            <span>РЕКОРД ЗА CЕГОДНЯ</span>
        </div>
        <div class="information">
            <b class="total_online"><?php echo  $data['online'] ?></b>
            <span>ОБЩИЙ ОНЛАЙН</span>
        </div>
    </div>