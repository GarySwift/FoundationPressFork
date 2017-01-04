<?php
// image icon



add_image_size( 'icon', 30, 30, true ); // 220 pixels wide by 180 pixels tall, hard crop mode

/*-------------------------------------------------------------------------------
	Custom Columns
-------------------------------------------------------------------------------*/



//manage the columns of the `page` post type
function manage_columns_for_page($columns){
    //remove columns
    unset($columns['title']);
    unset($columns['date']);
    unset($columns['comments']);
    unset($columns['author']);

    //add new columns
    // $columns['cb'] = '<input type="checkbox" />';
     
    $columns['title'] = _x('Page Title', 'column name');
   
    $columns['page_template'] = 'Page Template'; 
    // $columns['id'] = __('ID');
	// $columns['categories'] = __('Categories');
	// $columns['tags'] = __('Tags');
 
    $columns['author'] = __('Author');
    // $columns['comments'] = __('Comments');
    $columns['date'] = _x('Date', 'column name');
    // $columns['date'] = _x('Date', 'column name');
    $columns['page_featured_image'] = 'Image';
    return $columns;
}

add_action('manage_page_posts_columns','manage_columns_for_page');

//Populate custom columns for `page` post type
function populate_page_columns($column,$post_id){

    //featured image column
    if($column == 'page_featured_image'){
        //if this page has a featured image
        if(has_post_thumbnail($post_id)){
            $page_featured_image = get_the_post_thumbnail($post_id,'icon');
            echo $page_featured_image;
        }else{
            echo '—';
        }
    }

    //page template column
    if($column == 'page_template'){
        //get the current page template being used for the page 
        $page_template_name = get_post_meta( $post_id, '_wp_page_template', true ); 
        //get a listing of all of the page templates for our site
        $page_templates = get_page_templates();
        if(in_array($page_template_name,$page_templates)){
            //search through each template
            foreach($page_templates as $key => $value){
                //if the template matches our current template, we found it
                if($page_template_name == $value){
                    echo $key . '';    
                }
            }   
        }else{
            echo 'Default';
        }   
    }

    //page content column
    if($column == 'page_content'){

        //get the page based on its post_id
        $page = get_post($post_id);
        if($page){
            //get the main content area
            $page_content = apply_filters('the_content', $page->post_content); 
            echo $page_content;
        }
    }
    if($column == 'id'){
        echo $post_id;
    }    
}
add_action('manage_page_posts_custom_column','populate_page_columns',10,2);