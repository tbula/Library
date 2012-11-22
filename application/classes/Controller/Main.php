<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller_mainController
 *
 * @author tbula
 */
class Controller_Main extends Controller  {
    
    protected $content;
    protected $avatar;
    protected $login;
    
    public function action_index()
    {
        $view = View::factory('Main');
        
        $view->content = $this->content;
        $view->avatar = $this->avatar;
        $view->login = $this->login;
        $this->response->body($view->render());
    }
}

?>
