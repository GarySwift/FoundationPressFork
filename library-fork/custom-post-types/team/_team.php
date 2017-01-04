<?php 
add_action( 'init', 'cptui_register_my_cpts_team' );
function cptui_register_my_cpts_team() {
	$labels = array(
		"name" => "Teams",
		"singular_name" => "Team",
		"all_items" => "All Profiles",
		"add_new_item" => "Add New Profile",
		"edit_item" => "Edit Profile",
		"new_item" => "New Profile",
		"view_item" => "View Profile",
		"search_items" => "Search Profile",
		"not_found" => "No Profiles Found",
		"not_found_in_trash" => "No Profiles Found in Trash",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "team", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 9,"menu_icon" => "dashicons-admin-users",		
		"supports" => array( "title", "thumbnail" ),				
	);
	register_post_type( "team", $args );

// End of cptui_register_my_cpts_team()
}
