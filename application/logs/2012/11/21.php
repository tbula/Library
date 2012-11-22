<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-21 01:59:20 --- CRITICAL: ErrorException [ 1 ]: Interface 'IRegister' not found ~ APPPATH\classes\Controller\registerUser.php [ 3 ] in :
2012-11-21 01:59:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 02:00:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function validateData() ~ APPPATH\classes\Controller\registerUser.php [ 18 ] in :
2012-11-21 02:00:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 02:00:42 --- CRITICAL: ErrorException [ 1 ]: Interface 'IRegisterable' not found ~ APPPATH\classes\Model\user.php [ 3 ] in :
2012-11-21 02:00:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 02:00:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: password ~ APPPATH\classes\Model\user.php [ 10 ] in C:\xampp\htdocs\kohana\application\classes\Model\user.php:10
2012-11-21 02:00:53 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\user.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\registerUser.php(20): Model_User->__construct(0, 'vbn', 'f10e2821bbbea52...', 'vbn', 'vbn', NULL, false)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_RegisterUser->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_RegisterUser))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\user.php:10
2012-11-21 02:01:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: acitve ~ APPPATH\classes\Model\user.php [ 14 ] in C:\xampp\htdocs\kohana\application\classes\Model\user.php:14
2012-11-21 02:01:06 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\user.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\registerUser.php(20): Model_User->__construct(0, 'vbn', 'f10e2821bbbea52...', 'vbn', 'vbn', NULL, false)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_RegisterUser->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_RegisterUser))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\user.php:14
2012-11-21 02:01:13 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_User::__construct(), called in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php on line 46 and defined ~ APPPATH\classes\Model\user.php [ 6 ] in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-21 02:01:13 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\user.php(6): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Model_User->__construct(NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Model\user.php(19): Kohana_ORM::factory('user')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\registerUser.php(29): Model_User->ValidateUserData()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_RegisterUser->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_RegisterUser))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\classes\Model\user.php:6
2012-11-21 03:34:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::login() ~ APPPATH\classes\Controller\welcome.php [ 21 ] in :
2012-11-21 03:34:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 03:37:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\user.php [ 8 ] in C:\xampp\htdocs\kohana\application\classes\Model\user.php:8
2012-11-21 03:37:22 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Model\user.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Controller\registerUser.php(21): Model_User->setData('Kenny', '056eafe7cf52220...', 'Tomasz', 'tbula@future-pr...', false)
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_RegisterUser->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_RegisterUser))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\kohana\application\classes\Model\user.php:8
2012-11-21 03:39:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Avatar' not found ~ APPPATH\classes\Controller\userPanel.php [ 16 ] in :
2012-11-21 03:39:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 03:41:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_userPanel::response() ~ APPPATH\classes\Controller\userPanel.php [ 31 ] in :
2012-11-21 03:41:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 03:42:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_userPanel::response() ~ APPPATH\classes\Controller\userPanel.php [ 31 ] in :
2012-11-21 03:42:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 04:09:10 --- CRITICAL: ErrorException [ 2 ]: file_get_contents() expects parameter 1 to be a valid path, array given ~ APPPATH\classes\Model\avatar.php [ 16 ] in :
2012-11-21 04:09:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\avatar.php(16): file_get_contents(Array)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\userPanel.php(20): Model_Avatar->setData(Array, 'kenny.jpg')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_userPanel->action_addNewAvatar()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_userPanel))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in :
2012-11-21 04:09:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\avatar.php [ 16 ] in :
2012-11-21 04:09:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 04:27:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function loadAvatars() ~ APPPATH\classes\Controller\userPanel.php [ 43 ] in :
2012-11-21 04:27:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 04:38:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: avatars ~ APPPATH\views\userPanel.php [ 25 ] in C:\xampp\htdocs\kohana\application\views\userPanel.php:25
2012-11-21 04:38:08 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\userPanel.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 25, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(27): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\userPanel.php:25
2012-11-21 05:26:34 --- CRITICAL: Kohana_Exception [ 0 ]: The decryptImage property does not exist in the Model_Avatar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:699
2012-11-21 05:26:34 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('decryptImage', Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\avatar.php(15): Kohana_ORM->__set('decryptImage', Array)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\userPanel.php(47): Model_Avatar->setData(Array, 'kenny.jpg')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_userPanel->action_addNewAvatar()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_userPanel))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:699
2012-11-21 05:27:28 --- CRITICAL: Kohana_Exception [ 0 ]: The decryptImage property does not exist in the Model_Avatar class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:699
2012-11-21 05:27:28 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('decryptImage', Array)
#1 C:\xampp\htdocs\kohana\application\classes\Model\avatar.php(15): Kohana_ORM->__set('decryptImage', Array)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\userPanel.php(47): Model_Avatar->setData(Array, 'kenny.jpg')
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_userPanel->action_addNewAvatar()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_userPanel))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:699
2012-11-21 06:16:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\mainView.php [ 40 ] in C:\xampp\htdocs\kohana\application\views\mainView.php:40
2012-11-21 06:16:53 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\mainView.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 40, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(8): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\mainView.php:40
2012-11-21 07:10:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_mainController' not found ~ APPPATH\classes\Controller\userPanel.php [ 3 ] in :
2012-11-21 07:10:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 07:10:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::getUserByLogin() ~ APPPATH\classes\Controller\userPanel.php [ 9 ] in :
2012-11-21 07:10:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 07:11:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Common_User' not found ~ APPPATH\classes\Controller\userPanel.php [ 9 ] in :
2012-11-21 07:11:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 07:15:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_UserPanel::response() ~ APPPATH\classes\Controller\UserPanel.php [ 33 ] in :
2012-11-21 07:15:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 07:22:00 --- CRITICAL: View_Exception [ 0 ]: The requested view MainView could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137
2012-11-21 07:22:00 --- DEBUG: #0 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('MainView')
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('MainView', NULL)
#2 C:\xampp\htdocs\kohana\application\classes\Controller\Main.php(19): Kohana_View::factory('MainView')
#3 C:\xampp\htdocs\kohana\application\classes\Controller\UserPanel.php(32): Controller_Main->action_index()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_UserPanel->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_UserPanel))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\system\classes\Kohana\View.php:137