<?php

class BaseConfig extends DataObjectDecorator {

	function extraStatics() {
		return array(
			'db' => array(
				'ContactInfo' => 'HTMLText',
				"ContactInfoEmail" => "Varchar(255)",
				"ContactInfoPhone" => "Varchar(25)",
				"ContactInfoDescription" => "Text",
				'GMapsApiKey' => 'Varchar(255)',
				'GAnalitycsApiKey' => 'Varchar(255)',
			),
		);
	}

	public function updateCMSFields(FieldSet &$fields) {
		
		$fields->removeByName('Theme');

		$contactDetailsTab = _t('DospuntoceroCMSCore.CONTACTDETAILSTAB',"ContactDetails");			

		$fields->addFieldsToTab('Root.'.$contactDetailsTab, array(
			new HeaderField(_t('DospuntoceroCMSCore.CONTACTDETAILSINFO',"this information will appear in the footer of every page"), '4'),
			new HTMLEditorField('ContactInfo', _t('DospuntoceroCMSCore.CONTACTINFO',"ContactInfo")),
			new TextField('ContactInfoEmail',_t('BaseConfig.CONTACTINFOEMAIL',"Contact info Email")),
			new TextField('ContactInfoPhone',_t('BaseConfig.CONTACTINFOPHONE',"Contact info Phone")),
			new TextareaField('ContactInfoDescription',_t('BaseConfig.CONTACTINFODESCRIPTION',"Contact info Description"))
		));
		
		$fields->addFieldsToTab('Root.Main', array(
			new HeaderField(_t('DospuntoceroCMSCore.GMAPSAPIKEYTITLE',"google maps api key"), '4'),
			new TextField('GMapsApiKey',_t('DospuntoceroCMSCore.GMAPSAPIKEY',"Google maps api key is needed if you want to add maps to your site. <a target='_blank' href='http://code.google.com/intl/es/apis/maps/signup.html'>get yours here</a>")),
			new HeaderField(_t('DospuntoceroCMSCore.GANALITYCSAPIKEYTITLE',"google analitycs api key"), '4'),
			new TextField('GAnalitycsApiKey',_t('DospuntoceroCMSCore.GANALITYCSAPIKEY',"Google Analitycs api key is needed for website tracking"))			
		));
		
	}
}