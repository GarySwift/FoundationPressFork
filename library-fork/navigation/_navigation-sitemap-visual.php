<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
register_nav_menus(array(
	'sitemap-menu' => 'Sitemap',
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
			'menu_class'     => 'sitemap-menu',
			'items_wrap'     => '<ul id="sitemap-menu" class="%2$s">%3$s</ul>',
			'theme_location' => 'sitemap-menu',
			'depth'          => 3,
			'fallback_cb'    => false,
			'walker'         => new Foundationpress_Top_Bar_Walker(),
		));
	}
}