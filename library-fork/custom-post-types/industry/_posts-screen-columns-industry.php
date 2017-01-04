<?php
function manage_columns_for_industry($columns){
    $columns['post_featured_image'] = 'Image';
    return $columns;
}
function populate_industry_columns($column,$post_id){
	global $post;
	//get the item based on its post_id
  $post = get_post($post_id);

  //featured image column
  if($column == 'post_featured_image'){
      //if this page has a featured image
      if(has_post_thumbnail($post_id)){
          $post_featured_image = get_the_post_thumbnail($post_id,'icon');
          echo $post_featured_image;
      }else{
          echo '—';
      }
  } 
}

add_action('manage_industry_posts_columns','manage_columns_for_industry');
add_action('manage_industry_posts_custom_column','populate_industry_columns',10,2);