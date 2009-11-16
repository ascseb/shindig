<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Post extends Controller
{
	
	public function before()
	{
		if( Kohana::config('shindig.use_authentication') AND ! Shindig::$has_auth )
		{
			throw new Shindig_Exception(__('Unauthorized Access'));	
		}
		parent::before();
	}
	
	/**
	 * List posts
	 *
	 */
	public function action_list()
	{
		$this->request->response = View::factory('shindig/admin/list_posts')
			->bind('posts', $posts);

		/**
		 * TODO : Change this to use model lease_search
		 */	
			
		$posts = Sprig::factory('shindig_post')->load(NULL, FALSE);
	}
	
	/**
	 * Create a new post
	 *
	 */
	public function action_create()
	{
		$this->request->response = View::factory('shindig/admin/edit_post')
			->set('form_title', __('Create New Post'))
			->set('time_field', 'created_on')
			->bind('errors', $errors)
			->bind('post', $post);
			
		$post = Sprig::factory('shindig_post');
				
		if( isset($_POST['shindig_post']) )
		{
			
			echo Kohana::debug($_POST);
			
			$post->values($_POST);
			
			try 
			{
				/*
				if ($tags = Arr::get($_POST, 'tags'))
				{
					foreach ($tags as $tag)
					{
						// check to see if tag exsists. 
						// Get id if it does, create it if it doesn't
					}
				}
				*/
				
				$post->create();
				
			}
			catch( Validate_Exception $e )
			{
				$errors = $e->array->errors('shindig/crud');
			}
		}
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