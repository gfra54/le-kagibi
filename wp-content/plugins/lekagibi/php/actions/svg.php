<?php

function site_logo($w=false){
	return '<img class="image-logo" src="'.get_template_directory_uri().'/images/logo'.($w ? '-'.$w : '').'.png">';

//	return '<svg class="svg" viewBox="0 0 444.7 143"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use></svg>';
}

function chevron(){
	return '<div class="chevron"><img class="image-fleche" src="'.get_template_directory_uri().'/images/fleche.png"></div>';
}