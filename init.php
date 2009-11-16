<?php defined('SYSPATH') or die('No direct script access.');

Route::set('shindig/blog', 'blog(/<slug>)')
	->defaults(array(
		'controller' => 'blog',
		'action'     => 'posts',
	));

Route::set('shindig/admin/posts', 'shindig/admin/posts((/<id>)/<action>)', array('id' => '\d+'))
	->defaults(array(
		'directory'  => 'shindig',
		'controller' => 'post',
		'action'     => 'list',
	));

Route::set('shindig/admin', 'shindig/admin((/<id>)/<action>)', array('id' => '\d+'))	
	->defaults(array(
		'directory'  => 'shindig',
		'controller' => 'shindig',
		'action'     => 'list',
	));
	
Route::set('shindig/media', 'shindig/media(/<file>)', array('file'=>'.*?'))
	->defaults(array(
		'directory' => 'shindig',
		'controller' => 'media',
		'action'	=> 'get', 		
	));	
	
