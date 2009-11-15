<?php defined('SYSPATH') or die('No direct script access.');

class Model_Shindig_Tag extends Sprig
{
	protected $_title_key = 'tag';
	protected $_table = 'tags';
	
	protected function _init()
	{
		$this->_fields += array(
			'id' => new Sprig_Field_Auto(array(
				'column'=>'id',
				'primary'=>TRUE,
			)),
			'tag' => new Sprig_Field_Char(array(
				'label' => 'Tag',
			)),
			'slug' => new Sprig_Field_Char(array(
				'label' => 'Slug',
				'edit' => FALSE,
			)),
			'posts' => new Sprig_Field_ManyToMany(array(
				'model' => 'Shindig_Post',
			)),
		);
	}
}