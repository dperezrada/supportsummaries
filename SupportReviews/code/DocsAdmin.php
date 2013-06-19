<?php
class DocsAdmin extends ModelAdmin {

	static $url_segment = "docsadmin";
	static $menu_title = "Docs Admin";
	public $showImportForm = false;

	static $managed_models = array(
		"SupportReviewEN",
		"SupportReviewES",
		"SRCategory",
		"Supporter"
	);


	public function Admin(){
		return Permission::check("ADMIN");
	}


	public function SearchClassSelector() {
	    return "dropdown";
	}

  public function init()
  {
		parent::init();
		Requirements::javascript('dataobject_manager/javascript/facebox.js');
		Requirements::css('dataobject_manager/css/facebox.css');
		Requirements::css('mysite/css/model_admin_improvements.css');
		Requirements::css("dospuntoceroCMSCore/css/DospuntoceroCMS.css");
		Requirements::css(CMS_DIR . '/css/ModelAdmin.css'); // standard layout formatting for management UI
		Requirements::css(CMS_DIR . '/css/silverstripe.tabs.css'); // follows the jQuery UI theme conventions		
  }
}