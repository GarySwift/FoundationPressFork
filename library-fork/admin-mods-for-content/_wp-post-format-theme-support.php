<?php 
# Override "Post Formats" eg. 'gallery', 'link', 'image', 'video', 'status', 'chat'
# Add post formarts support: http://codex.wordpress.org/Post_Formats
# This overrides the orginal found in library/theme-support.php
# add_theme_support( 'post-formats', array('gallery', 'link', 'image', 'video', 'status', 'chat') );
# ref: http://b-website.com/remove-specific-post-formats-child-theme
function bweb_remove_post_formats() {
    add_theme_support( 'post-formats', array( 'image', 'gallery', 'video' ) );
}
add_action( 'after_setup_theme', 'bweb_remove_post_formats', 11 );