<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'use_authors' => FALSE, 
	'use_authentication' => TRUE,
	'categories' => array(
		'uncategoriezed' => 'Uncategorized',
		'news' => 'News',
		'articles' => 'Articles',
	),
	'post' => array(
		'status' => array(
			'draft' => 'Draft',
			'publish' => 'Publish',
		),
		'type' => array(
			'post' => 'Post',
			'page' => 'Page',
		),
	),
	'sidebars' => array(
		'default' => 'Default',
	),
	'time' => array(
		'format' => 'm/d/y',
	),
	'post_create_redirect' => array(
			'route' => 'shindig/admin',
			'action' => 'update',
	),
);