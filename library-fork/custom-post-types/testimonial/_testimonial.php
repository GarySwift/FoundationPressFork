<?php
add_action( 'init', 'cptui_register_my_cpts_testimonial' );
function cptui_register_my_cpts_testimonial() {
	$labels = array(
		"name" => __( 'Testimonials', '' ),
		"singular_name" => __( 'Testimonial', '' ),
		);

	$args = array(
		"label" => __( 'Testimonials', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "testimonial", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 10,"menu_icon" => "dashicons-testimonial",		
		"supports" => array( "title", "editor" ),				
	);
	register_post_type( "testimonial", $args );

// End of cptui_register_my_cpts_testimonial()
}