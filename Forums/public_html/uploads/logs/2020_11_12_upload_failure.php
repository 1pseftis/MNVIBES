<?php exit; ?>

Thu, 12 Nov 2020 11:51:04 +0000
IPS\Db\Exception::1062
Duplicate entry '0' for key 'PRIMARY'
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Db.php(937): IPS\_Db->preparedQuery('/*IPS\\Helpers\\F...', Array)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Helpers/Form/Upload.php(710): IPS\_Db->insert('core_files_temp', Array)
#2 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Helpers/Form/Upload.php(274): IPS\Helpers\Form\_Upload->processUploads()
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/members/profile.php(1320): IPS\Helpers\Form\_Upload->__construct('member_photo_up...', NULL, false, Array, Object(Closure), NULL, NULL, 'member_photo_up...')
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(85): IPS\core\modules\front\members\_profile->editPhoto()
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/members/profile.php(73): IPS\Dispatcher\_Controller->execute()
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\core\modules\front\members\_profile->execute()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/index.php(13): IPS\_Dispatcher->run()
#8 {main}

-------------

Thu, 12 Nov 2020 13:53:53 +0000
IPS\Db\Exception::1062
Duplicate entry '0' for key 'PRIMARY'
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Db.php(937): IPS\_Db->preparedQuery('/*IPS\\Helpers\\F...', Array)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Helpers/Form/Upload.php(710): IPS\_Db->insert('core_files_temp', Array)
#2 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Helpers/Form/Upload.php(274): IPS\Helpers\Form\_Upload->processUploads()
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/members/profile.php(1320): IPS\Helpers\Form\_Upload->__construct('member_photo_up...', NULL, false, Array, Object(Closure), NULL, NULL, 'member_photo_up...')
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(85): IPS\core\modules\front\members\_profile->editPhoto()
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/members/profile.php(73): IPS\Dispatcher\_Controller->execute()
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\core\modules\front\members\_profile->execute()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/index.php(13): IPS\_Dispatcher->run()
#8 {main}