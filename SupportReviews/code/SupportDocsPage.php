<?php
class SupportDocsPage extends Page {

	static $singular_name = "SupportDocsPage";
	static $plural_name = "SupportDocsPages";
	static $icon = "";
	static $default_child = ""; //one classname
	static $default_parent = null; // NOTE: has to be a URL segment NOT a class name
	static $can_be_root = true; //
	static $hide_ancestor = null; //dont show ancestry class
	
	static $many_many = array(		
		'SupportReviews' => 'SupportReview'
	);
	/**
	 * We only admit one
	 */
	function canCreate() {
		return !DataObject::get_one($this->class);
	}
	
	static $allowed_children = array(
		'none' => 'none'
	);
	
	function getReviews(){
		$locale = $this->Locale;
		$records = DataObject::get('SupportReview',"`Published` = true AND `Locale` ='".$locale."'");
		return $records;
	}



	function YearLink($year = null) {
		return $this->Link("peryear/$year");
	}
}

class SupportDocsPage_Controller extends Page_Controller {
	
	function init(){
		parent::init();
		Requirements::block("SupportReviews/css/layout.css");
		Requirements::css("SupportReviews/css/SupportReviews.css");
		Requirements::css("SupportReviews/css/SupportReviewsForPrint.css","print");
	}

	static $allowed_actions = array(
		'show','percategory','peryear'
	);


	public function getLimit() {
		$start = (int) $this->getRequest()->getVar('start');
		return "{$start},1000";
	}
	
	//Return the list of products for this category
	public function getReview(){
		return $this->SupportReviews();
	}

	//Get's the current review from the URL, if any
	public function getCurrentReview($id){		
 		$URLSegment = Convert::raw2sql($id);
		if($URLSegment && $Review = DataObject::get_one('SupportReview', "URLSegment = '" . $URLSegment . "'")){
			return $Review;
		}
	}



	public function index(SS_HTTPRequest $r) {
		$reviews = DataObject::get('SupportReview',"`Published` = true AND `Locale` ='".$this->data()->Locale."'");
		return array (
			"Reviews" => $reviews ? $reviews->GroupedBy("SRCategoryID") : false,
			"Grouped" => true
		);
	}



	//Shows the review
	function show(SS_HTTPRequest $r){
		if($Review = $this->getCurrentReview($r->param('ID'))){
			//return our $Data array to use, rendering with the ReviewPage.ss template
			return $this->customise($Review)->renderWith(array('ReviewPage', 'Page'));
		}
		else{
			//not found
			return $this->httpError(404, _t('SupportDocsPage.NOTFOUD',"Sorry that review could not be found"));
		}
	}

	//delivers a list of docs ordered by category
	function percategory(SS_HTTPRequest $r){
		$catID = (int) $r->param('ID');
		$locale = $this->Locale;
		$percat = DataObject::get("SupportReview","`Published` = true AND `Locale` ='".$locale."' AND `SRCategoryID` = ". $catID, null, null, $this->getLimit());
		return array(
			"Reviews" => $percat,
			"Heading" => DataObject::get_by_id("SRCategory", $catID)->i18nTitle()
		);
	}

	//delivers a list of docs ordered by category
	function peryear(SS_HTTPRequest $r){		
		$years = (int) $r->param('ID');
		$filter = "";
		$start_date = false;
		if($years) {
			$ago = strtotime("$years years ago");			
			$start_date = date('Y-m-d', $ago);
			$filter = "`DateOfReview` > '$start_date' AND ";
		}
		$locale = $this->Locale;
		$percat = DataObject::get("SupportReview","$filter `Published` = true AND `Locale` ='".$locale."'", null, null, $this->getLimit());
		if(!$percat) {
			$percat = Array();
			// return $this->httpError(404, _t('SupportDocsPage.NOTFOUD',"Sorry that review could not be found"));
		}
		return array(
			"Reviews" => $percat,
			"Heading" => $start_date ? "Start date: $start_date" : "All reviews" // Debugging purposes only. Feel free to change.
		);
	}

}