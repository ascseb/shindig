<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Tinymce extends Controller
{
	
	protected $_images = array('jpg','png','gif');
	
	
	public function action_media()
	{
		$string = $this->request->param('file');
		$ext = $this->get_extension($string);
		$this->display_file($this->strip_extension($string, $ext),$ext);
	}
	
	/**
	 * protected method for stripping extension off a string
	 *
	 * @param string $string	string to be processed
	 * @param string $ext		extension to strip off string
	 * @return string		 	returns string with extension stripped
	 */
	protected function strip_extension($string, $ext)
	{
		$ext_pos = 0 - strlen( '.'.$ext );
		$has_ext = ( substr($string,$ext_pos) == '.'.$ext ) ? TRUE : FALSE ;
		return ( $has_ext ) ? substr($string,0,$ext_pos) : $string;
	}
	
	/**
	 * Returns the extension of the file
	 *
	 * @param string $string
	 * @return string
	 */
	protected function get_extension($string)
	{
		$parts = explode('.', $string);
		return array_pop($parts);
	}
	
	/**
	 * Displays the file
	 *
	 * @param string $file		name of the file
	 * @param string $ext		extenion to search for
	 */
	protected function display_file( $file, $ext ){
		// set header
		header('Content-Type: ' . Kohana::config("mimes.$ext") );
		// include file
				
		$source = Kohana::find_file('views', 'tinymce/'.$file, $ext );
		
		if($source AND ! in_array($ext, $this->_images))
		{
			include $source;
		}
		
		if($source AND in_array($ext, $this->_images))
		{
			header('Content-length: '.filesize($source));
			$file = @ fopen($source, 'rb');
			if ($file) { 
				fpassthru($file); 
				exit; 
			} 
		} 
	}		
}