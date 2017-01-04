<?php
# Remove Posts menu item 
function remove_posts_menu_item(){
    remove_menu_page( 'edit.php' );       
}
add_action( 'admin_menu', 'remove_posts_menu_item' );