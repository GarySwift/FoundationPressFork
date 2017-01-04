<?php
function manage_columns_for_testimonial($columns){
    //remove columns
    unset($columns['date']);
    unset($columns['title']);

    //add new columns
    $columns['testimonial_content']    = 'Testimonial';
    $columns['title'] = _x('Attribution', 'column name');
    $columns['pos_org'] = 'Position';
	$columns['date'] = _x('Date', 'column name');
    return $columns;
}
add_action('manage_testimonial_posts_columns','manage_columns_for_testimonial');

function populate_testimonial_columns($column,$post_id){
	global $post;
	//get the testimonial based on its post_id
    $testimonial = get_post($post_id);

    //testimonial content column
    if($column == 'testimonial_content'){
        if($testimonial){
            //get the main content area
            $testimonial_content = apply_filters('the_content', $testimonial->post_content); 
            echo $testimonial_content;
        }
    }
    if($column == 'pos_org'){
        $pos_org='';
        if(get_field('position')){
			// echo 'Yes';
			$pos_org = get_field('position');
		}
		if(get_field('organisation')){
			if($pos_org){
				// echo 'Yes';
				$pos_org .= ', '.get_field('organisation');
			}
			else {
				$pos_org = get_field('organisation');
			}
		}
		echo $pos_org;
    }   
}
add_action('manage_testimonial_posts_custom_column','populate_testimonial_columns',10,2);