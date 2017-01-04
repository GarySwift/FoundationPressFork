<?php
// Add custom script for the WordPress backend
// function wp_admin_theme_customizations_js() {
//     $url = get_bloginfo('template_directory') . '/assets/javascript/theme/wp-admin-theme-customizations.js';
//     echo '"<script type="text/javascript" src="'. $url . '"></script>"';
// }
// add_action('admin_footer', 'wp_admin_theme_customizations_js');
function wp_admin_theme_customizations_js() {
    wp_enqueue_script( 'wp-admin-theme-customizations.js', get_template_directory_uri().LIBRARY_FORK.'assets/javascript/wp-admin-theme-customizations.js');
}
add_action('admin_footer', 'wp_admin_theme_customizations_js');