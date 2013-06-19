<?php
class SupportReviewES extends SupportReview Implements PermissionProvider {

	static $singular_name = "Resumen Support";
	static $plural_name = "Resúmenes Support";
	
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
