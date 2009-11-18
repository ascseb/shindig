<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Blog extends Controller 
{
	public function action_posts()
	{
		$this->request->response = View::factory('shindig/posts')
			->set('use_excerpt', Kohana::config('blog.use_excerpt'))
			->bind('pagination', $pagination)
			->bind('posts', $posts);
			
		$search = Sprig::factory('shindig_post_search');
		$posts = $search->load(NULL, FALSE);	
		$pagination = $search->render_pagination();
	}
	
	public function action_post()
	{
		
	}
}