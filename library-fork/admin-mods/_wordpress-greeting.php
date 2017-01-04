<?php
 /* Replace the 'How are you, greeting */
function fancy_replace_howdy( $wp_admin_bar ) {
	date_default_timezone_set('GMT');
	$Hour = date('G');
	$branding ='<span id="branding-text">BrightLight CMS</span> <span id="branding-pipe">&vert;</span> ';
	$msg = "";
	if ( $Hour >= 5 && $Hour <= 11 ) {
	    $msg=$branding."Good Morning,";
	} else if ( $Hour >= 12 && $Hour <= 18 ) {
	    $msg=$branding."Good Afternoon,";
	} else if ( $Hour >= 19 || $Hours <= 4 ) {
	    $msg=$branding."Good Evening,";
	}
	$my_account=$wp_admin_bar->get_node('my-account');
	$newtitle = str_replace( 'How are you,', $msg, $my_account->title );
	$wp_admin_bar->add_node( array(
		'id' => 'my-account',
	 	'title' => $newtitle,
		)
	);
}
add_filter( 'admin_bar_menu', 'fancy_replace_howdy',20 );
