<?php
class SRSubCategory extends DataObject {

	static $singular_name = "SRSubCategory";
	static $plural_name = "SRSubCategorys";

	static $db = array(
		"Title_ES" => "Varchar",
		"Title_EN" => "Varchar",
	);

	static $has_one = array(
		'SRCategory' => 'SRCategory',
	);

	static $has_many = array(
		'SupportReviews' => 'SupportReview',
	);

//Fields to show in the DOM

	function getTitle(){
			return $this->Title_EN." (".$this->Title_ES.")";
	}

	static $summary_fields = array(
		'Title_EN' => 'Title',
		"Title_ES" => "Título",
	);

}