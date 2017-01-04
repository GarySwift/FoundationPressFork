<?php
/*-------------------------------------------------------------------------------
	Custom Columns
-------------------------------------------------------------------------------*/

//manage the columns of the `post` post type
function manage_columns_for_post($columns){
    $columns['post_featured_image'] = 'Image';
    return $columns;
}

add_action('manage_post_posts_columns','manage_columns_for_post');

//Populate custom columns for `post` post type
function populate_post_columns($column,$post_id){

    //featured image column
    if($column == 'post_featured_image'){
        //if this post has a featured image
        if(has_post_thumbnail($post_id)){
            $post_featured_image = get_the_post_thumbnail($post_id,'icon');
            echo $post_featured_image;
        }else{
            echo '—';
        }
    }  
}
add_action('manage_post_posts_custom_column','populate_post_columns',10,2);