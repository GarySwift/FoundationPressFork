<?php 
# Remove the WordPress icon form the top left corner in the admin bar
function remove_wp_logo_from_admin_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'wp-logo' );
}
add_action( 'admin_bar_menu', 'remove_wp_logo_from_admin_bar', 999 );

