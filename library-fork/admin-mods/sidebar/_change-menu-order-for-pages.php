<?php
# Move Pages above Media in WordPress admin
function change_menu_order_for_pages( $menu_order ) {
    return array(
        'index.php',
        'edit.php',
        'edit.php?post_type=page',
        'upload.php',
    );
}
add_filter( 'custom_menu_order', '__return_true' );
add_filter( 'menu_order', 'change_menu_order_for_pages' );


/*********************
* re-order left admin menu
* ref: http://easywebdesigntutorials.com/reorder-left-admin-menu-and-add-a-custom-user-role/

**********************/
function reorder_admin_menu( $__return_true ) {
    return array(
         'index.php', // Dashboard
         'edit.php?post_type=page', // Pages 
         'edit.php', // Posts
         'upload.php', // Media
         'themes.php', // Appearance
         'separator1', // --Space--
         'edit-comments.php', // Comments 
         'users.php', // Users
         'separator2', // --Space--
         'plugins.php', // Plugins
         'tools.php', // Tools
         'options-general.php', // Settings
   );
}
// add_filter( 'custom_menu_order', 'reorder_admin_menu' );
// add_filter( 'menu_order', 'reorder_admin_menu' );


// ref: http://randyhoyt.com/wordpress/admin/
// add_action('admin_menu', 'rrh_change_post_links');
function rrh_change_post_links() {
	global $menu;
	$menu[6] = $menu[5];
	$menu[5] = $menu[20];
	unset($menu[20]);
}