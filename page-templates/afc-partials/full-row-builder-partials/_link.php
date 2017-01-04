<?php 
$link_row=false;
if ( get_sub_field('link_type') !== 'none' ) {
	$link_row=true;
	$link ='#';
	$title = 'Open This Link';
	$link_text =  'Read More';
	if(get_sub_field('target')) {
		$target = ' target="_blank"';
	}
	else {
		$target = '';
	}
	switch (get_sub_field('link_type')) {
	    case "post":									
			$post = get_sub_field('post');// override $post
			setup_postdata( $post ); 								
			$title = 'Open '.get_the_title();
			$link = get_the_permalink();
			wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
	        break;
	    case "url":
	        $link = get_sub_field('url');
	        break;
	    case "cat":
	        $title = 'Open This Category';
	        $link = get_category_link( get_sub_field('cat') );
	        break;    
	    case "pdf":							    
	        $pdf = get_sub_field('pdf');
	        $title = 'Open '.$pdf['title'];
	        $link = $pdf['pdf'];
	        break;
	}
}