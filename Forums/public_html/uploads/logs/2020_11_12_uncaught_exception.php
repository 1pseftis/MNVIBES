<?php exit; ?>

Thu, 12 Nov 2020 12:42:38 +0000
INSERT INTO `core_error_logs` ( `log_member`, `log_date`, `log_error`, `log_error_code`, `log_ip_address`, `log_request_uri` ) VALUES ( 13, 1605184958, 'Мы не смогли найти элемент, который вы пытаетесь просмотреть.', '3S101/B', '94.230.167.200', '/admin/?adsess=d50a307bbeba2482f597ff57a206609c&app=forums&module=forums&controller=forums&do=reorder&ajax_order[34]=null&ajax_order[36]=null&ajax_order[37]=36&ajax_order[35]=36&ajax_order[57]=36&ajax_order[41]=36&ajax_order[38]=null&ajax_order[40]=null&ajax_order[44]=null&ajax_order[50]=null' )
IPS\Db\Exception: Duplicate entry '0' for key 'PRIMARY' (1062)
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Db.php(937): IPS\_Db->preparedQuery('/*IPS\\_Output::...', Array)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Output/Output.php(629): IPS\_Db->insert('core_error_logs', Array)
#2 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Node/Controller.php(945): IPS\_Output->error('\xD0\x9C\xD1\x8B \xD0\xBD\xD0\xB5 \xD1\x81\xD0\xBC\xD0...', '3S101/B', 404, '')
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(85): IPS\Node\_Controller->reorder()
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Node/Controller.php(62): IPS\Dispatcher\_Controller->execute()
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/forums/modules/admin/forums/forums.php(39): IPS\Node\_Controller->execute()
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\forums\modules\admin\forums\_forums->execute()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/admin/index.php(14): IPS\_Dispatcher->run()
#8 {main}
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/init.php(898): IPS\_Log::log('INSERT INTO `co...', 'uncaught_except...')
#1 [internal function]: IPS\IPS::exceptionHandler(Object(IPS\Db\Exception))
#2 {main}

-------------

Thu, 12 Nov 2020 13:54:19 +0000
INSERT INTO `core_error_logs` ( `log_member`, `log_date`, `log_error`, `log_error_code`, `log_ip_address`, `log_request_uri` ) VALUES ( 17, 1605189259, 'Мы не смогли найти элемент, который вы пытаетесь просмотреть.', '3S101/B', '94.19.161.19', '/admin/?adsess=1b0aa47fe83b5fe4dde54234e0a7f48a&app=forums&module=forums&controller=forums&do=reorder' )
IPS\Db\Exception: Duplicate entry '0' for key 'PRIMARY' (1062)
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Db.php(937): IPS\_Db->preparedQuery('/*IPS\\_Output::...', Array)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Output/Output.php(629): IPS\_Db->insert('core_error_logs', Array)
#2 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Node/Controller.php(945): IPS\_Output->error('\xD0\x9C\xD1\x8B \xD0\xBD\xD0\xB5 \xD1\x81\xD0\xBC\xD0...', '3S101/B', 404, '')
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(85): IPS\Node\_Controller->reorder()
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Node/Controller.php(62): IPS\Dispatcher\_Controller->execute()
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/forums/modules/admin/forums/forums.php(39): IPS\Node\_Controller->execute()
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\forums\modules\admin\forums\_forums->execute()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/admin/index.php(14): IPS\_Dispatcher->run()
#8 {main}
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/init.php(898): IPS\_Log::log('INSERT INTO `co...', 'uncaught_except...')
#1 [internal function]: IPS\IPS::exceptionHandler(Object(IPS\Db\Exception))
#2 {main}