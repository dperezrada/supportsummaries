<?php
class Supporter extends DataObject {

	static $singular_name = "Supporter";
	static $plural_name = "Supporters";
	
	static $db = array(
		"Title_EN" => "Varchar",
		"Description_EN" => "HTMLText", 
		"SupporterURL" => "Varchar",
		"Title_ES" => "Varchar",
		"Description_ES" => "HTMLText"
	);
	
	static $summary_fields = array(
		"Title_EN" => "Title",
		"Title_ES" => "Título"
	);
	
	static $belongs_many_many = array(
		'SupportReviews' => 'SupportReview',
	);

	static $has_one = array(
		"SupporterImage" => "Image",
	);
	

	function getCMSFields() {
      $fields = new Fieldset(); 

      $fields->push(
			new TabSet("Supporter",
				$tabEN = new Tab('EN',
					new TextField('Title_EN',_t('Supporter.TITLE_EN',"English title")),
					new HTMLEditorField('Description_EN',_t('Supporter.DESCRIPTION_EN',"English Description"))
				),
				$tabES = new Tab('ES',
					new TextField('Title_ES',_t('Supporter.TITLE_ES',"Spanish title")),
					new HTMLEditorField('Description_ES',_t('Supporter.DESCRIPTION_ES',"Spanish Description"))
				),
				$tabGRAL = new Tab('GENERAL',
					new TextField('SupporterURL',_t('Supporter.SUPPORTERURL',"SupporterURL")),
					new FileAttachmentField('SupporterImage',_t('SupportReview.SUPPORTERIMAGE',"Supporter Image"))
				)
		));
		return $fields;
	}
	
}
