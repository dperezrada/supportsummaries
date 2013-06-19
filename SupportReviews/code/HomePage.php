<?php

class HomePage extends Page {
	static $singular_name = "Home";
	static $icon = "dospuntoceroCMSCore/images/treeicons/homepage";
	static $allowed_children = false;
	static $can_be_root = true;

	static $db = array(
	    'HomeText' => 'Varchar(255)'
	);

	function getCMSFields(){
	    $fields = parent::getCMSFields();
	    $fields->addFieldToTab('Root.Content.Main', new TextField('HomeText', 'Texto para el HomePage'));
	    return $fields;
	}

	function getLatestEdition(){
	    $set = DataObject::get('Edicion', '', '`Sort` DESC', '', 1);
	    return $set;
	}

	function getLatestResumen(){
	    $set = DataObject::get('ResumenDeEvidenciaEdicion', '', '`Sort` DESC', '', 1);
	    return $set;
	}
	
}
class HomePage_Controller extends Page_Controller {

	function init(){
		parent::init();
	}
	

}