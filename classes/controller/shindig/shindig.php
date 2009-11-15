<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Shindig extends Controller_Template
{	
	public $template = 'shindig/admin/template';
	
	public function before()
	{
		// Authenticate 
		
		parent::before();
	}
}