<?php
function manage_columns_for_service($columns){
    $columns['post_featured_image'] = 'Image';
    $columns['post_featured'] = 'Featured';
    $columns['post_excerpt'] = 'Excerpt';
    // $columns['post_thumbnail'] = 'Thumb';
    return $columns;
}
function populate_service_columns($column,$post_id){
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
  if($column == 'post_featured'){
      //if this item has thumbnail
      if( get_field('featured') ) {
          echo '<span class="dashicons dashicons-star-filled"></span> ';
      }else{
          echo '<span class="dashicons dashicons-star-empty"></span> ';
      }
  }  
  if($column == 'post_excerpt'){
      //if this item has thumbnail
      if( get_field('excerpt') ) {
          echo '<span class="dashicons dashicons-yes"></span> ';
      }else{
          echo '-';
      }
  }   
}

add_action('manage_service_posts_columns','manage_columns_for_service');
add_action('manage_service_posts_custom_column','populate_service_columns',10,2);