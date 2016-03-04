<?php 

function get_page_content($slug){

	if($page = get_page_by_path($slug)) {
		$page = get_post($page->ID);
		return wpautop($page->post_content,true);
	}

}