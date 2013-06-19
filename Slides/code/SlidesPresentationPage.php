<?php
class SlidesPresentationPage extends Page {

	static $singular_name = "Slides Presentation";
	static $plural_name = "Slides Presentation";
	static $icon = "";
	static $allowed_children = array("SiteTree"); // set to string "none" or array of classname(s)
	static $default_child = ""; //one classname
	static $default_parent = null; // NOTE: has to be a URL segment NOT a class name
	static $can_be_root = true; //
	static $hide_ancestor = null; //dont show ancestry class
	
	static $db = array(
		
	);
	
	static $has_many = array(
		'Slides' => 'Slide'
	);
	
	function getCMSFields() {
		$fields = parent::getCMSFields();
		$Slide = new DataObjectManager(
			$this,
			'Slides',
			'Slide',
			array(
				"Title" => "Title",
				"Content" => "Content",
			),
			'getCMSFields_forPopup'
		);
		$fields->addFieldToTab( 'Root.Content.Slides', $Slide );
		
		return $fields;
	}
	
	
}

class SlidesPresentationPage_Controller extends Page_Controller {
	function init(){
		parent::init();
		Requirements::clear();
		Requirements::css("Slides/css/ribbon/styles/style.css");
		Requirements::javascript("Slides/js/script.js");
	}
	
}