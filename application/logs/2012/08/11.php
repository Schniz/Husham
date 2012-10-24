<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-11 12:33:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL Husham was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-11 12:33:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL Husham was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-11 12:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Husham/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-11 12:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Husham/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-11 12:34:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Husham/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-11 12:34:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: Husham/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-11 13:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-11 13:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-11 13:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ] was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-08-11 13:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ] was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-11 13:25:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 53 ]
2012-08-11 13:25:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-11 13:27:39 --- ERROR: ErrorException [ 1 ]: Class 'REST_Client' not found ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 97 ]
2012-08-11 13:27:39 --- STRACE: ErrorException [ 1 ]: Class 'REST_Client' not found ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 97 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-11 13:32:11 --- ERROR: ErrorException [ 8 ]: Undefined property: REST_Response::$data ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 130 ]
2012-08-11 13:32:11 --- STRACE: ErrorException [ 8 ]: Undefined property: REST_Response::$data ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 130 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\Web\projects...', 130, Array)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 13:37:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: uri ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
2012-08-11 13:37:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: uri ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(237): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\Web\projects...', 237, Array)
#1 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): CouchDB_Client->_parse_document('', 0)
#2 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#3 [internal function]: Controller_DbChecker->action_index()
#4 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#5 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-11 13:38:51 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
2012-08-11 13:38:51 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 13:41:36 --- ERROR: ErrorException [ 8 ]: Undefined property: REST_Response::$data ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 168 ]
2012-08-11 13:41:36 --- STRACE: ErrorException [ 8 ]: Undefined property: REST_Response::$data ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 168 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(168): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\Web\projects...', 168, Array)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(9): CouchDB_Client->put_document('husham', Array)
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 13:41:52 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
2012-08-11 13:41:52 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(168): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(9): CouchDB_Client->put_document('husham', Array)
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 13:43:37 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
2012-08-11 13:43:37 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): CouchDB_Client->_parse_document('', 0)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 13:51:01 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\rest-client\classes\rest\response.php [ 46 ]
2012-08-11 13:51:01 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\rest-client\classes\rest\response.php [ 46 ]
--
#0 E:\Web\projects\Husham\modules\rest-client\classes\rest\response.php(46): Kohana_Core::error_handler(8, 'Array to string...', 'E:\Web\projects...', 46, Array)
#1 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): REST_Response->getData()
#2 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#3 [internal function]: Controller_DbChecker->action_index()
#4 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#5 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-11 13:54:21 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
2012-08-11 13:54:21 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): CouchDB_Client->_parse_document(false, 0)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 13:57:58 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 239 ]
2012-08-11 13:57:58 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 239 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(132): CouchDB_Client->_parse_document(false, 0)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 13:58:48 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
2012-08-11 13:58:48 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): CouchDB_Client->_parse_document(false, 0)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 13:59:35 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 239 ]
2012-08-11 13:59:35 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 239 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(132): CouchDB_Client->_parse_document(false, 0)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 14:00:21 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
2012-08-11 14:00:21 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): CouchDB_Client->_parse_document(false, 0)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 14:00:24 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
2012-08-11 14:00:24 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): CouchDB_Client->_parse_document(false, 0)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 14:03:36 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
2012-08-11 14:03:36 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): CouchDB_Client->_parse_document(false, 0)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 14:04:08 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
2012-08-11 14:04:08 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): CouchDB_Client->_parse_document(false, 0)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 14:06:53 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
2012-08-11 14:06:53 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from  ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): CouchDB_Client->_parse_document(false, 0)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 14:08:23 --- ERROR: Kohana_Exception [ 0 ]: Invalid JSON returned from HTTP/1.1 404 Object Not Found
X-Couch-Request-ID: cf6a03a2
Server: CouchDB/1.0.2 (Erlang OTP/R14B)
Date: Sat, 11 Aug 2012 19:08:20 GMT
Content-Type: text/plain;charset=utf-8
Content-Length: 41
Cache-Control: must-revalidate

{"error":"not_found","reason":"missing"}
 ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
2012-08-11 14:08:23 --- STRACE: Kohana_Exception [ 0 ]: Invalid JSON returned from HTTP/1.1 404 Object Not Found
X-Couch-Request-ID: cf6a03a2
Server: CouchDB/1.0.2 (Erlang OTP/R14B)
Date: Sat, 11 Aug 2012 19:08:20 GMT
Content-Type: text/plain;charset=utf-8
Content-Length: 41
Cache-Control: must-revalidate

{"error":"not_found","reason":"missing"}
 ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 237 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): CouchDB_Client->_parse_document('HTTP/1.1 404 Ob...', 404)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 14:09:03 --- ERROR: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "missing" ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 288 ]
2012-08-11 14:09:03 --- STRACE: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "missing" ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 288 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(242): CouchDB_Client->_handle_error(404, Object(stdClass))
#1 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(130): CouchDB_Client->_parse_document('{"error":"not_f...', 404)
#2 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#3 [internal function]: Controller_DbChecker->action_index()
#4 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#5 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-11 14:11:17 --- ERROR: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "missing" ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 290 ]
2012-08-11 14:11:17 --- STRACE: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "missing" ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 290 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(244): CouchDB_Client->_handle_error(404, Object(stdClass))
#1 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(132): CouchDB_Client->_parse_document('{"error":"not_f...', 404)
#2 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#3 [internal function]: Controller_DbChecker->action_index()
#4 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#5 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-11 14:12:22 --- ERROR: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "Database does not exist." ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 290 ]
2012-08-11 14:12:22 --- STRACE: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "Database does not exist." ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 290 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(244): CouchDB_Client->_handle_error(404, Object(stdClass))
#1 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(132): CouchDB_Client->_parse_document('{"error":"not_f...', 404)
#2 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#3 [internal function]: Controller_DbChecker->action_index()
#4 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#5 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-11 14:12:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: database ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 125 ]
2012-08-11 14:12:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: database ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 125 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(125): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\Web\projects...', 125, Array)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 14:12:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: database ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 125 ]
2012-08-11 14:12:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: database ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 125 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(125): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\Web\projects...', 125, Array)
#1 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#2 [internal function]: Controller_DbChecker->action_index()
#3 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#4 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-11 14:13:06 --- ERROR: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "Database does not exist." ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 295 ]
2012-08-11 14:13:06 --- STRACE: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "Database does not exist." ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 295 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(249): CouchDB_Client->_handle_error(404, Object(stdClass))
#1 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(137): CouchDB_Client->_parse_document('{"error":"not_f...', 404)
#2 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('husham')
#3 [internal function]: Controller_DbChecker->action_index()
#4 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#5 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-11 14:13:26 --- ERROR: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "Database does not exist." ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 295 ]
2012-08-11 14:13:26 --- STRACE: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "Database does not exist." ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 295 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(249): CouchDB_Client->_handle_error(404, Object(stdClass))
#1 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(137): CouchDB_Client->_parse_document('{"error":"not_f...', 404)
#2 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('')
#3 [internal function]: Controller_DbChecker->action_index()
#4 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#5 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-11 14:14:20 --- ERROR: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "Database does not exist." ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 295 ]
2012-08-11 14:14:20 --- STRACE: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "Database does not exist." ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 295 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(249): CouchDB_Client->_handle_error(404, Object(stdClass))
#1 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(137): CouchDB_Client->_parse_document('{"error":"not_f...', 404)
#2 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('')
#3 [internal function]: Controller_DbChecker->action_index()
#4 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#5 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-11 14:14:35 --- ERROR: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "Database does not exist." ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 295 ]
2012-08-11 14:14:35 --- STRACE: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "Database does not exist." ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 295 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(249): CouchDB_Client->_handle_error(404, Object(stdClass))
#1 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(137): CouchDB_Client->_parse_document('{"error":"not_f...', 404)
#2 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('')
#3 [internal function]: Controller_DbChecker->action_index()
#4 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#5 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-11 14:14:58 --- ERROR: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "Database does not exist." ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 295 ]
2012-08-11 14:14:58 --- STRACE: CouchDB_Unavailable_Document_Exception [ 404 ]: Database server returned Error: "not_found" with reason "Database does not exist." ~ MODPATH\couchdb-client\classes\couchdb\client.php [ 295 ]
--
#0 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(249): CouchDB_Client->_handle_error(404, Object(stdClass))
#1 E:\Web\projects\Husham\modules\couchdb-client\classes\couchdb\client.php(137): CouchDB_Client->_parse_document('{"error":"not_f...', 404)
#2 E:\Web\projects\Husham\application\classes\controller\dbchecker.php(8): CouchDB_Client->get_document('')
#3 [internal function]: Controller_DbChecker->action_index()
#4 E:\Web\projects\Husham\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_DbChecker))
#5 E:\Web\projects\Husham\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\Web\projects\Husham\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 E:\Web\projects\Husham\index.php(109): Kohana_Request->execute()
#8 {main}