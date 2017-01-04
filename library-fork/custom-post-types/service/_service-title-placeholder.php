<?php
/* 
    Replace the default "Enter title here" placeholder text in the title input box
    with something more descriptive can be helpful for custom post types 

    source: http://flashingcursor.com/wordpress/change-the-enter-title-here-text-in-wordpress-963
*/

function change_default_title_service( $title ){

    $screen = get_current_screen();

    if ( 'service' == $screen->post_type ){
        $title = "Enter service title here";
    }
    return $title;
}
add_filter( 'enter_title_here', 'change_default_title_service' );