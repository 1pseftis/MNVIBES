<?php exit; ?>

Sat, 28 Nov 2020 02:53:50 +0000
SELECT main.*, ((MATCH(index_title) AGAINST ('+ZAP' IN BOOLEAN MODE)*5)+(MATCH(index_content,index_title) AGAINST ('+ZAP' IN BOOLEAN MODE)))/POWER(( ( UNIX_TIMESTAMP( NOW() ) - ( CASE WHEN index_date_updated <= UNIX_TIMESTAMP( NOW() ) THEN index_date_updated ELSE 0 END )) / 3600 ) + 2,1.5) AS calcscore FROM `core_search_index` AS `main` WHERE ( ( index_class IN('IPS\\core\\Statuses\\Status','IPS\\core\\Statuses\\Reply') ) OR index_class='IPS\forums\Topic\Post' OR ( index_class IN('IPS\\blog\\Entry','IPS\\blog\\Entry\\Comment') ) ) AND ( ( MATCH(index_content,index_title) AGAINST ('+ZAP' IN BOOLEAN MODE) ) OR ( index_item_index_id=index_id AND 1=0 ) ) AND ( index_permissions = '*' OR ( FIND_IN_SET(2,index_permissions) ) ) AND index_hidden=0 ORDER BY calcscore DESC LIMIT 0,25
IPS\Db\Exception: Can't find FULLTEXT index matching the column list (1191)
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Select.php(373): IPS\_Db->preparedQuery('/*IPS\\Content\\S...', Array, true)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Select.php(436): IPS\Db\_Select->runQuery()
#2 [internal function]: IPS\Db\_Select->rewind()
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Content/Search/Mysql/Query.php(1318): iterator_to_array(Object(IPS\Db\Select))
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/search/search.php(686): IPS\Content\Search\Mysql\_Query->search('ZAP', Array, 17, 'and')
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/search/search.php(80): IPS\core\modules\front\search\_search->_results()
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(96): IPS\core\modules\front\search\_search->manage()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\Dispatcher\_Controller->execute()
#8 /home/f/fakersha/forum.infinitycraft.space/public_html/index.php(13): IPS\_Dispatcher->run()
#9 {main}
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/init.php(898): IPS\_Log::log('SELECT main.*, ...', 'uncaught_except...')
#1 [internal function]: IPS\IPS::exceptionHandler(Object(IPS\Db\Exception))
#2 {main}

-------------

Sat, 28 Nov 2020 02:57:05 +0000
SELECT main.*, ((MATCH(index_title) AGAINST ('ZAP' IN BOOLEAN MODE)*5)+(MATCH(index_content,index_title) AGAINST ('ZAP' IN BOOLEAN MODE)))/POWER(( ( UNIX_TIMESTAMP( NOW() ) - ( CASE WHEN index_date_updated <= UNIX_TIMESTAMP( NOW() ) THEN index_date_updated ELSE 0 END )) / 3600 ) + 2,1.5) AS calcscore FROM `core_search_index` AS `main` WHERE ( ( index_class IN('IPS\\core\\Statuses\\Status','IPS\\core\\Statuses\\Reply') ) OR index_class='IPS\forums\Topic\Post' OR ( index_class IN('IPS\\blog\\Entry','IPS\\blog\\Entry\\Comment') ) ) AND MATCH(index_content,index_title) AGAINST ('ZAP' IN BOOLEAN MODE) AND ( index_permissions = '*' OR ( FIND_IN_SET(2,index_permissions) ) ) AND index_hidden=0 ORDER BY calcscore DESC LIMIT 0,25
IPS\Db\Exception: Can't find FULLTEXT index matching the column list (1191)
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Select.php(373): IPS\_Db->preparedQuery('/*IPS\\Content\\S...', Array, true)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Select.php(436): IPS\Db\_Select->runQuery()
#2 [internal function]: IPS\Db\_Select->rewind()
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Content/Search/Mysql/Query.php(1318): iterator_to_array(Object(IPS\Db\Select))
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/search/search.php(686): IPS\Content\Search\Mysql\_Query->search('ZAP', NULL, 17, 'or')
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/search/search.php(80): IPS\core\modules\front\search\_search->_results()
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(96): IPS\core\modules\front\search\_search->manage()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\Dispatcher\_Controller->execute()
#8 /home/f/fakersha/forum.infinitycraft.space/public_html/index.php(13): IPS\_Dispatcher->run()
#9 {main}
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/init.php(898): IPS\_Log::log('SELECT main.*, ...', 'uncaught_except...')
#1 [internal function]: IPS\IPS::exceptionHandler(Object(IPS\Db\Exception))
#2 {main}

-------------

Sat, 28 Nov 2020 03:03:39 +0000
SELECT main.*, ((MATCH(index_title) AGAINST ('ZAP' IN BOOLEAN MODE)*5)+(MATCH(index_content,index_title) AGAINST ('ZAP' IN BOOLEAN MODE)))/POWER(( ( UNIX_TIMESTAMP( NOW() ) - ( CASE WHEN index_date_updated <= UNIX_TIMESTAMP( NOW() ) THEN index_date_updated ELSE 0 END )) / 3600 ) + 2,1.5) AS calcscore FROM `core_search_index` AS `main` WHERE ( ( index_class IN('IPS\\core\\Statuses\\Status','IPS\\core\\Statuses\\Reply') ) OR index_class='IPS\forums\Topic\Post' OR ( index_class IN('IPS\\blog\\Entry','IPS\\blog\\Entry\\Comment') ) ) AND MATCH(index_content,index_title) AGAINST ('ZAP' IN BOOLEAN MODE) AND ( index_permissions = '*' OR ( FIND_IN_SET(2,index_permissions) ) ) AND index_hidden=0 ORDER BY calcscore DESC LIMIT 0,25
IPS\Db\Exception: Can't find FULLTEXT index matching the column list (1191)
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Select.php(373): IPS\_Db->preparedQuery('/*IPS\\Content\\S...', Array, true)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Select.php(436): IPS\Db\_Select->runQuery()
#2 [internal function]: IPS\Db\_Select->rewind()
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Content/Search/Mysql/Query.php(1318): iterator_to_array(Object(IPS\Db\Select))
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/search/search.php(686): IPS\Content\Search\Mysql\_Query->search('ZAP', NULL, 17, 'or')
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/search/search.php(80): IPS\core\modules\front\search\_search->_results()
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(96): IPS\core\modules\front\search\_search->manage()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\Dispatcher\_Controller->execute()
#8 /home/f/fakersha/forum.infinitycraft.space/public_html/index.php(13): IPS\_Dispatcher->run()
#9 {main}
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/init.php(898): IPS\_Log::log('SELECT main.*, ...', 'uncaught_except...')
#1 [internal function]: IPS\IPS::exceptionHandler(Object(IPS\Db\Exception))
#2 {main}

-------------

Sat, 28 Nov 2020 03:05:45 +0000
SELECT main.*, ((MATCH(index_title) AGAINST ('+ZAP' IN BOOLEAN MODE)*5)+(MATCH(index_content,index_title) AGAINST ('+ZAP' IN BOOLEAN MODE)))/POWER(( ( UNIX_TIMESTAMP( NOW() ) - ( CASE WHEN index_date_updated <= UNIX_TIMESTAMP( NOW() ) THEN index_date_updated ELSE 0 END )) / 3600 ) + 2,1.5) AS calcscore FROM `core_search_index` AS `main` WHERE ( ( index_class IN('IPS\\core\\Statuses\\Status','IPS\\core\\Statuses\\Reply') ) OR index_class='IPS\forums\Topic\Post' OR ( index_class IN('IPS\\blog\\Entry','IPS\\blog\\Entry\\Comment') ) ) AND ( ( MATCH(index_content,index_title) AGAINST ('+ZAP' IN BOOLEAN MODE) ) OR ( index_item_index_id=index_id AND 1=0 ) ) AND ( index_permissions = '*' OR ( FIND_IN_SET(2,index_permissions) ) ) AND index_hidden=0 ORDER BY calcscore DESC LIMIT 0,25
IPS\Db\Exception: Can't find FULLTEXT index matching the column list (1191)
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Select.php(373): IPS\_Db->preparedQuery('/*IPS\\Content\\S...', Array, true)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Select.php(436): IPS\Db\_Select->runQuery()
#2 [internal function]: IPS\Db\_Select->rewind()
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Content/Search/Mysql/Query.php(1318): iterator_to_array(Object(IPS\Db\Select))
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/search/search.php(686): IPS\Content\Search\Mysql\_Query->search('ZAP', Array, 17, 'and')
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/search/search.php(80): IPS\core\modules\front\search\_search->_results()
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(96): IPS\core\modules\front\search\_search->manage()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\Dispatcher\_Controller->execute()
#8 /home/f/fakersha/forum.infinitycraft.space/public_html/index.php(13): IPS\_Dispatcher->run()
#9 {main}
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/init.php(898): IPS\_Log::log('SELECT main.*, ...', 'uncaught_except...')
#1 [internal function]: IPS\IPS::exceptionHandler(Object(IPS\Db\Exception))
#2 {main}

-------------

Sat, 28 Nov 2020 03:14:13 +0000
SELECT main.*, ((MATCH(index_title) AGAINST ('ZAP' IN BOOLEAN MODE)*5)+(MATCH(index_content,index_title) AGAINST ('ZAP' IN BOOLEAN MODE)))/POWER(( ( UNIX_TIMESTAMP( NOW() ) - ( CASE WHEN index_date_updated <= UNIX_TIMESTAMP( NOW() ) THEN index_date_updated ELSE 0 END )) / 3600 ) + 2,1.5) AS calcscore FROM `core_search_index` AS `main` WHERE ( ( index_class IN('IPS\\core\\Statuses\\Status','IPS\\core\\Statuses\\Reply') ) OR index_class='IPS\forums\Topic\Post' OR ( index_class IN('IPS\\blog\\Entry','IPS\\blog\\Entry\\Comment') ) ) AND MATCH(index_content,index_title) AGAINST ('ZAP' IN BOOLEAN MODE) AND ( index_permissions = '*' OR ( FIND_IN_SET(2,index_permissions) ) ) AND index_hidden=0 ORDER BY calcscore DESC LIMIT 0,25
IPS\Db\Exception: Can't find FULLTEXT index matching the column list (1191)
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Select.php(373): IPS\_Db->preparedQuery('/*IPS\\Content\\S...', Array, true)
#1 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Db/Select.php(436): IPS\Db\_Select->runQuery()
#2 [internal function]: IPS\Db\_Select->rewind()
#3 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Content/Search/Mysql/Query.php(1318): iterator_to_array(Object(IPS\Db\Select))
#4 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/search/search.php(686): IPS\Content\Search\Mysql\_Query->search('ZAP', NULL, 17, 'or')
#5 /home/f/fakersha/forum.infinitycraft.space/public_html/applications/core/modules/front/search/search.php(80): IPS\core\modules\front\search\_search->_results()
#6 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Controller.php(96): IPS\core\modules\front\search\_search->manage()
#7 /home/f/fakersha/forum.infinitycraft.space/public_html/system/Dispatcher/Dispatcher.php(152): IPS\Dispatcher\_Controller->execute()
#8 /home/f/fakersha/forum.infinitycraft.space/public_html/index.php(13): IPS\_Dispatcher->run()
#9 {main}
#0 /home/f/fakersha/forum.infinitycraft.space/public_html/init.php(898): IPS\_Log::log('SELECT main.*, ...', 'uncaught_except...')
#1 [internal function]: IPS\IPS::exceptionHandler(Object(IPS\Db\Exception))
#2 {main}