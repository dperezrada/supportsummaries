<?php
class Slide extends DataObject {

	static $singular_name = "Slide";
	static $plural_name = "Slides";

	static $db = array(
		"Title" => "Varchar",
		"Content" => "HTMLText",
		"ImagePosition" => "Varchar"
	);

	

	static $has_one = array(
		'SlidesPresentationPage' => 'SlidesPresentationPage',
		"Image" => "Image"
	);

	//Fields to show in the DOM
	static $summary_fields = array(
		"Title"
	);
	
	
	
	
	function getCMSFields_forPopup() {
		$ImagePositionProvider = array(
			"left" => "Left",
			"right" => "Right",
		);
			
		$ImagePosition = new DropdownField('ImagePosition','Image Position',$ImagePositionProvider);
		$ImagePosition->setEmptyString("Select position");

		$fields = new FieldSet(); 
		$fields->push( new TextField('Title',_t('Slide.TITLE',"Title")) ); 
		$fields->push( new SimpleTinyMCEField('Content',_t('Slide.CONTENT',"Content")) ); 
		$fields->push( $ImagePosition);
		$fields->push( new FileAttachmentField("Image",_t('Slide.IMAGE',"Image")) );
		
		return $fields;
	}
	
	
}