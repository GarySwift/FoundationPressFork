<?php
/**
 * Detect if localhost
 * 
 * @return true if using localhost
 */
function is_localhost() {
    $whitelist = array( '127.0.0.1', '::1' );
    if( in_array( $_SERVER['REMOTE_ADDR'], $whitelist) ) {
    	return true;
    }
    return false;
}