<?php exit; ?>

Wed, 09 Dec 2020 14:17:12 +0000
IPS\Db\Exception::1062
Duplicate entry '0' for key 'PRIMARY'
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Db.php(937): IPS\_Db->preparedQuery('/*IPS\\_File::lo...', Array)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/File/File.php(1489): IPS\_Db->insert('core_file_logs', Array)
#2 /home/f/fakersha/forum.infinitycraft.space/public_html/system/File/FileSystem.php(373): IPS\_File->log('file_deletion', 'delete', Array, 'log')
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Output/Javascript/Javascript.php(905): IPS\File\_FileSystem->delete()
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Output/Javascript/Javascript.php(752): IPS\Output\_Javascript::_writeJavascriptFromResultset(Array, 'map.js', 'global', 'root')
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Output/Javascript/Javascript.php(876): IPS\Output\_Javascript::compile('global', 'root', 'map.js')
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Output/Output.php(505): IPS\Output\_Javascript::compile('core', 'front', 'front_system.js')
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Output/Output.php(315): IPS\_Output::_getJavascriptFileObject('core', 'front', 'front_system.js')
#8 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/system/notifications.php(154): IPS\_Output->js('front_system.js', 'core')
#9 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(85): IPS\core\modules\front\system\_notifications->options()
#10 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\Dispatcher\_Controller->execute()
#11 /home/f/fakersha/forum.infinitycraft.space/public_html/index.php(13): IPS\_Dispatcher->run()
#12 {main}

-------------

Wed, 09 Dec 2020 15:46:25 +0000
IPS\Db\Exception::1062
Duplicate entry '0' for key 'PRIMARY'
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Db.php(937): IPS\_Db->preparedQuery('/*IPS\\_File::lo...', Array)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/File/File.php(1489): IPS\_Db->insert('core_file_logs', Array)
#2 /home/f/fakersha/forum.infinitycraft.space/public_html/system/File/FileSystem.php(373): IPS\_File->log('file_deletion', 'delete', Array, 'log')
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Output/Javascript/Javascript.php(905): IPS\File\_FileSystem->delete()
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Output/Javascript/Javascript.php(752): IPS\Output\_Javascript::_writeJavascriptFromResultset(Array, 'map.js', 'global', 'root')
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Output/Javascript/Javascript.php(876): IPS\Output\_Javascript::compile('global', 'root', 'map.js')
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Output/Output.php(505): IPS\Output\_Javascript::compile('blog', 'admin', 'app.js')
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Output/Output.php(301): IPS\_Output::_getJavascriptFileObject('blog', 'admin', 'app.js')
#8 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Standard.php(107): IPS\_Output->js('app.js', 'blog')
#9 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(154): IPS\Dispatcher\_Standard->finish()
#10 /home/f/fakersha/forum.infinitycraft.space/public_html/admin/index.php(14): IPS\_Dispatcher->run()
#11 {main}