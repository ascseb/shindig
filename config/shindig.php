<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'use_authors' => FALSE, 
	'blog' => array(
		'title' => 'My Shindig',
		'tagline' => 'Just another Shindig blog',
		'number_posts' => 10,
	),
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
		'format' => 'd m Y',
	),
);