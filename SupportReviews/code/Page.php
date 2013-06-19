<?php
class Page extends SiteTree {

	static $allowed_children = array("SiteTree"); // set to string "none" or array of classname(s)
	static $default_child = ""; //one classname
	static $default_parent = null; // NOTE: has to be a URL segment NOT a class name
	static $can_be_root = true; //
	static $hide_ancestor = null; //dont show ancestry class
	
	static $defaults = array(
		'Locale' => 'en_US'
	);
	
}

class Page_Controller extends ContentController {

	function SearchForm() {
		$fields = new FieldSet(
			new TextField("Search","")
		);
		$actions = new FieldSet(
			new FormAction('results', _t('Page.SEARCH',"Search"))
		);

		return new SearchForm($this, "SearchForm", $fields, $actions);
	}

	function init(){
		parent::init();

		Requirements::javascript("dospuntoceroCMSCore/javascript/jquery.min.js");
		
		Requirements::javascript($this->ThemeDir()."/javascript/superfish.js");
		Requirements::javascript($this->ThemeDir()."/javascript/supersubs.js");
		Requirements::javascript($this->ThemeDir()."/javascript/core.js");
		//reviews RSS
		RSSFeed::linkToFeed($this->Link() . "rss", "SupportReviews feed");
		if($this->dataRecord->hasExtension('Translatable')) {
			i18n::set_locale($this->dataRecord->Locale);
		}
	}

	//this is not working...
	function rss() {
		$supportReviews = DataObject::get('SupportReview');
		$rss = new RSSFeed($supportReviews, '$supportReviews->Link', "Support reviews feed");
		$rss->outputToBrowser();
	}



	public function Categories() {
		return DataObject::get("SRCategory");
	}



	public function SupportDocsPage() {
		return DataObject::get_one("SupportDocsPage");
	}
 //only get reviews on the search.
	public function results($data, $form){

		$SupportDocsPage = DataObject::get_one("SupportDocsPage");
		$data = $_REQUEST; 
		$query = htmlspecialchars($data['Search'], ENT_QUOTES,'UTF-8'); 
		$locale = $this->Locale;
//		$pages = DataObject::get("SiteTree","MATCH (Title,Content) AGAINST ('$query' IN BOOLEAN MODE) AND `Locale` ='".$locale."'");
		$Reviews = DataObject::get("SupportReview","MATCH (Title, Summary,Background, AboutSummaryTable,SummaryOfFindings, RelevanceOfTheReview, AdditionalInformation) AGAINST ('$query' IN BOOLEAN MODE) AND `Published` = 1 AND `Locale` ='".$locale."'");
		$searchresults = new DataObjectSet();
//		$searchresults->merge($pages);
		$searchresults->merge($Reviews);

		if(!empty($data['Search'])){
			$templateData = array(
				'Results' => $searchresults,
				'SearchQueryTitle' => $form->getSearchQuery($data),
				"SupportURL" => $SupportDocsPage->URLSegment
			);

			return $this->customise($templateData)->renderWith(
				array(
					'SearchResults'
				)
			);
		} else {
			Director::redirectBack();
			return; 
	}

	return $this->customise($data)->renderWith(array('Search_results','Page')); 
}


	function PDF(){
		Requirements::block($this->ThemeDir()."/css/SupportReviews.css");
		Requirements::css($this->ThemeDir()."/css/SupportReviewsForPrint.css");
	}
}