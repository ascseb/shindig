<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Admin extends Controller_Shindig_Shindig  
{	
	public function action_dashboard()
	{
		$this->template->content = 'shindig blog';
	}
}