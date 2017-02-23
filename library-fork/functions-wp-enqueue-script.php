<?php 
// Add the JavaScript file 'wp-enqueue-script.js' to header.php
function theme_script() {
  wp_enqueue_script( 'wp-enqueue-script', get_template_directory_uri() . '/assets/javascript/wp-enqueue-script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_script' );

// Write to the JavaScript file 'wp-enqueue-script.js' with site details
function add_theme_info_scripts() {
  // These php variables will be available in Javascript as global variables - Eg. Site.name, Site.description
  wp_localize_script( 'wp-enqueue-script', 'Site', array(
    'name' => get_bloginfo('name'),
    'description' => get_bloginfo('description'),
  ));  
}
add_action( 'wp_enqueue_scripts', 'add_theme_info_scripts' );