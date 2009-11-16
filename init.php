<?php defined('SYSPATH') or die('No direct script access.');

Route::set('shindig/blog', 'blog(/<slug>)')
	->defaults(array(
		'controller' => 'blog',
		'action'     => 'posts',
	));

Route::set('shindig/post', 'shindig((/<action>(/<id>)))')
	->defaults(array(
		'directory'  => 'shindig',
		'controller' => 'post',
		'action'     => 'list',
	));

Route::set('shindig/tinymce', 'tinymce(/<file>)', array('file'=>'.*?'))
	->defaults(array(
		'directory' => 'shindig',
		'controller' => 'tinymce',
		'action'	=> 'media', 		
	));	
