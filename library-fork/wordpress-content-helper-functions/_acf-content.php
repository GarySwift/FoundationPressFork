<?php
function the_acf_content($single_post=true, $image_size='') {
	global $post;
	switch (get_post_format( get_the_ID() )) {
	    case "gallery":
	    post_format_gallery($single_post);
	        break;
	    case "video":
	    	post_format_video();
	        break;
	    case "image":
	    	if (!$single_post) {
	    		the_image($single_post, 'letterbox');
	    	}	
	        break;
	    // default:
	    // 	if (!$single_post) {
	    // 		the_image($single_post, 'large');
	    // 	}	      
	}
}

function post_format_video() {
	global $post;
	if ( get_field('video') ) : ?>
	    <div class="embed-container">
	        <?php echo get_field('video') ?>
	    </div>
	<?php
	endif;
}

function post_format_gallery($single_post=true) {
	global $post;
	$images = get_field('gallery');
	$diff= false;
	$count = 0;	
	$limit = count($images);

	// Limit the amount of images shown if shown in blog view to save loading time
	if(!$single_post) {
		$limit=4;
		$totalImgs = count($images);
		if($totalImgs>$limit) {
			$diff = $totalImgs - $limit;
		}	
	} 
	?>
	<div class="row small-up-2 medium-up-4 large-up-4 lightbox-gallery">
		<?php 
		foreach( $images as $image ): 
            $defaultImgCaption = '';
            $defaultImgTitle = '';
	    	?>
			<div class="column">                 
			    <a href="<?php echo $image['url']; ?>" class="lightbox" title="<?php echo ($image['caption'] ? $image['caption']  : $defaultImgCaption ); ?>">
					<img class="thumbnail" src="<?php echo $image['sizes'][ 'thumbnail' ]; ?>" alt="<?php echo ($image['alt'] ? $image['alt']  : 'Image'); ?>" title="<?php echo ($image['title'] ? $image['title']  : $defaultImgTitle); ?>" />
				</a>
			</div>
			<?php
			if (++$count == $limit) {
				break;
			}		
		endforeach; ?>

		<?php if($diff): ?>
			<div class="text-right">
				<i class="fa fa-plus"></i>
				<span class=" badge "><?php echo $diff; ?></span>
			</div>
		<?php endif; ?>	
	</div>
	<?php
}

