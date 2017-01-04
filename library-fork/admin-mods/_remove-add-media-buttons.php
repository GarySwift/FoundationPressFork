<?php
function remove_add_media_buttons_for_non_admins(){
    if ( !current_user_can( 'manage_options' ) ) {
        remove_action( 'media_buttons', 'media_buttons' );
    }
}
add_action('admin_head', 'remove_add_media_buttons_for_non_admins');