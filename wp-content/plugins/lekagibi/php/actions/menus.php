<?php
register_nav_menus(array(
	'primary' => 'Menu principal',
	'home' => 'Page d\'accueil'
));


function getMenu($slug) {
	$locations = get_nav_menu_locations();
	$menu = wp_get_nav_menu_object( $locations[$slug] );
    $menu_items = wp_get_nav_menu_items($menu->term_id);

	return $menu_items;
}