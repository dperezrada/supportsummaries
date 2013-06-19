<?php
class SupportReviewEN extends SupportReview Implements PermissionProvider {

	static $singular_name = "Support Review";
	static $plural_name = "Support Reviews";
	
	public function providePermissions() {
		return array(
			'EDIT_ALL_REFERENCES' => 'Edit all references'
		);
	}
	
	function onBeforeWrite(){
		parent::onBeforeWrite();
		$this->Locale = 'en_US';
	}	
}
