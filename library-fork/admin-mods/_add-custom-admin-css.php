<?php
/**
 * Add stylesheet to WordPress backend
 * 
 * ref: https://paulund.co.uk/add-stylesheets-to-wordpress-correctly
 */
function add_stylesheet_to_admin() {
    wp_enqueue_style( 'prefix-style', get_template_directory_uri().LIBRARY_FORK.'assets/css/admin-style.css', __FILE__ );
}
add_action( 'admin_enqueue_scripts', 'add_stylesheet_to_admin' );