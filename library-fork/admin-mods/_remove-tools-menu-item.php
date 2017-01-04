<?php
# Remove Tools menu item for all but Administrators
function remove_tools_menu_item(){
    
    $user = wp_get_current_user();
    if ( ! $user->has_cap( 'manage_options' ) ) {
        remove_menu_page( 'tools.php' ); 
    }       
}
add_action( 'admin_menu', 'remove_tools_menu_item' );