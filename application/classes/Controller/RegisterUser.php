<?php defined('SYSPATH') or die('No direct script access.');

    class Controller_RegisterUser extends Controller {

        public function action_registerForm()
        {
            $view = View::factory('RegisterUser');
            $this->response->body($view->render());
        }
        
        public function action_registerUser(){
            $userCommon = new Common_User();
            
            $login = trim($_POST['login']);
            $pass = trim($_POST['pass']);
            $firstname = trim($_POST['firstname']);
            $email = trim($_POST['email']);
            
            if($userCommon->validateData($login,$pass,$firstname,$email))
            {
                if($userCommon->ValidateUserData($login,$email,0))
                {
                    $user = new Model_User();
                    $user->setData($login,sha1($pass),$firstname,$email,FALSE);
              
                    if($userCommon->save($user))
                    {
                        $view = View::factory('Welcome');
                    }
                    else
                    {
                        $view = View::factory('RegisterUser');
                        $view->error = "DB save error";
                    }
                }
                else
                {
                    $view = View::factory('RegisterUser');
                    $view->error = $user->actionCode;
                }
            }
            else
            {
                $view = View::factory('RegisterUser');
                $view->usererror = "All fields are required.";
            }
            
            $this->response->body($view->render());
        }
    }
?>
