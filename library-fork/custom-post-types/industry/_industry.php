<?php
add_action( 'init', 'cptui_register_my_cpts_industry' );
function cptui_register_my_cpts_industry() {
	$labels = array(
		"name" => __( 'Industries', '' ),
		"singular_name" => __( 'Industry', '' ),
		);

	$args = array(
		"label" => __( 'Industries', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "industry", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 8,"menu_icon" => "dashicons-media-default",		
		"supports" => array( "title", "editor", "thumbnail" ),				
	);
	register_post_type( "industry", $args );

// End of cptui_register_my_cpts_industry()
}
