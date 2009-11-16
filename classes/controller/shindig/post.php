<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Post extends Controller
{
	/**
	 * List posts
	 *
	 */
	public function action_list()
	{
		$this->request->response = 'List posts';
	}
	
	/**
	 * Create a new post
	 *
	 */
	public function action_create()
	{
		$this->request->response = View::factory('shindig/post/edit')
			->bind('post', $post);
			
		$post = Sprig::factory('shindig_post');
	}
	
	/**
	 * Update an existing post
	 *
	 */
	public function action_update()
	{
		$this->request->response = 'Update post';
	}
	
}