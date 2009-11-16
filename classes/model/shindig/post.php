<?php defined('SYSPATH') or die('No direct script access.');

class Model_Shindig_Post extends Sprig
{
	protected $_title_key = 'slug';
	protected $_table = 'posts';
	
	protected function _init()
	{
		$this->_fields += array(
			'id' => new Sprig_Field_Auto(array(
				'primary'=>TRUE,
			)),
			'title' => new Sprig_Field_Char(array(
				'label' => __('Post Title'),
				'empty' => FALSE,
			)),
			'slug' => new Sprig_Field_Char(array(
				'label' => __('Slug'),
				'empty' => FALSE,
			)),
			'status' => new Sprig_Field_Char(array(
				'label' => __('Post Status'),
				'choices' => Kohana::config('shindig.post.status'),
				'default' => 'publish',
				'empty' => FALSE,
			)),
			'type' => new Sprig_Field_Char(array(
				'label' => __('Post Type'),
				'choices' => Kohana::config('shindig.post.type'),
				'default' => 'publish',
				'empty' => FALSE,
			)),
			'post_content' => new Sprig_Field_Tinymce(array(
				'label' => __('Post Content'),
				'empty' => TRUE,
			)),
			'post_excerpt' => new Sprig_Field_Tinymce(array(
				'label' => __('Excerpt'),
				'empty' => TRUE,
			)),
			'author' => new Sprig_Field_Char(array(
				'label' => __('Author'),
				'empty' => TRUE,
				'choices' => Shindig::$authors,
				'default' => Shindig::$author,
			)),
			'created_on' => new Sprig_Field_Timestamp(array(
				'label' => __('Created On'),
				'format' => Kohana::config('shindig.time.format'),
				'default' => time(),
				'empty' => FALSE,
			)),
			'updated_on' => new Sprig_Field_Timestamp(array(
				'label' => __('Updated On'),
				'format' => Kohana::config('shindig.time.format'),
				'default' => time(),
				'empty' => FALSE,
			)),
			'tags' => new Sprig_Field_ManyToMany(array(
				'label' => __('Tags'),
				'model' => 'Shindig_Tag',
				'empty' => TRUE,
			)),
			
		);
	}
	
}