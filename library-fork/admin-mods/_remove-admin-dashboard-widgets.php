<?php
# To remove the wordpress default items use the code given below.
function remove_dashboard_meta() {
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); // Remove 'WordPress News' widget
	// remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // Remove 'Quick Draft' widget
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // Remove 'At a Glance' widget
	// remove_meta_box( 'dashboard_activity', 'dashboard', 'normal'); /// Remove 'Activity' widget
}
add_action( 'admin_init', 'remove_dashboard_meta' );