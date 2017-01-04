<?php
/*******************************************************************************************************/
/** Custom functions and includes from this point down - ref: Gary Swift https://github.com/GarySwift */
/*****************************************************************************************************/

# WordPress admin customization

# Replace the 'How are you,' greeting  
$show_custom_greeting_to_user_in_admin_bar=true;
# Change 'Welcome to WordPress' message on the admin dashboard wiget
$show_wp_admin_theme_customizations_js=true;
# Restrict all users from changing Admin Color Scheme inWordPress admin
$restrict_users_from_changeing_admin_theme=true;
# Set a Default Admin Color Scheme for new Users in WordPress
$set_default_admin_color_scheme=true;
# Load in additional colour schemes for WordPress admin
$show_wp_admin_color_themes=true;
# Remove the WordPress icon form the top left corner in the admin bar
$remove_wp_logo_from_admin_bar=true;
# Change WP Logo & Sub Menus In WordPress Admin Bar
$rebrand_wordpress_logo=false;
# Override the 'Thank you for creating with WordPress' message
$show_custom_message_at_bottom_of_admin_page=true;
# Add a custom backend wiget to the WordPress dashboard
$show_custom_dashboard_widget=true;
# Modify the login page
$show_custom_login_page=true;
# Remove WordPress default widget items from the admin dashboard
$remove_admin_dashboard_widgets=true;
# Remove the "Add Media" button above the WYSIWYG editor
$remove_add_media_buttons_for_non_admins=true;
# Remove "Tools" from admin sidebar for all but Administrators (Does not restrict access to page)
$remove_tools_menu_item=true;
# Add tips metabox
$add_tips_metabox=true; 
# Move Pages above Media in WordPress admin
$change_menu_order_for_pages=true;
# Rename Posts to News in Menu (Post customization)
$rename_post_menu_label=false;
# Remove Comments support completely
$remove_comments_support=true;
# Remove Comments menu item for all but Administrators
$remove_comments_menu_item=false;
# Remove Tools menu item for all but Administrators
$remove_tools_menu_item=true;
# Remove Posts menu item
$remove_posts_menu_item=false;
# Remove Pages menu item 
$remove_pages_menu_item=false;
# WordPress admin JavaScript
$show_custom_admin_js=false;
# Remove the "Hello World" sample post
$delete_hello_world=false;

# Modify the columns in the 'All Posts' admin page
require_once( 'posts-screen-columns/_page.php' );

# Modify the columns in the 'All Pages' admin page
require_once( 'posts-screen-columns/_post.php' );

/** Add admin notices for missing plugins (ACF Pro, ACF Image Crop, ACF Font Awesome) */
require_once( 'admin-mods/_admin-notices.php' );

# Admin CSS such as post screen column width and tips metabox style
require_once( 'admin-mods/_add-custom-admin-css.php' );

# Add custom script for the WordPress backend
if($show_custom_admin_js) {
	require_once( 'admin-mods/_add-custom-admin-js.php' );
}
# Load in additional colour schemes for WordPress admin pages
if($show_wp_admin_color_themes) {
	require_once( 'wp-admin-color-themes/_wp-admin-color-themes.php' );
}
# Set a Default Admin Color Scheme for new Users in WordPress
if($set_default_admin_color_scheme) {
	require_once( 'wp-admin-color-themes/_set-wordpress-admin-area-color-scheme.php' );
}
# Restrict all users from changing Admin Color Scheme inWordPress admin
if($restrict_users_from_changeing_admin_theme) {
	require_once( 'wp-admin-color-themes/_restrict-users-from-changeing-admin-theme.php' );
}
# Remove the "Add Media" button above the WYSIWYG editor
if ($remove_add_media_buttons_for_non_admins) {
	require_once('admin-mods/_remove-add-media-buttons.php');
}
# This is where we change the admin dashboard wiget from 'Welcome to WordPress' to 'Whatever Message You Want' 
# This message must be edited in the JavaScript file located in 'library/assets/javascript/wp-admin-theme-customizations.js' 
if($show_wp_admin_theme_customizations_js) {
	require_once( 'admin-mods/_add-wp-admin-theme-customizations-js.php' );
}
# Override the 'Thank you for creating with WordPress' message at the bottom of the admin page
if($show_custom_message_at_bottom_of_admin_page) {
	require_once( 'admin-mods/_remove-footer-admin.php' );	
}
# Replace the 'How are you,' greeting  
if($show_custom_greeting_to_user_in_admin_bar) {
	require_once( 'admin-mods/_wordpress-greeting.php');
}
# Add a custom backend wiget to the WordPress dashboard - Eg. Brand Support - Welcome to your 'Brand' developed website!
if($show_custom_dashboard_widget) {
	require_once( 'admin-mods/_custom-dashboard-widget.php' );
}
# Remove WordPress default widget items from the admin dashboard
if($remove_admin_dashboard_widgets) {
	require_once( 'admin-mods/_remove-admin-dashboard-widgets.php');
}
# Add tips metabox
if($add_tips_metabox){
	require_once( 'admin-mods/_add-tips-metabox.php');
}
# Move Pages above Media in WordPress admin
if($change_menu_order_for_pages) {
	require_once( 'admin-mods/sidebar/_change-menu-order-for-pages.php');
}
# Modify the login page
if($show_custom_login_page) {
	require_once( 'admin-mods/_login-page-mods.php' );
}
# Rename Posts to News in Menu (Post customization)
if($rename_post_menu_label) {
	require_once( 'admin-mods/_rename-posts-in-menu.php' );
}
# Remove "Tools" menu item from admin sidebar for all but Administrators
if($remove_tools_menu_item) {
	require_once( 'admin-mods/_remove-tools-menu-item.php' );
}
# Remove Comments support completely
if($remove_comments_support) {
	require_once( 'admin-mods/_remove-comments-support.php');
}
# Remove Comments menu item for all but Administrators
if($remove_comments_menu_item) {
	require_once( 'admin-mods/_remove-comments-menu-item.php');
}
# Remove Posts menu item
if($remove_posts_menu_item) {
	require_once( 'admin-mods/_remove-posts-menu-item.php' );
}
# Remove Pages menu item 
if($remove_pages_menu_item) {
	require_once( 'admin-mods/_remove-pages-menu-item.php' );
}
# Change WP Logo & Sub Menus In WordPress Admin Bar - not recommended unless restricting admin themes because image will not suit all colour schemes
if($rebrand_wordpress_logo) {
	require_once( 'admin-bar-wordpress-logo/_rebranding-wordpress-logo.php');
}
# Remove the WordPress icon form the top left corner in the admin bar
if($remove_wp_logo_from_admin_bar) {
	require_once( 'admin-bar-wordpress-logo/_remove-wp-logo-from-admin-bar.php');
}
# Remove the "Hello World" sample post
if($delete_hello_world) {
	require_once( 'admin-mods-for-content/_delete-hello-world.php' );
}