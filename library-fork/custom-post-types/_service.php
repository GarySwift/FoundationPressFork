<?php
add_action( 'init', 'cptui_register_my_cpts_service' );
function cptui_register_my_cpts_service() {
	$labels = array(
		"name" => __( 'Services', '' ),
		"singular_name" => __( 'Service', '' ),
		);

	$args = array(
		"label" => __( 'Services', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => array( "slug" => "service", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 5,"menu_icon" => "dashicons-welcome-add-page",		
		"supports" => array( "title", "editor", "thumbnail", "page-attributes" ),				
	);
	register_post_type( "service", $args );

// End of cptui_register_my_cpts_service()
}