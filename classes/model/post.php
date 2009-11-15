<?php defined('SYSPATH') or die('No direct script access.');

class Model_Shindig_Post extends Sprig
{
	protected $_title_key = 'slug';
	protected $_table = 'posts';
	
	protected function _init()
	{
		$this->_fields += array(
			'id' => new Sprig_Field_Auto(array(
				'column'=>'id',
				'primary'=>TRUE,
			)),
			'title' => new Sprig_Field_Char(array(
				'label' => 'Post Title',
			)),
			'slug' => new Sprig_Field_Char(array(
				'label' => 'Slug',
			)),
			'status' => new Sprig_Field_Char(array(
				'label' => 'Post Status',
				'choices' => Kohana::config('shindig.post.status'),
				'default' => 'publish',
			)),
			'type' => new Sprig_Field_Char(array(
				'label' => 'Post Type',
				'choices' => Kohana::config('shindig.post.type'),
				'default' => 'publish',
			)),
			'content' => new Sprig_Field_Tinymce(array(
				'label' => 'Post Content',
			)),
			'excerpt' => new Sprig_Field_Tinymce(array(
				'label' => 'Post Content',
			)),
			'author' => new Sprig_Field_Char(array(
				'label' => 'Author',
			)),
			'created_on' => new Sprig_Field_Timestamp(array(
				'label' => 'Created On',
				'format' => Kohana::config('shindig.time.format'),
				'default' => time(),
			)),
			'updated_on' => new Sprig_Field_Timestamp(array(
				'label' => 'Updated On',
				'format' => Kohana::config('shindig.time.format'),
				'default' => time(),
			)),
			'tags' => new Sprig_Field_ManyToMany(array(
				'model' => 'Shindig_Tag',
			)),
			
		);
	}
	
}