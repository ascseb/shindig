<?php defined('SYSPATH') or die('No direct script access.');

Class Sprig_Field_Pagination extends Sprig_Field_Char
{
	public function input($name, $value, array $attr = NULL)
	{
		return $value->render();
	}
	
}