<?php
function the_gallery($images, $title='Gallery', $multi=false) {
	// global $post;
	$diff= false;

	// Limit the amount of images shown if shown in blog view to save loading time
	if( $multi ) {
		$limit = 4;
		$count = 0;	
		$totalImgs = count($images);

		if($totalImgs>$limit) {
			$diff = $totalImgs - $limit;
		}	
	}

	if($images): ?>
		<div class="entry-content-part">
			<?php 
			if($title): 
				?>
					<h5><?php echo $title; ?></h5>
				<?php 
			endif; 	
			?>	
			<div class="row small-up-2 medium-up-4 large-up-4 lightbox-gallery">
				<?php foreach( $images as $image ): 
			            $defaultImgCaption = '';
			            $defaultImgTitle = '';
			    	?>
					<div class="column">                 
					    <a href="<?php echo $image['sizes']['large']; ?>" title="<?php echo ($image['caption'] ? $image['caption']  : $defaultImgCaption ); ?>">
							<img class="thumbnail" src="<?php echo $image['sizes'][ 'thumbnail' ]; ?>" alt="<?php echo ($image['alt'] ? $image['alt']  : 'Image'); ?>" title="<?php echo ($image['title'] ? $image['title']  : $defaultImgTitle); ?>" />
						</a>
					</div>
					<?php
						if (++$count == $limit) {
							break;
						}
					?>
				<?php endforeach; ?>

				<?php if($diff): ?>
					<div class="text-right"><i class="fa fa-plus"></i> <span class=" badge "><?php echo $diff; ?></span></div>
				<?php endif; ?>
			</div>
		</div>
		<?php
	endif;
}