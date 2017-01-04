<?php 
$page_id = 'page';
if( function_exists( 'acf' ) ) {
    if( get_field('page_layout') ) {
        switch (get_field('page_layout')) {
        	case 'page':
        		if( get_field('sidebar_side') && get_field('sidebar_side') === 'left' ) {
        			$page_id = 'page-sidebar-left';
        		} else {
        			$page_id = 'page';
        		}
        		break;
        	case 'page-full-width':
        		$page_id = 'page-full-width';
        		break;
        	case 'page-full-screen':
        		$page_id = 'page-full-screen';
        		break;	
        	default:
        		$page_id = 'page';
        		break;
        }
    }    
}