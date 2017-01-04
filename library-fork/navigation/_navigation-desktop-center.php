<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

unregister_nav_menu( 'top-bar-r' );
unregister_nav_menu( 'mobile-nav' );
register_nav_menus(array(
	'top-bar-center' => 'Desktop Center',
	'mobile-nav' => 'Mobile',
));
 /**
 * Slightly modified version of the foundationpress_top_bar_right function
 * Desktop navigation - center top bar
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'foundationpress_top_bar_center' ) ) {
	function foundationpress_top_bar_center() {
		wp_nav_menu( array(
			'container'      => false,
			'menu_class'     => 'dropdown menu',
			'items_wrap'     => '<ul id="%1$s" class="%2$s desktop-menu" data-dropdown-menu>%3$s</ul>',
			'theme_location' => 'top-bar-center',
			'depth'          => 3,
			'fallback_cb'    => false,
			'walker'         => new Foundationpress_Top_Bar_Walker(),
		));
	}
}


/*
<!-- example usage of center top bar -->
<div class="top-bar-center" data-margin-top="100px">
	<?php foundationpress_top_bar_center(); ?>

	<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
		<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
	<?php endif; ?>
</div>
<!-- CSS -->
<style>
div.top-bar-center {
	margin: 0 auto;
	ul {
		text-align: center;
		li { 
			display: inline-block; 
		}
	}

}
</style>
<!-- @end example usage -->
*/