<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
            $view = View::factory('Welcome');
            $this->response->body($view->render());
	}
} // End Welcome
