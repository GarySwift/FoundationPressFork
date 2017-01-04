<?php
// note it is a very sad thing to remove these
// color options but useful for roles
function restrict_users_from_changeing_admin_theme () {
	$users = get_users();
	foreach ($users as $user) {
		remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );
		update_user_meta($user->ID, 'admin_color', 'brightlight');
	}
	if (!current_user_can('manage_options')) {
		remove_action('admin_color_scheme_picker','admin_color_scheme_picker');
	}
}
add_action('after_setup_theme','restrict_users_from_changeing_admin_theme');