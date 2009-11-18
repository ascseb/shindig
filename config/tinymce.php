<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'theme' => 'advanced',
	'plugins' => 'safari,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,imagemanager,filemanager',

	'theme_advanced_buttons1' => 'bold,italic,underline,strikethrough|bullist,numlist,|,outdent,indent,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,fontselect,fontsizeselect',
	'theme_advanced_buttons2' => 'link,unlink,anchor,|,undo,redo,|,hr,removeformat,|,cut,copy,paste,pastetext,pasteword,|,fullscreen,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,search,replace',
	'theme_advanced_buttons3' => '',
	//'theme_advanced_buttons1' => "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
	//'theme_advanced_buttons2' => "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
	//'theme_advanced_buttons3' => "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
	//'theme_advanced_buttons4' => "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
	'theme_advanced_toolbar_location' => "top",
	'theme_advanced_toolbar_align' => "left",
	'theme_advanced_statusbar_location' => "bottom",
	'theme_advanced_resizing' => true,

	// Example content CSS (should be your site CSS)
	// 'content_css' => "css/example.css",

	// Drop lists for link/image/media/template dialogs
	'template_external_list_url' => "js/template_list.js",
	'external_link_list_url' => "js/link_list.js",
	'external_image_list_url' => "js/image_list.js",
	'media_external_list_url' => "js/media_list.js",

	/**  
	 * TODO : Update Sprig_Field_Tinymce to support this option
	 * Need to convert the value to a JS array
	 */ 
	// Replace values for the template plugin
	//'template_replace_values' => array(
	//	'username' => "Some User",
	//	'staffid' => "991234"
	//),

);