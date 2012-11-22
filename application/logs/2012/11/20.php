<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-20 04:42:05 --- CRITICAL: Kohana_Exception [ 0 ]: The pass property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:600
2012-11-20 04:42:05 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('pass')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(25): Kohana_ORM->__get('pass')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:600
2012-11-20 04:46:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password ~ APPPATH\classes\Controller\welcome.php [ 20 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:20
2012-11-20 04:46:54 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:20
2012-11-20 04:48:26 --- CRITICAL: Kohana_Exception [ 0 ]: The pass property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:600
2012-11-20 04:48:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('pass')
#1 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(25): Kohana_ORM->__get('pass')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:600
2012-11-20 04:48:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::factgory() ~ APPPATH\classes\Controller\welcome.php [ 32 ] in :
2012-11-20 04:48:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-20 04:52:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::factgory() ~ APPPATH\classes\Controller\welcome.php [ 39 ] in :
2012-11-20 04:52:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :