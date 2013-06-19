;(function($) {
	$(document).ready(function() {
		if ($('#SupportDocsPage').length){
				var container = $('.container div')[0];
				$([
					"Strategies for implementing changes",
					"Governance arrangements", 
					"Financial arrangements",
					"Delivery Arrangements"
					]).each(
						function(key, value){
						var head = $("h2:contains('"+value+"')");
						var content = $("h2:contains('"+value+"')").next();
						$(container).prepend(content);
						$(container).prepend(head);
						}
					       );
				$(container).prepend($("h1:contains('Support Summaries')"));
		}
		$("#nav ul.sf-menu").supersubs({ 
			minWidth:    12,   // minimum width of sub-menus in em units 
			maxWidth:    27,   // maximum width of sub-menus in em units 
			extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
                           // due to slight rounding differences and font-family 
    }).superfish();  // call supersubs first, then superfish, so that subs are 

	})
})(jQuery);
