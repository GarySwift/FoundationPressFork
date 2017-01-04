<?php

add_action( 'init', 'cptui_register_my_cpts_project' );
function cptui_register_my_cpts_project() {
	$labels = array(
		"name" => __( 'Projects', '' ),
		"singular_name" => __( 'Project', '' ),
		);

	$args = array(
		"label" => __( 'Projects', '' ),
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
		"rewrite" => array( "slug" => "project", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 5,"menu_icon" => "dashicons-pressthis",		
		"supports" => array( "title", "editor", "thumbnail", "revisions", "author" ),				
	);
	register_post_type( "project", $args );

// End of cptui_register_my_cpts_project()
}
