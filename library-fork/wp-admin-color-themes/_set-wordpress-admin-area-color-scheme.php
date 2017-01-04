<?php
/*
	Set a Default Admin Color Scheme for All New Users in WordPress 
	ref: http://www.wpbeginner.com/wp-tutorials/13-plugins-and-tips-to-improve-wordpress-admin-area/
	
	Options:

	default
	light
	blue
	midnight
	sunrise
	ectoplasm
	ocean
	coffee
*/
function set_default_admin_color_scheme($user_id) {
	$args = array(
		'ID' => $user_id,
		'admin_color' => 'brightlight'
	);
	wp_update_user( $args );
}
add_action('user_register', 'set_default_admin_color_scheme');