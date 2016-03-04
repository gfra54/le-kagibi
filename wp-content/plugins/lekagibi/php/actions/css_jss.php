<?php

function enqueue_css_js() {
	// if(!is_admin()) {
		$GLOBALS['css'] = array(
		    get_template_directory_uri().'/font-awesome/css/font-awesome.min.css',
		    
		);

		if(list($cssfile) = glob(chemin_site().'/build/global.*.css')) {
			$GLOBALS['css'][] = '/build/'.basename($cssfile);
		} else if($cssfiles = glob(chemin_site().'/build/css/*.css')) {
			foreach($cssfiles as $file) {
				$GLOBALS['css'][] = '/build/css/'.basename($file);
			}
		}

		foreach($GLOBALS['css'] as $css) {
			wp_enqueue_style($css, $css);
		}

		$GLOBALS['js'] = array(
		);

		if($jsfiles = glob(chemin_site().'/build/js/*.js')) {
			foreach($jsfiles as $file) {
				$GLOBALS['js'][] = '/build/js/'.basename($file);
			}
		}
		foreach($GLOBALS['js'] as $js) {
			wp_enqueue_script( $js, $js);
		}
	// }
}

add_action( 'wp_enqueue_scripts', 'enqueue_css_js' );
