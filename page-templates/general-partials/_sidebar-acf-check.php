<?php 
if( function_exists( 'acf' ) ) {
    if( get_field('page_layout') && get_field('page_layout')==='page' ) {
        // echo get_field('page_layout').'<br>';
        if( get_field('sidebar_side') ) {
            // echo get_field('sidebar_side').'<br>';
            get_sidebar();
        }
    }    
}