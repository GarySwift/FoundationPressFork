<?php //echo ' style="max-width:'.($image['sizes']['medium_large-width']).'px"' ?> 
<article id="post-<?php the_ID(); ?>" <?php post_class($post_class) ?> >


    <?php ?>
	<?php $image =  get_featured_image($post->ID); ?>
	<div class="overlay-block" data-equalizer data-equalize-on="large">
		<?php if($image): ?>
			
	  		<a href="<?php echo get_page_link($post->ID); ?>">
	  			<img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>"/>
		  		<div class="overlay-content" data-equalizer-watch>
					<?php if ( get_field('header') ) : ?>
				    	<h4><?php echo get_field('header'); ?></h4>
				    <?php else: ?>
				    	<h4><?php the_title(); ?></h4>
				    <?php endif; ?>

					<?php if ( get_field('excerpt') ) : ?>
				    	<div><?php echo get_field('excerpt'); ?></div>
				    <?php else: ?>
				    	<?php the_excerpt(); ?>
				    <?php endif; ?>
				</div>
	  		</a>

		<?php else: ?>

				<!-- <div class="columns"> -->
					<?php if ( get_field('header') ) : ?>
				    	<div class="column"><h4><?php echo get_field('header'); ?></h4></div>
				    <?php else: ?>
				    	<div class="column"><h4><?php the_title(); ?></h4></div>
				    <?php endif; ?>

					<?php if ( get_field('excerpt') ) : ?>
				    	<div class="column"><?php echo get_field('excerpt'); ?></div>
				    <?php else: ?>
				    	<div class="column"><?php the_excerpt(); ?></div>
				    <?php endif; ?>
				    <!-- <hr> -->
				    <?php the_edit_link(); ?>
				<!-- </div> -->
    		
		<?php endif; ?>
	</div>
                              
</article>