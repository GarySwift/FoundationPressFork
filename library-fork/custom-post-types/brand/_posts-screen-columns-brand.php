<?php
function manage_columns_for_brand($columns){
    $columns['post_featured_image'] = 'Image';
    // $columns['post_thumbnail'] = 'Thumb';
    return $columns;
}
function populate_brand_columns($column,$post_id){
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

add_action('manage_brand_posts_columns','manage_columns_for_brand');
add_action('manage_brand_posts_custom_column','populate_brand_columns',10,2);