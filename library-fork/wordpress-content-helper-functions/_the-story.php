<?php
/*
 * Outputs a ACF built 'Story Board'. 
 *
 * Simply rows of 'Header + Content' + 'Image'. Includes a lightbox feature
 */
function the_story($title='Project Narative') {
	global $post;
	
	if ( have_rows('story_board') ) : ?>
		<div class="entry-content-part">
			<?php 
			if($title): 
				?>
					<h5><?php echo $title; ?></h5>
				<?php 
			endif; ?>

			<div id="story-board" class="lightbox-gallery ">
				<?php while( have_rows('story_board') ) : the_row(); ?>
				    <div class="row story-board">
				    	<div class="small-12-medium-6 large-7 columns">
				    		<?php if ( get_sub_field('subheader') ) : ?>
				    			<h5 class="subheader"><?php the_sub_field('subheader'); ?></h5>
				    			<hr>
				    		<?php endif; ?>
				    		<?php the_sub_field('content'); ?>
				    	</div>
				    	<div class="small-12-medium-6 large-5 columns">
				    		<?php $image = get_sub_field('image'); ?>										
				    		<a href="<?php echo $image['original_image']['sizes']['fp-large'] ?>" title="<?php the_sub_field('subheader'); ?>">
				    			<img src="<?php echo $image['url'] ?>" class="thumbnail" alt="<?php the_sub_field('subheader'); ?>">
				    		</a>
				    	</div>
				    </div>
			
			    <?php endwhile; ?>					
			</div>
		</div>
	<?php endif;
}