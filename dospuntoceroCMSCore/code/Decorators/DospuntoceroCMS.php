<?php

class DospuntoceroCMS extends LeftAndMainDecorator{
	
	function alternateAccessCheck() {

		// html display simplification
		// temporarily unset this
		$lines  = array('undo','redo','pastetext','separator','bold','italic','underline','strikethrough','hr','separator','formatselect','separator','bullist','numlist','outdent','indent','separator','blockquote','ssimage','ssflash','sslink','unlink','anchor','separator','advcode');
		$config = HtmlEditorConfig::get('cms');
		$config->setButtonsForLine(1, $lines);
		$config->setButtonsForLine(2, null);
		$config->setButtonsForLine(3, null);


		$config->enablePlugins('pagebreak');
		HtmlEditorConfig::get('cms')->insertButtonsBefore('bold', 'pagebreak'); // positions plugin*/
		$config->setOption('pagebreak_separator','<div class="pagebreak"><img src="sapphire/thirdparty/tinymce/plugins/pagebreak/img/trans.gif" mce_src="sapphire/thirdparty/tinymce/plugins/pagebreak/img/trans.gif" class="mcePageBreak mceItemNoResize"><br></div>');


		$config->enablePlugins('template');
		HtmlEditorConfig::get('cms')->insertButtonsBefore('bold', 'template'); // positions plugin*/
		$config->setOption('template_external_list_url','dospuntoceroCMSCore/javascript/template_list.js');


		// added to allow shortcodes to function properly
		$config->setOption('forced_root_block',false);
		$config->setOption('verify_html', true); 

		HtmlEditorConfig::get('cms')->setOption('theme_advanced_blockformats', 'p,h1,h2,h3,h4'); 

		// Requirements::clear();

		Requirements::block("cms/css/cms_right.css");
		Requirements::block("cms/css/cms_left.css");
		Requirements::block("cms/css/editor.css");
		

		Requirements::block("sapphire/css/TreeDropdownField.css");
		Requirements::block("cms/css/typography.css");
		Requirements::block("cms/css/layout.css");
		Requirements::block("sapphire/css/Form.css");
		Requirements::block("sapphire/css/SilverStripeNavigator.css");
		Requirements::block("sapphire/css/TableListField.css");

		Requirements::block("userforms/css/FieldEditor.css");
		Requirements::block("sapphire/thirdparty/tabstrip/tabstrip.css");

		Requirements::block("sapphire/thirdparty/greybox/greybox.css");
		Requirements::block("sapphire/javascript/tree/tree.css");

		Requirements::block("sapphire/css/SelectionGroup.css");
		Requirements::block("sapphire/thirdparty/tinymce/themes/advanced/skins/default/ui.css");

		LeftAndMain::require_css("dospuntoceroCMSCore/css/DospuntoceroCMS.css");
		
      CMSMenu::remove_menu_item('Help'); 

	} 
	
}
