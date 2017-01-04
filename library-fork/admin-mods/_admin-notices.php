<?php 
// https://premium.wpmudev.org/blog/adding-admin-notices/

// http://wptheming.com/2011/08/admin-notices-in-wordpress/
// http://stackoverflow.com/questions/9807064/wordpress-how-to-display-notice-in-admin-panel-on-plugin-activation

// Check if Advanced Custom Fields is active
if( !function_exists( 'acf' ) ) {
    add_action( 'admin_notices', 'my_acf_notice' );
}
// Displays a notice if the Advanced Custom Fields plugin is not active.
function my_acf_notice() {
    ?>
    <div class="error notice">
        <p><?php _e( 'Please install <b>Advanced Custom Fields Pro</b>. It is required for this plugin to work properly! | <a href="http://www.advancedcustomfields.com/pro/" target="_blank">ACF Pro</a>', 'my_plugin_textdomain' ); ?></p>
    </div>
    <?php
}

// Check if Advanced Custom Fields: Font Awesome is active
if( !function_exists('register_fields_font_awesome') ){
    add_action( 'admin_notices', 'my_acf_font_awesome_notice' );
}
// Displays a notice if the Advanced Custom Fields: Font Awesome plugin is not active.
function my_acf_font_awesome_notice() {
    ?>
    <div class="error notice">
        <p><?php _e( 'Please install <b>Advanced Custom Fields: Font Awesome</b>. It is required for this plugin to work properly! | <a href="https://wordpress.org/plugins/advanced-custom-fields-font-awesome/" target="_blank">ACF: Font Awesome</a>', 'my_plugin_textdomain' ); ?></p>
    </div>
    <?php
}

// Check if Advanced Custom Fields: Image Crop Add-on is active
if( !function_exists('register_fields_image_crop') ){
    add_action( 'admin_notices', 'my_acf_image_crop_notice' );
}
// Displays a notice if the Advanced Custom Fields: Image Crop Add-on plugin is not active.
function my_acf_image_crop_notice() {
    ?>
    <div class="error notice">
        <p><?php _e( 'Please install <b>Advanced Custom Fields: Image Crop Add-on</b>. It is required for this plugin to work properly!  | <a href="https://wordpress.org/plugins/acf-image-crop-add-on/" target="_blank">ACF: Image Crop Add-on</a>', 'my_plugin_textdomain' ); ?></p>
    </div>
    <?php
}

// Check if Advanced Custom Fields: Image Crop Add-on is active
if( function_exists( 'acf' ) ) {
    if( !get_field('google_api_key', 'option') ){
        add_action( 'admin_notices', 'google_api_key_notice' );
    }
}

// Displays a notice if the Advanced Custom Fields: Image Crop Add-on plugin is not active.
function google_api_key_notice() {
    $url = admin_url()."admin.php?page=google-api-key"
    ?>
    <div class="notice notice-warning is-dismissible">
        <p><?php _e( 'Please add a <b><a href="'.$url.'">Google API Key</a></b> in order to allow the Google API to load correctly. Go to admin sidebar "Custom Settings" > "Google API Key".', 'my_plugin_textdomain' ); ?></p>
        <button type="button" class="notice-dismiss">
            <span class="screen-reader-text">Dismiss this notice.</span>
        </button>
    </div>
    <?php
}