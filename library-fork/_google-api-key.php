<?php
/*
 * It is necessary to register a Google API key in order to allow the Google API to load correctly. 
 *
 * Ref: https://www.advancedcustomfields.com/resources/google-map/
 *
 */
function my_acf_init() {
	$google_api_key = get_field('google_api_key', 'option');
	if( $google_api_key ) {
		acf_update_setting('google_api_key', $google_api_key);
	}	
}
add_action('acf/init', 'my_acf_init');
