<?php
/*
	default
	light
	blue
	midnight
	sunrise
	ectoplasm
	ocean
	coffee
*/
// Set a Default Admin Color Scheme for All New Users in WordPress 
// ref: http://www.wpbeginner.com/wp-tutorials/13-plugins-and-tips-to-improve-wordpress-admin-area/

function set_default_admin_color_scheme($user_id) {
	$args = array(
		'ID' => $user_id,
		'admin_color' => 'brightlight'
	);
	wp_update_user( $args );
}
add_action('user_register', 'set_default_admin_color_scheme');


if ( !current_user_can('manage_options') ) {
	remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
}


// note it is a very sad thing to remove these
// color options but useful for roles
function change_admin_color () {
	$users = get_users();
	foreach ($users as $user) {
		remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
		update_user_meta($user->ID, 'admin_color', 'ectoplasm');
		// if (user_can( $user->ID, 'administrator' )) { // Editor and below
		// 	update_user_meta($user->ID, 'admin_color', 'coffee');
		// }
		// if (user_can( $user->ID, 'editor' )) { // Editor and below
		// 	update_user_meta($user->ID, 'admin_color', 'midnight');
		// }
		// if (user_can( $user->ID, 'author' )) { // Author
		// 	update_user_meta($user->ID, 'admin_color', 'ocean');
		// }
		// if (user_can( $user->ID, 'contributor' )) { // Contributor and below
		// 	update_user_meta($user->ID, 'admin_color', 'light');
		// }
		// if (user_can( $user->ID, 'subscriber' )) { // Subscriber and below
		// 	update_user_meta($user->ID, 'admin_color', 'ectoplasm');
		// }
	}
	if (!current_user_can('manage_options')) {
		remove_action('admin_color_scheme_picker','admin_color_scheme_picker');
	}
}
add_action('after_setup_theme','change_admin_color');