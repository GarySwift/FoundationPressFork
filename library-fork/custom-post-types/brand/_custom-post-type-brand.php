<?php
add_action( 'init', 'cptui_register_my_cpts_brand' );
function cptui_register_my_cpts_brand() {
	$labels = array(
		"name" => __( 'Brands', '' ),
		"singular_name" => __( 'Brand', '' ),
		);

	$args = array(
		"label" => __( 'Brands', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "brand", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 9,"menu_icon" => "dashicons-tag",		
		"supports" => array( "title", "editor", "thumbnail" ),				
	);
	register_post_type( "brand", $args );

// End of cptui_register_my_cpts_brand()
}