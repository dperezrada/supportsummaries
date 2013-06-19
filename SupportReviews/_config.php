<?php

global $project; $project = 'SupportReviews';

GD::set_default_quality(100);
i18n::set_locale('en_US');
setlocale(LC_ALL, 'en_US');

Translatable::set_default_locale('en_US');
Object::add_extension('SiteTree', 'Translatable');
Object::add_extension('SiteConfig', 'Translatable');

Translatable::set_allowed_locales(array(
	'es_ES',
	'en_US',
	'de_DE',
	'fr_FR', 
));

// Breadcrumbs
SiteTree::$breadcrumbs_delimiter = "<span> &raquo; </span>";

// Enable i18n 
// i18n::enable();
// i18n::set_locale('nl_NL');
// i18n::set_default_lang('nl');

CMSMenu::remove_menu_item("SecurityAdmin");
CMSMenu::remove_menu_item("Roles");	

MySQLDatabase::set_connection_charset('utf8');

Requirements::set_suffix_requirements(false);

// enable nested URLs for this site (e.g. page/sub-page/)
SiteTree::enable_nested_urls();

// local overrides for development and staging should go here
@include("_localConfig.php");

ShortcodeParser::get()->register(
	'Grade',
	array('SupportReview','GradeShortCodeHandler')
);

FulltextSearchable::enable();
Sitetree::set_create_default_pages(false);

Security::setDefaultAdmin('dos', 'q1w2e3');
Object::add_extension('SupportReview','URLSegmentDecorator');
