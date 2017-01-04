<?php
function get_child_posts($parent_id, $post_type='post', $posts_per_page=-1) {
	$posts = get_posts(array(
		'post_type' => $post_type,
		'post_parent'    => $parent_id,
		'posts_per_page' => $posts_per_page,
		'post_status' => 'publish',
		'order' => 'ASC',
    ));
	return $posts;
}

function get_related_posts($parent_id, $post_type='post', $posts_per_page=-1) {
	$posts = get_posts(array(
		'post_type' => $post_type,
		'post_parent'    => $parent_id,
		'posts_per_page' => $posts_per_page,
		'post_status' => 'publish',
		'order' => 'ASC',
    ));
	return $posts;
}

function output_child_posts($posts, $title='', $blocks=false) {
	$class='';
	if($title) {
		$class= ' class="'.strtolower( str_replace(" ", "-", $title) ).'"';
	}
	switch ($blocks) {
	    case "image":
	        child_posts_header_image($title);
	        output_child_posts_image_blocks($posts);
	        break;
	    case "text":
	        child_posts_header_text($title);
	        output_child_posts_content_blocks($posts);
	        break;
	    case "link":
	        child_posts_header_text($title);
	        output_child_posts_links($posts);
	        break;
	    case "image-split":
	        // child_posts_header_text($title);
	        output_child_posts_image_split_blocks($posts);
	        break;    
	}
}
function output_child_posts_image_blocks($posts) {
	if($posts):?>
		<div class="row small-up-1 medium-up-2 large-up-3">
			<?php
			foreach( $posts as $post ):
	            setup_postdata( $post );
	        	?>
	        	<div class="column">
					<?php image_text_overlay_block($post); ?>
				</div>	
	        	<?php
		    endforeach; // End the loop 
	    	wp_reset_postdata();?>
		</div>
	    <?php
    endif;	
}
function output_child_posts_image_split_blocks($posts) {
	if($posts):?>
		<div class="row small-up-1 medium-up-2 large-up-2">
			<?php
			foreach( $posts as $post ):
	            setup_postdata( $post );
	        	?>
	        	<div class="column">
					<?php image_text_split_block($post); ?>
				</div>	
	        	<?php
		    endforeach; // End the loop 
	    	wp_reset_postdata();?>
		</div>
	    <?php
    endif;	
}
function output_child_posts_content_blocks($posts) {
	if($posts):?>
		<div class="row small-up-1 medium-up-2 large-up-2">
			<?php
			foreach( $posts as $post ):
	            setup_postdata( $post );
	        	?>
	        	<div class="column">
					<?php text_block($post); ?>
				</div>	
	        	<?php
		    endforeach; // End the loop 
	    	wp_reset_postdata();?>
		</div>
	    <?php
    endif;	
}
function output_child_posts_links($posts) {
	if($posts):?>
		<div class="row">
			<div class="column">
			<?php
			$i=0;
			foreach( $posts as $post ):
	            setup_postdata( $post );
	        	if($i++>0) {
	        		echo', ';
	        	}
	        	?><a href="<?php echo get_the_permalink($post->ID) ?>"><?php echo get_post_header($post->ID) ?></a><?php
		    endforeach; // End the loop 
	    	wp_reset_postdata();?>
	    	</div>
		</div>
	    <?php
    endif;	
}
function text_block($post){
	$image =  get_featured_image($post->ID);
?>
	<div class="text-block">
		<header>
		<div class="float-right">
<a href="<?php echo get_the_permalink($post->ID) ?>">Read More <i class="fa fa-external-link" aria-hidden="true"></i></a>
		</div>
		
			<h4><a href="<?php echo get_the_permalink($post->ID) ?>"><?php echo get_post_header($post->ID) ?></a></h4></header>
		<div class="entry-content">
		
			<?php the_excerpt(); ?>
			
		</div>
	</div>	
<?php
}

function image_text_overlay_block($post) {
$image =  get_featured_image($post->ID);?> 
<article id="img-post-<?php echo $post->ID; ?>" <?php post_class('image-text-overlay-block') ?>>
	<div class="overlay-block" data-equalizer data-equalize-on="large">
		<?php if($image): ?>
			
	  		<a href="<?php echo get_page_link($post->ID); ?>">
	  			<img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>"/>
		  		<div class="overlay-content" data-equalizer-watch>
					<h4><?php echo get_post_header($post->ID) ?></h4>
					<?php echo get_post_excerpt($post->ID) ?>
				</div>
	  		</a>

		<?php else: ?>

			<h4><?php echo get_post_header($post->ID) ?></h4>
			<?php echo get_post_excerpt($post->ID) ?>
		    <?php the_edit_link(); ?>
   		
		<?php endif; ?>
	</div>                         
</article>
<?php
}

function image_text_split_block($post) {
$image =  get_featured_image($post->ID);?> 
<article id="img-post-<?php echo $post->ID; ?>" <?php post_class('image-text-split-block') ?>>
	<div class="image-text-split-block">
		<?php if($image): ?>
			
	  		
				<div class="image-link">
					<a href="<?php echo get_permalink($post->ID); ?>">
						<img src="<?php echo $image['sizes']['letterbox-medium']; ?>" alt="<?php echo $image['alt']; ?>"/>
						<span>Read More</span>
					</a>
				</div>
				<a href="<?php echo get_permalink($post->ID); ?>"><h4><?php echo get_post_header($post->ID) ?></h4></a>
		  		<div class="entry-content">
					<?php echo get_post_excerpt($post->ID) ?>
				</div>

		<?php else: ?>

			<h4><?php echo get_post_header($post->ID) ?></h4>
			<?php echo get_post_excerpt($post->ID) ?>
		    <?php the_edit_link(); ?>
   		
		<?php endif; ?>
	</div>                         
</article>
<?php
}

function get_post_header($id) {
	if( get_field('header', $id) ) {
	    $header = get_field('header', $id);
	}
	else {
		$header = get_the_title($id);
	}	
	return $header;
}
function get_post_excerpt($id) {
	if( get_field('excerpt', $id) ) {
	    $excerpt = '<div>'.get_field('excerpt', $id).'</div>';
	}
	else {
		$excerpt = get_the_excerpt();
	}
	return 	$excerpt;
}
function child_posts_header_image($title='') {
if ($title):
	?>
		<h3 class="solid"><span><?php echo $title ?></span></h3>
	<?php 
endif;
}
function child_posts_header_text($title='') {
if ($title):
	?>
		<h5><?php echo $title ?></h5>
	<?php 
endif;
}


	
