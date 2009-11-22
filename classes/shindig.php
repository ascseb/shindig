<?php defined('SYSPATH') or die('No direct script access.');

class Shindig
{
	public static $has_auth = FALSE;
	public static $authors = array();
	public static $author = '';
	
	
	public static function load_authors()
	{
		$authors = Sprig::factory('user')->load(NULL, FALSE);
		
		foreach( $authors as $i=>$a)
		{
			shindig::$authors[$a->id] = $a->username;
		}
		
	}
	
	public static function page_menu()
	{
		return Sprig::factory('shindig_post_search')->load_page_menu();
	}
	
}