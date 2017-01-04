<?php
# Rename Posts to News in Menu
# Source: http://code.tutsplus.com/articles/customizing-the-wordpress-admin-custom-admin-menus--wp-33200
// function rename_post_menu_label() {
//     global $menu;
//     global $submenu;
//     $menu[5][0] = 'News';
//     $submenu['edit.php'][5][0] = 'News Items';
//     $submenu['edit.php'][10][0] = 'Add News Item';
// }
function rename_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News Items';
    $submenu['edit.php'][10][0] = 'Add News Item';
}
add_action( 'admin_menu', 'rename_post_menu_label' );


// Edit submenus
function rename_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'News';
    $labels->singular_name = 'News Item';
    $labels->add_new = 'Add News Item';
    $labels->add_new_item = 'Add News Item';
    $labels->edit_item = 'Edit News Item';
    $labels->new_item = 'News Item';
    $labels->view_item = 'View News Item';
    $labels->search_items = 'Search News Items';
    $labels->not_found = 'No News Items found';
    $labels->not_found_in_trash = 'No News Items found in Trash';
}
add_action( 'admin_menu', 'rename_post_object_label' );
