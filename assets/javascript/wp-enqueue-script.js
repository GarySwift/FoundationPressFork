// This JavaScript file is written to on the server using the wp_localize_script() function - ref: https://codex.wordpress.org/Function_Reference/wp_localize_script
var data = {
	// URL to wp-admin/admin-ajax.php to process the request
    ajaxurl: MyAjax.ajaxurl,// created using admin_url( 'admin-ajax.php' ) function
	action: 'ajax_action',
	security : MyAjax.security,// created using wp_create_nonce() function
	whatever: 10// Test variable
};
var site = {
	name: Site.name,
	description: Site.description
};
// console.log(data);
// console.log('site', site);