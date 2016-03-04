<?php

function get_livres(){
	$args=array(
	  'post_type' => 'livres',
	  'post_status' => 'publish'
	);
	if($livres = new WP_Query($args)) {
		return $livres->posts;
	} else return array();

}