<?php
function remove_footer_admin () {
	$admin_email = get_option( 'admin_email', 'test@test.com' );
    echo 'For any further help please contact <b><a href="mailto:'.$admin_email.'?subject=Theme Support">Gary</a></b> at <a href="http://www.brightlight.ie/" target="_blank">BrightLight</a>';
} 
add_filter('admin_footer_text', 'remove_footer_admin');

