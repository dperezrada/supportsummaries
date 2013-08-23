<?php
class SRCategory extends DataObject {

	static $singular_name = "Support Review Category";
	static $plural_name = "Support Review Categories";

	static $db = array(
		"Title_ES" => "Varchar",
		"Title_EN" => "Varchar",
		"Title_EN_URL" => "Varchar",
		"Title_ES_URL" => "Varchar",
	);
	
	static $has_many = array(
	//	'SRSubCategories' => 'SRSubCategory',
		"SupportReviews" => "SupportReview",
	);
	
	//Fields to show in the DOM

	static $summary_fields = array(
		'Title_EN' => 'Title',
		"Title_ES" => "Título",
	);
	
	function i18nTitle(){

		if (i18n::get_locale() == 'en_US') {
			return $this->Title_EN;
		}else{
			return $this->Title_ES;
		}
	}


	public function Link() {
		return DataObject::get_one("SupportDocsPage")->Link("percategory/$this->ID");
	}

	public function SearchLink() {
		$year = isset($_GET['year']) ? $_GET['year'] : null;
		$search = isset($_GET['Search']) ? $_GET['Search'] : null;
		return "/home/SearchForm?Search=$search&category=$this->ID&year=$year";
	}


	public function Current() {
		$category = isset($_GET['category']) ? $_GET['category'] : null;
		return $category == $this->ID;
		// $r = Controller::curr()->getRequest();
		// return $r->param('Action') == "percategory" && $r->param('ID') == $this->ID;
	}
	
	
	
}