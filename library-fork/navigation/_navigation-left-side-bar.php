<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
register_nav_menus(array(
	'left-sidebar-menu-one' => 'Left Sidebar One',
	'left-sidebar-menu-two' => 'Left Sidebar Two',
));
/**
 * Slightly more modified version of the foundationpress_top_bar_right function
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'foundationpress_sitemap_menu' ) ) {
	function foundationpress_sitemap_menu() {
		wp_nav_menu( array(
			'container'      => false,
			'menu_class'     => 'left-sidebar-menu-one',
			'items_wrap'     => '<ul id="left-sidebar-menu-one" class="%2$s">%3$s</ul>',
			'theme_location' => 'left-sidebar-menu-one',
			'depth'          => 3,
			'fallback_cb'    => false,
			'walker'         => new Foundationpress_Top_Bar_Walker(),
		));
	}
}
if ( ! function_exists( 'foundationpress_sitemap_menu' ) ) {
	function foundationpress_sitemap_menu() {
		wp_nav_menu( array(
			'container'      => false,
			'menu_class'     => 'left-sidebar-menu-two',
			'items_wrap'     => '<ul id="left-sidebar-menu-two" class="%2$s">%3$s</ul>',
			'theme_location' => 'left-sidebar-menu-two',
			'depth'          => 3,
			'fallback_cb'    => false,
			'walker'         => new Foundationpress_Top_Bar_Walker(),
		));
	}
}

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Left Sidebar',
	'id'            => 'left-sidebar',
	'description'   => __( 'Add widgets here to appear in your sidebar.', 'foundationpress' ),    
    'before_widget' => '<div class ="left-sidebar-widget-area">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);