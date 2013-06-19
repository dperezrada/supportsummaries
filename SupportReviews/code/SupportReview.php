<?php
class SupportReview extends DataObject Implements PermissionProvider {

	static $singular_name = "Support Review";
	static $plural_name = "Support Reviews";
	public $showImportForm = false;
	
	static $db = array(
		"Published" => "Boolean",
		"InProgress" => "Boolean",
		// main content 
		"Title" => "Varchar(255)",
		"Date" => "Date",
		"Summary" => "HTMLText",
		"Background" => "HTMLText",
		"AboutSummaryTable" => "HTMLText",
		"SummaryOfFindings" => "HTMLText",
		"RelevanceOfTheReview" => "HTMLText",
		"AdditionalInformation" => "HTMLText",

		// Sidebar
		"SummaryFor" => "HTMLText",
		"SummaryBasedOn" => "HTMLText",
		"Locale" => "Varchar",
		
		//new Filters
		"DateOfReview" => "Date",
		"TitleOfReview" => "Varchar(255)",
		"AuthorOfReview" => "Varchar(255)",
		"AuthorOfSummary" => "Varchar(255)"
	);
	static $has_one = array(
		'SRCategory' => 'SRCategory',
		'PDF' => 'File',
	);
	static $many_many = array(
		'Supporters' => 'Supporter',
	);


	static $searchable_fields = array(
		'Title',
		'Summary',
	);
		
	static $summary_fields = array(
		'Title',
		'Category',
		'PublicationStatus',
		'InProgress'
	);

	public static $indexes = array(
	    "fulltext (Title, Summary,Background, AboutSummaryTable,SummaryOfFindings, RelevanceOfTheReview, AdditionalInformation)"
	);


	static $field_labels = array(
		// 'Skills.Title' => 'Skills',
	);

	function getPublicationStatus(){
		return $this->Published ? _t('SupportReview.PUBLISHED',"Published") : _t('SupportReview.UNPUBLISHED',"Unpublished");
	}

	function getCategory(){
		if ($this->Locale == 'en_US') {
			return $this->SRCategory()->Title_EN;
		}else{
			return $this->SRCategory()->Title_ES;
		}
	}


	public function canView($member = null) {
		return true;
	}
	
	public function canCreate($member = null) {
		return true;
	}
	
	public function canEdit($member = null) {
		// if(!$member) $member = Member::currentUser();
		if(!$member) return false;
		
		return (
			Permission::checkMember(
				$member, 
				'EDIT_ALL_REFERENCES'
			)
		);
	}
	
	public function canDelete($member = null) {
		return $this->canEdit($member);
	}
	
	public function providePermissions() {
		return array(
			'EDIT_ALL_REFERENCES' => 'Edit all references'
		);
	}

	function getCMSFields() {
		$fields = parent::getCMSFields();
		$newDate = new DatePickerField('Date',_t('SupportReview.DATE',"Date"));
		$fields->replaceField('Date',$newDate);

		$DateOfReview = new DatePickerField('DateOfReview',_t('SupportReview.DATEOFREVIEW',"DateOfReview"));
		$fields->replaceField('DateOfReview',$DateOfReview);
		
		
		
		$CategoryOptions = new DropdownField('SRCategoryID','select category',$this->getSRCategoryOptions());
		$fields->replaceField('SRCategoryID',$CategoryOptions);

		$Supporter = new ManyManyDataObjectManager(
			$this,
			'Supporters',
			'Supporter',
			array(
				"Title_EN" => "Title"
			),
			'getCMSFields_forPopup'
		);

		$Supporter->setPermissions(
			array(
				"show"
			)
		);

		$fields->addFieldToTab( 'Root.Supporters', $Supporter );

		return $fields;
	}

	function Link(){
		return 'support-summaries/show/' . $this->URLSegment;
	}

	function getSRCategoryOptions(){
		if($Pages = DataObject::get('SRCategory')){
			if ($this->Locale == 'en_US') {
				return $Pages->map('ID', 'Title_EN', 'Please Select');
			}else{
				return $Pages->map('ID', 'Title_ES', 'Seleccionar');
			}
		}else{
			if ($this->Locale == 'en_US') {
				return array('No Categories found');
			}else{
				return array('No se encontraron categorias');
			}

		}
	}
	

	function onBeforeWrite(){
		parent::onBeforeWrite();
		$this->Locale = 'en_US';
	}


	public static function GradeShortCodeHandler($arguments,$caption = null,$parser = null) {

		if(empty($arguments['quality'])) {
			return;
		}
		$customise = array();
		$customise['Quality'] = $arguments['quality'];
		$customise = array_merge($customise,$arguments);
		//get our YouTube template
		$template = new SSViewer('GradeSC');
		//return the customised template
		return $template->process(new ArrayData($customise));
	}
}