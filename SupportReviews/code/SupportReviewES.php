<?php
class SupportReviewES extends SupportReview Implements PermissionProvider {

	static $singular_name = "Resumen SUPPORT";
	static $plural_name = "Resúmenes SUPPORT";
	
	public function providePermissions() {
		return array(
			'EDIT_ALL_REFERENCES' => 'Edit all references'
		);
	}
	
	function onBeforeWrite(){
		parent::onBeforeWrite();
		$this->Locale = 'es_ES';
	}
}
