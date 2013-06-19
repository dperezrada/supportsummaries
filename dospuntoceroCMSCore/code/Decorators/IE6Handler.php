<?php 

	class IE6Handler extends SiteTreeDecorator{

		function DieIE(){
			//die damn ie6
			if($pos = strpos( $_SERVER[ 'HTTP_USER_AGENT' ], 'MSIE' ) ) {      
				$version = substr( $_SERVER[ 'HTTP_USER_AGENT' ], $pos + 5, 3 );
				if( $version < 7 ) {
					Requirements::javascript("dospuntoceroCMS/javascript/jquery.min.js");
					Requirements::customScript("
						var IE6UPDATE_OPTIONS = {
							icons_path: 'dospuntoceroCMS/images/'
						};
					");
					Requirements::javascript("dospuntoceroCMS/javascript/ie6update.js");
				}
			}
		}
	}