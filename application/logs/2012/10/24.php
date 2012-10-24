<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-24 07:22:58 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
2012-10-24 07:22:58 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
--
#0 E:\Web\workspaces\Husham\Husham\modules\couchdb-client\classes\couchdb\client.php(136): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\workspaces\Husham\Husham\application\classes\model\rest\posts.php(38): CouchDB_Client->get_document('_design/views/_...')
#2 E:\Web\workspaces\Husham\Husham\modules\rest\classes\rest\core.php(225): Model_REST_Posts->rest_get(Object(Rest))
#3 E:\Web\workspaces\Husham\Husham\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 E:\Web\workspaces\Husham\Husham\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-24 07:34:55 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
2012-10-24 07:34:55 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
--
#0 E:\Web\workspaces\Husham\Husham\modules\couchdb-client\classes\couchdb\client.php(136): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\workspaces\Husham\Husham\application\classes\model\rest\posts.php(38): CouchDB_Client->get_document('_design/views/_...')
#2 E:\Web\workspaces\Husham\Husham\modules\rest\classes\rest\core.php(225): Model_REST_Posts->rest_get(Object(Rest))
#3 E:\Web\workspaces\Husham\Husham\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 E:\Web\workspaces\Husham\Husham\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-24 07:35:06 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
2012-10-24 07:35:06 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
--
#0 E:\Web\workspaces\Husham\Husham\modules\couchdb-client\classes\couchdb\client.php(136): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\workspaces\Husham\Husham\application\classes\model\rest\posts.php(38): CouchDB_Client->get_document('_design/views/_...')
#2 E:\Web\workspaces\Husham\Husham\modules\rest\classes\rest\core.php(225): Model_REST_Posts->rest_get(Object(Rest))
#3 E:\Web\workspaces\Husham\Husham\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 E:\Web\workspaces\Husham\Husham\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-24 07:35:24 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
2012-10-24 07:35:24 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
--
#0 E:\Web\workspaces\Husham\Husham\modules\couchdb-client\classes\couchdb\client.php(136): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\workspaces\Husham\Husham\application\classes\model\rest\posts.php(38): CouchDB_Client->get_document('_design/views/_...')
#2 E:\Web\workspaces\Husham\Husham\modules\rest\classes\rest\core.php(225): Model_REST_Posts->rest_get(Object(Rest))
#3 E:\Web\workspaces\Husham\Husham\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 E:\Web\workspaces\Husham\Husham\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-24 07:37:09 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
2012-10-24 07:37:09 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
--
#0 E:\Web\workspaces\Husham\Husham\modules\couchdb-client\classes\couchdb\client.php(136): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\workspaces\Husham\Husham\application\classes\model\rest\posts.php(38): CouchDB_Client->get_document('_design/views/_...')
#2 E:\Web\workspaces\Husham\Husham\modules\rest\classes\rest\core.php(225): Model_REST_Posts->rest_get(Object(Rest))
#3 E:\Web\workspaces\Husham\Husham\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 E:\Web\workspaces\Husham\Husham\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-24 07:44:24 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
2012-10-24 07:44:24 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
--
#0 E:\Web\workspaces\Husham\Husham\modules\couchdb-client\classes\couchdb\client.php(136): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\workspaces\Husham\Husham\application\classes\model\rest\posts.php(38): CouchDB_Client->get_document('_design/views/_...')
#2 E:\Web\workspaces\Husham\Husham\modules\rest\classes\rest\core.php(225): Model_REST_Posts->rest_get(Object(Rest))
#3 E:\Web\workspaces\Husham\Husham\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 E:\Web\workspaces\Husham\Husham\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-24 07:44:46 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
2012-10-24 07:44:46 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
--
#0 E:\Web\workspaces\Husham\Husham\modules\couchdb-client\classes\couchdb\client.php(136): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\workspaces\Husham\Husham\application\classes\model\rest\posts.php(38): CouchDB_Client->get_document('_design/views/_...')
#2 E:\Web\workspaces\Husham\Husham\modules\rest\classes\rest\core.php(225): Model_REST_Posts->rest_get(Object(Rest))
#3 E:\Web\workspaces\Husham\Husham\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 E:\Web\workspaces\Husham\Husham\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-24 07:50:37 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
2012-10-24 07:50:37 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
--
#0 E:\Web\workspaces\Husham\Husham\modules\couchdb-client\classes\couchdb\client.php(136): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\workspaces\Husham\Husham\application\classes\model\rest\posts.php(38): CouchDB_Client->get_document('_design/views/_...')
#2 E:\Web\workspaces\Husham\Husham\modules\rest\classes\rest\core.php(225): Model_REST_Posts->rest_get(Object(Rest))
#3 E:\Web\workspaces\Husham\Husham\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 E:\Web\workspaces\Husham\Husham\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-24 07:51:06 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
2012-10-24 07:51:06 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
--
#0 E:\Web\workspaces\Husham\Husham\modules\couchdb-client\classes\couchdb\client.php(136): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\workspaces\Husham\Husham\application\classes\model\rest\posts.php(38): CouchDB_Client->get_document('_design/views/_...')
#2 E:\Web\workspaces\Husham\Husham\modules\rest\classes\rest\core.php(225): Model_REST_Posts->rest_get(Object(Rest))
#3 E:\Web\workspaces\Husham\Husham\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 E:\Web\workspaces\Husham\Husham\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-24 07:53:51 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
2012-10-24 07:53:51 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
--
#0 E:\Web\workspaces\Husham\Husham\modules\couchdb-client\classes\couchdb\client.php(136): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\workspaces\Husham\Husham\application\classes\model\rest\posts.php(38): CouchDB_Client->get_document('_design/views/_...')
#2 E:\Web\workspaces\Husham\Husham\modules\rest\classes\rest\core.php(225): Model_REST_Posts->rest_get(Object(Rest))
#3 E:\Web\workspaces\Husham\Husham\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 E:\Web\workspaces\Husham\Husham\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-24 07:54:06 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
2012-10-24 07:54:06 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 243 ]
--
#0 E:\Web\workspaces\Husham\Husham\modules\couchdb-client\classes\couchdb\client.php(136): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\workspaces\Husham\Husham\application\classes\model\rest\posts.php(38): CouchDB_Client->get_document('_design/views/_...')
#2 E:\Web\workspaces\Husham\Husham\modules\rest\classes\rest\core.php(225): Model_REST_Posts->rest_get(Object(Rest))
#3 E:\Web\workspaces\Husham\Husham\modules\rest\classes\controller\template\rest.php(31): REST_Core->execute()
#4 [internal function]: Controller_Template_REST->before()
#5 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_REST))
#6 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\Web\workspaces\Husham\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 E:\Web\workspaces\Husham\Husham\index.php(109): Kohana_Request->execute()
#9 {main}