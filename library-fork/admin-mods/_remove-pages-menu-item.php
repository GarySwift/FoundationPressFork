<?php
# Remove Pages menu item 
function remove_pages_menu_item(){
    remove_menu_page( 'edit.php?post_type=page' );       
}
add_action( 'admin_menu', 'remove_pages_menu_item' );