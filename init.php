<?php defined('SYSPATH') or die('No direct script access.');

Route::set('shindig/blog', 'blog(/<slug>)')
	->defaults(array(
		'controller' => 'blog',
		'action'     => 'posts',
	));

Route::set('shindig/admin', 'shindig(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'directory'  => 'shindig',
		'controller' => 'admin',
		'action'     => 'dashboard',
	));
	