<?php
/**
 * 
 */
define( 'CSSPATH', get_template_directory_uri ().LIBRARY_FORK.'wp-admin-color-themes' );
function add_custom_admin_themes() {

	$suffix = is_rtl() ? '-rtl' : '';

	wp_admin_css_color(
		'brightlight',
		__( 'BrightLight' ),
		CSSPATH . "/colors/brightlight/colors$suffix.css",
		array( '#e5e5e5', '#999', '#B1B700', '#d64e07' )
	);

	wp_admin_css_color(
		'aubergine',
		__( 'Aubergine' ),
		CSSPATH . "/colors/aubergine/colors$suffix.css",
		array( '#4c4b5f', '#585a61', '#e87162', '#da9b49' ),
		array( 'base' => '#e4e4e7', 'focus' => '#fff', 'current' => '#fff' )
	);

	wp_admin_css_color(
		'primary',
		__( 'Primary' ),
		CSSPATH . "/colors/primary/colors$suffix.css",
		array( '#282b48', '#35395c', '#f38135', '#e7c03a' ),
		array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
	);

	wp_admin_css_color(
		'flat',
		__( 'Flat' ),
		CSSPATH . "/colors/flat/colors$suffix.css",
		array( '#1F2C39', '#2c3e50', '#1abc9c', '#f39c12' ),
		array( 'base' => '#f1f2f3', 'focus' => '#fff', 'current' => '#fff' )
	);		
}
add_action( 'admin_init', 'add_custom_admin_themes' );
