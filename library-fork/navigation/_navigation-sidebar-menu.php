<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

// if($sidebar_menu_widget) {
// 	register_nav_menus(array(
// 		'sidebar-nav' => 'Sidebar',
// 	));	
// }
register_nav_menus(array(
	'sidebar-nav' => 'Sidebar',
));

function sidebar_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'sidebar-nav',
		'menu'            => '',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => '',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
                'items_wrap'      => '%3$s',		
                'depth'           => 0,
		'walker'          => new Description_Walker,
		)
	);
}