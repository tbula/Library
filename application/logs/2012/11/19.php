<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-19 01:58:41 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): No connection could be made because the target machine actively refused it.
 ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2012-11-19 01:58:41 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\Welcome.php(12): Kohana_ORM::factory('user')
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2012-11-19 02:47:16 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 02:47:16 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 02:47:52 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 02:47:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 02:47:55 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 02:47:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 02:47:58 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 02:47:58 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 02:49:19 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 02:49:19 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:04:01 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:04:01 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:08:23 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:08:23 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:08:25 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:08:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:08:25 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:08:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:12:06 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:12:06 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:12:08 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:12:08 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:12:09 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:12:09 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:12:10 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:12:10 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:12:11 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:12:11 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:12:12 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 03:12:12 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2012-11-19 06:20:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\user.php [ 7 ] in :
2012-11-19 06:20:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 06:21:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password ~ APPPATH\classes\Controller\register.php [ 6 ] in C:\xampp\htdocs\kohana\application\classes\Controller\register.php:6
2012-11-19 06:21:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\register.php:6
2012-11-19 06:22:35 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_User::__construct(), called in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php on line 46 and defined ~ APPPATH\classes\Model\user.php [ 6 ] in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:22:35 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\user.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Model_User->__construct(NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Model\user.php(28): Kohana_ORM::factory('user')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(7): Model_User->ValidateUserData()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:24:44 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_User::__construct(), called in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php on line 46 and defined ~ APPPATH\classes\Model\user.php [ 6 ] in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:24:44 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\user.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Model_User->__construct(NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Model\user.php(28): Kohana_ORM::factory('user')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(12): Model_User->ValidateUserData()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:26:07 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_User::__construct(), called in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php on line 46 and defined ~ APPPATH\classes\Model\user.php [ 6 ] in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:26:07 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\user.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Model_User->__construct(NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Model\user.php(28): Kohana_ORM::factory('user')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(13): Model_User->ValidateUserData()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:27:16 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_User::__construct(), called in C:\xampp\htdocs\kohana\application\classes\Controller\register.php on line 11 and defined ~ APPPATH\classes\Model\user.php [ 6 ] in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:27:16 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\user.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(11): Model_User->__construct()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:27:29 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'forfiter'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2012-11-19 06:27:29 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(11): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2012-11-19 06:28:10 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_User::__construct(), called in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php on line 46 and defined ~ APPPATH\classes\Model\user.php [ 6 ] in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:28:10 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\user.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Model_User->__construct(NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Model\user.php(28): Kohana_ORM::factory('user')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(12): Model_User->ValidateUserData()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:28:18 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_User::__construct(), called in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php on line 46 and defined ~ APPPATH\classes\Model\user.php [ 6 ] in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:28:18 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\user.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Model_User->__construct(NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Model\user.php(28): Kohana_ORM::factory('user')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(12): Model_User->ValidateUserData()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:28:40 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_User::__construct(), called in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php on line 46 and defined ~ APPPATH\classes\Model\user.php [ 6 ] in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:28:40 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\user.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Model_User->__construct(NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Model\user.php(27): Kohana_ORM::factory('user')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(12): Model_User->ValidateUserData()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:29:50 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_User::__construct(), called in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php on line 46 and defined ~ APPPATH\classes\Model\user.php [ 6 ] in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:29:50 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\user.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Model_User->__construct(NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Model\user.php(27): Kohana_ORM::factory('user')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(12): Model_User->ValidateUserData()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-19 06:32:24 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'forfiter'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2012-11-19 06:32:24 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(11): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2012-11-19 06:33:24 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'forfiter'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2012-11-19 06:33:24 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(11): Kohana_ORM->__construct()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2012-11-19 06:34:57 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::or_where(), called in C:\xampp\htdocs\kohana\application\classes\Model\user.php on line 29 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1884 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1884
2012-11-19 06:34:57 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1884): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 1884, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\user.php(29): Kohana_ORM->or_where(Array)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(20): Model_User->ValidateUserData()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1884
2012-11-19 06:41:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH\classes\Model\user.php [ 30 ] in :
2012-11-19 06:41:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 06:41:25 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::or_where(), called in C:\xampp\htdocs\kohana\application\classes\Model\user.php on line 29 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1884 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1884
2012-11-19 06:41:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1884): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 1884, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\user.php(29): Kohana_ORM->or_where(Array)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(20): Model_User->ValidateUserData()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1884
2012-11-19 06:43:11 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::or_where(), called in C:\xampp\htdocs\kohana\application\classes\Model\user.php on line 29 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1884 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1884
2012-11-19 06:43:11 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1884): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 1884, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\user.php(29): Kohana_ORM->or_where(Array)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(20): Model_User->ValidateUserData()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1884
2012-11-19 07:01:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usererror ~ APPPATH\views\register.php [ 14 ] in C:\xampp\htdocs\kohana\application\views\register.php:14
2012-11-19 07:01:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\register.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(14): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\register.php:14
2012-11-19 07:03:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usererror ~ APPPATH\views\register.php [ 14 ] in C:\xampp\htdocs\kohana\application\views\register.php:14
2012-11-19 07:03:39 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\register.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(14): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\register.php:14
2012-11-19 07:03:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usererror ~ APPPATH\views\register.php [ 14 ] in C:\xampp\htdocs\kohana\application\views\register.php:14
2012-11-19 07:03:42 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\register.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(14): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\register.php:14
2012-11-19 07:04:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usererror ~ APPPATH\views\register.php [ 14 ] in C:\xampp\htdocs\kohana\application\views\register.php:14
2012-11-19 07:04:04 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\register.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(14): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\register.php:14
2012-11-19 07:05:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usererror ~ APPPATH\views\register.php [ 14 ] in C:\xampp\htdocs\kohana\application\views\register.php:14
2012-11-19 07:05:16 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\register.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(14): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\register.php:14
2012-11-19 07:06:40 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'Kenny-tbula@future-proccesing.com' for key 'login' [ INSERT INTO `users` (`id`, `login`, `password`, `firstname`, `email`, `active`) VALUES (0, 'Kenny', 'asd', 'Tomasz', 'tbula@future-proccesing.com', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2012-11-19 07:06:40 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\kohana\application\classes\Model\user.php(59): Kohana_ORM->save()
#4 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(22): Model_User->saveUser()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2012-11-19 07:07:56 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'Kenny-tbula@future-proccesing.com' for key 'login' [ INSERT INTO `users` (`id`, `login`, `password`, `firstname`, `email`, `active`) VALUES (0, 'Kenny', 'zxc', 'Tomasz', 'tbula@future-proccesing.com', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2012-11-19 07:07:56 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\kohana\application\classes\Model\user.php(59): Kohana_ORM->save()
#4 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(22): Model_User->saveUser()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2012-11-19 07:09:34 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'Kenny-tbula@future-proccesing.com' for key 'login' [ INSERT INTO `users` (`id`, `login`, `password`, `firstname`, `email`, `active`) VALUES (0, 'Kenny', 'tgb', 'Tomasz', 'tbula@future-proccesing.com', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2012-11-19 07:09:34 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\kohana\application\classes\Model\user.php(59): Kohana_ORM->save()
#4 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(22): Model_User->saveUser()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2012-11-19 07:09:56 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'Kenny-tbula@future-proccesing.com' for key 'login' [ INSERT INTO `users` (`id`, `login`, `password`, `firstname`, `email`, `active`) VALUES (0, 'Kenny', 'tgb', 'Tomasz', 'tbula@future-proccesing.com', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2012-11-19 07:09:56 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\kohana\application\classes\Model\user.php(59): Kohana_ORM->save()
#4 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(22): Model_User->saveUser()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2012-11-19 07:10:25 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in C:\xampp\htdocs\kohana\application\classes\Model\user.php on line 30 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1846 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1846
2012-11-19 07:10:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1846): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 1846, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\user.php(30): Kohana_ORM->where('login', 'Kenny')
#2 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(20): Model_User->ValidateUserData()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1846
2012-11-19 07:12:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::like() ~ APPPATH\classes\Model\user.php [ 30 ] in :
2012-11-19 07:12:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-19 07:14:43 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'Kenny-tbula@future-proccesing.com' for key 'login' [ INSERT INTO `users` (`id`, `login`, `password`, `firstname`, `email`, `active`) VALUES (0, 'Kenny', 'tgb', 'Tomasz', 'tbula@future-proccesing.com', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2012-11-19 07:14:43 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\kohana\application\classes\Model\user.php(59): Kohana_ORM->save()
#4 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(22): Model_User->saveUser()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2012-11-19 07:15:03 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\register.php [ 36 ] in C:\xampp\htdocs\kohana\application\classes\Controller\register.php:36
2012-11-19 07:15:03 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(36): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 36, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\register.php:36
2012-11-19 07:15:49 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\register.php [ 36 ] in C:\xampp\htdocs\kohana\application\classes\Controller\register.php:36
2012-11-19 07:15:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(36): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 36, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\register.php:36
2012-11-19 07:16:55 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\register.php [ 36 ] in C:\xampp\htdocs\kohana\application\classes\Controller\register.php:36
2012-11-19 07:16:55 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(36): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\xampp\htdocs...', 36, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\register.php:36
2012-11-19 07:32:13 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'Kenny-tbula@future-proccesing.com' for key 'login' [ INSERT INTO `users` (`id`, `login`, `password`, `firstname`, `email`, `active`) VALUES (0, 'Kenny', 'asd', 'Tomasz', 'tbula@future-proccesing.com', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2012-11-19 07:32:13 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\kohana\application\classes\Model\user.php(58): Kohana_ORM->save()
#4 C:\xampp\htdocs\kohana\application\classes\Controller\register.php(22): Model_User->saveUser()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Register->action_addNewUser()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251