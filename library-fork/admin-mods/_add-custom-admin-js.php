<?php
function add_javascript_to_admin() {
    wp_enqueue_script( 'wp-admin.js', get_template_directory_uri().LIBRARY_FORK.'assets/javascript/wp-admin.js');
}
add_action( 'admin_enqueue_scripts', 'add_javascript_to_admin' );