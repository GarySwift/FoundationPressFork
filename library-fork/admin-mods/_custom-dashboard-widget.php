<?php
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
function my_custom_dashboard_widgets() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'BrightLight Support', 'custom_dashboard_help');
}
function custom_dashboard_help() {
	$admin_email = get_option( 'admin_email', 'test@test.com' );
	echo '<p>Welcome to your BrightLight developed website! Need help? Contact the developer <a href="mailto:'.$admin_email.'?subject=Theme Support">here</a>. For WordPress Tutorials visit: <a href="http://www.wpbeginner.com" target="_blank">WPBeginner</a></p>';
}