<?php defined('SYSPATH') or die('No direct script access.');

class Controller_UserPanel extends Controller_main {
    
    public function action_login()
    {
        $login = trim($_POST['login']);
        $pass = sha1(trim($_POST['pass']));
        $userCommon = new Common_User();
        $user = $userCommon->getUserByLogin($login);
        
        if(isset($user->password))
        {
            if($user->password === $pass)
            {
                $view = View::factory('UserPanel');
                $avatar = new Model_Avatar($user->id);
                $this->avatar = $avatar->avatar;
                $this->login = $user->login;
            }
            else
            {
//                $view = View::factory('Welcome');
//                $view->message = "Password incorrect";
//                $this->response->body($view->render());
            }
        }
        else
        {
//            $view = View::factory('Welcome');
//            $view->message = "Login doesn't exists";
//            $this->response->body($view->render());
        }
        $this->content = $view->render();
        parent::action_index();
    }
    
//    private function loadAvatars()
//    {
//        $avatars = ORM::factory('avatar')
//                ->find_all()
//                ->as_array();
//        return $avatars;
//    }
    
//    public function action_addNewAvatar()
//    {
//        $view = View::factory('userPanel');
//        if(isset($_FILES['avatar']))
//        {
//            $avatar = new Model_Avatar();
//            $avatar->setData($_FILES['avatar'], $_FILES['avatar']['name']);
//            try
//            {
//                $avatar->saveAvatar();
//            }
//            catch(Exception $ex)
//            {
//                $view->error = $ex->getMessage();
//            }
//        }
//        else
//        {
//            $view->error = "File not provided";
//        }
//        $view->avatars = $this->loadAvatars();
//        $this->response->body($view->render());
//    }
}

?>
