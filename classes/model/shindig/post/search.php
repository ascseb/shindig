<?php defined('SYSPATH') or die('No direct script access.');

class Model_Shindig_Post_Search extends Sprig
{
	protected $pagination;
	
	public function load(Database_Query_Builder_Select $query = NULL, $limit = NULL)
	{
		if ( ! $query)
		{
			$query = DB::select()->order_by('id', 'DESC')->order_by('created_on', 'DESC');
		}
		if( ! $limit )
		{
			$limit = $this->limit;
		}

		$this->total_items = DB::select(DB::expr('COUNT(*) AS mycount'))->from('posts')->execute()->get('mycount');
		$this->pagination->setup(array(
  			'total_items'    => $this->total_items,
  			'items_per_page' => $limit,
  		));
  		$query->offset($this->pagination->offset);
  		  		
		return Sprig::factory('Shindig_Post')->load($query, $limit);
	}
	
	public function render_pagination()
	{
		return $this->pagination->render();
	}
	
	protected function _init()
	{
		$this->_fields += array(
			'query' => new Sprig_Field_Char(array(
				'in_db' => FALSE,
			)),
			'p' => new Sprig_Field_Integer(array(
				'in_db' => FALSE,
				'default' => 1,
			)),
			'limit' => new Sprig_Field_Integer(array(
				'in_db' => FALSE,
				'default' => Kohana::config('blog.posts_per_page'),
			)),
			'total_items' => new Sprig_Field_Integer(array(
				'in_db' => FALSE,
			)),
		);
		
		$this->pagination = Pagination::factory();
	}
	
}