<?php exit; ?>

Fri, 20 Nov 2020 11:08:16 +0000
INSERT INTO `core_acp_notifications` ( `sent`, `app`, `ext`, `extra` ) VALUES ( 1605870496, 'core', 'ConfigurationError', 'tasksNotRunning' )
IPS\Db\Exception: Duplicate entry '0' for key 'PRIMARY' (1062)
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Db.php(937): IPS\_Db->preparedQuery('/*IPS\\core\\_Adm...', Array)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Patterns/ActiveRecord.php(487): IPS\_Db->insert('core_acp_notifi...', Array)
#2 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/sources/AdminNotification/AdminNotification.php(327): IPS\Patterns\_ActiveRecord->save()
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/extensions/core/AdminNotifications/ConfigurationError.php(127): IPS\core\_AdminNotification::send('core', 'ConfigurationEr...', 'tasksNotRunning', false)
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/admin/system/login.php(188): IPS\core\extensions\core\AdminNotifications\_ConfigurationError::runChecksAndSendNotifications()
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/admin/system/login.php(99): IPS\core\modules\admin\system\_login->_doLogin(Object(IPS\Member))
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(96): IPS\core\modules\admin\system\_login->manage()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\Dispatcher\_Controller->execute()
#8 /home/f/fakersha/forum.infinitycraft.space/public_html/admin/index.php(14): IPS\_Dispatcher->run()
#9 {main}
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/init.php(898): IPS\_Log::log('INSERT INTO `co...', 'uncaught_except...')
#1 [internal function]: IPS\IPS::exceptionHandler(Object(IPS\Db\Exception))
#2 {main}

-------------

Fri, 20 Nov 2020 11:08:23 +0000
INSERT INTO `core_acp_notifications` ( `sent`, `app`, `ext`, `extra` ) VALUES ( 1605870503, 'core', 'ConfigurationError', 'tasksNotRunning' )
IPS\Db\Exception: Duplicate entry '0' for key 'PRIMARY' (1062)
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Db.php(937): IPS\_Db->preparedQuery('/*IPS\\core\\_Adm...', Array)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Patterns/ActiveRecord.php(487): IPS\_Db->insert('core_acp_notifi...', Array)
#2 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/sources/AdminNotification/AdminNotification.php(327): IPS\Patterns\_ActiveRecord->save()
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/extensions/core/AdminNotifications/ConfigurationError.php(127): IPS\core\_AdminNotification::send('core', 'ConfigurationEr...', 'tasksNotRunning', false)
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/admin/system/login.php(188): IPS\core\extensions\core\AdminNotifications\_ConfigurationError::runChecksAndSendNotifications()
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/admin/system/login.php(99): IPS\core\modules\admin\system\_login->_doLogin(Object(IPS\Member))
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(96): IPS\core\modules\admin\system\_login->manage()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\Dispatcher\_Controller->execute()
#8 /home/f/fakersha/forum.infinitycraft.space/public_html/admin/index.php(14): IPS\_Dispatcher->run()
#9 {main}
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/init.php(898): IPS\_Log::log('INSERT INTO `co...', 'uncaught_except...')
#1 [internal function]: IPS\IPS::exceptionHandler(Object(IPS\Db\Exception))
#2 {main}

-------------

Fri, 20 Nov 2020 11:08:28 +0000
INSERT INTO `core_acp_notifications` ( `sent`, `app`, `ext`, `extra` ) VALUES ( 1605870508, 'core', 'ConfigurationError', 'tasksNotRunning' )
IPS\Db\Exception: Duplicate entry '0' for key 'PRIMARY' (1062)
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Db.php(937): IPS\_Db->preparedQuery('/*IPS\\core\\_Adm...', Array)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Patterns/ActiveRecord.php(487): IPS\_Db->insert('core_acp_notifi...', Array)
#2 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/sources/AdminNotification/AdminNotification.php(327): IPS\Patterns\_ActiveRecord->save()
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/extensions/core/AdminNotifications/ConfigurationError.php(127): IPS\core\_AdminNotification::send('core', 'ConfigurationEr...', 'tasksNotRunning', false)
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/admin/system/login.php(188): IPS\core\extensions\core\AdminNotifications\_ConfigurationError::runChecksAndSendNotifications()
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/admin/system/login.php(99): IPS\core\modules\admin\system\_login->_doLogin(Object(IPS\Member))
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(96): IPS\core\modules\admin\system\_login->manage()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\Dispatcher\_Controller->execute()
#8 /home/f/fakersha/forum.infinitycraft.space/public_html/admin/index.php(14): IPS\_Dispatcher->run()
#9 {main}
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/init.php(898): IPS\_Log::log('INSERT INTO `co...', 'uncaught_except...')
#1 [internal function]: IPS\IPS::exceptionHandler(Object(IPS\Db\Exception))
#2 {main}

-------------

Fri, 20 Nov 2020 11:08:39 +0000
INSERT INTO `core_acp_notifications` ( `sent`, `app`, `ext`, `extra` ) VALUES ( 1605870519, 'core', 'ConfigurationError', 'tasksNotRunning' )
IPS\Db\Exception: Duplicate entry '0' for key 'PRIMARY' (1062)
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Db.php(937): IPS\_Db->preparedQuery('/*IPS\\core\\_Adm...', Array)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Patterns/ActiveRecord.php(487): IPS\_Db->insert('core_acp_notifi...', Array)
#2 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/sources/AdminNotification/AdminNotification.php(327): IPS\Patterns\_ActiveRecord->save()
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/extensions/core/AdminNotifications/ConfigurationError.php(127): IPS\core\_AdminNotification::send('core', 'ConfigurationEr...', 'tasksNotRunning', false)
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/admin/system/login.php(188): IPS\core\extensions\core\AdminNotifications\_ConfigurationError::runChecksAndSendNotifications()
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/admin/system/login.php(99): IPS\core\modules\admin\system\_login->_doLogin(Object(IPS\Member))
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(96): IPS\core\modules\admin\system\_login->manage()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\Dispatcher\_Controller->execute()
#8 /home/f/fakersha/forum.infinitycraft.space/public_html/admin/index.php(14): IPS\_Dispatcher->run()
#9 {main}
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/init.php(898): IPS\_Log::log('INSERT INTO `co...', 'uncaught_except...')
#1 [internal function]: IPS\IPS::exceptionHandler(Object(IPS\Db\Exception))
#2 {main}

-------------

Fri, 20 Nov 2020 11:08:51 +0000
INSERT INTO `core_acp_notifications` ( `sent`, `app`, `ext`, `extra` ) VALUES ( 1605870531, 'core', 'ConfigurationError', 'tasksNotRunning' )
IPS\Db\Exception: Duplicate entry '0' for key 'PRIMARY' (1062)
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Db.php(937): IPS\_Db->preparedQuery('/*IPS\\core\\_Adm...', Array)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Patterns/ActiveRecord.php(487): IPS\_Db->insert('core_acp_notifi...', Array)
#2 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/sources/AdminNotification/AdminNotification.php(327): IPS\Patterns\_ActiveRecord->save()
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/extensions/core/AdminNotifications/ConfigurationError.php(127): IPS\core\_AdminNotification::send('core', 'ConfigurationEr...', 'tasksNotRunning', false)
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/admin/system/login.php(188): IPS\core\extensions\core\AdminNotifications\_ConfigurationError::runChecksAndSendNotifications()
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/admin/system/login.php(99): IPS\core\modules\admin\system\_login->_doLogin(Object(IPS\Member))
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(96): IPS\core\modules\admin\system\_login->manage()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\Dispatcher\_Controller->execute()
#8 /home/f/fakersha/forum.infinitycraft.space/public_html/admin/index.php(14): IPS\_Dispatcher->run()
#9 {main}
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/init.php(898): IPS\_Log::log('INSERT INTO `co...', 'uncaught_except...')
#1 [internal function]: IPS\IPS::exceptionHandler(Object(IPS\Db\Exception))
#2 {main}