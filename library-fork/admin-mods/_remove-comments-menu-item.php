<?php
# Remove Comments menu item for all but Administrators
function remove_comments_menu_item() {
    $user = wp_get_current_user();
    if ( ! $user->has_cap( 'manage_options' ) ) {
        remove_menu_page( 'edit-comments.php' );
    }
}
add_action( 'admin_menu', 'remove_comments_menu_item' );