<header id="header-banner">
	<div class="row">
		<div class="small-12 medium-12 large-6 columns left-side">

			<?php if ( get_field('banner_left_header', 'option') ) : ?>
				<h3 class="text-center large-text-left"><?php echo get_field('banner_left_header', 'option'); ?></h3>
			<?php endif; ?>
			<h5 class="block text-center large-text-left">We Specialise in the Following</h5>
			<div class="row">
				<div class="small-5 medium-5 large-5 columns">
					<?php if ( have_rows('key_points', 'option') ) : ?>
						<ul class="list">
						<?php while( have_rows('key_points', 'option') ) : the_row(); ?>			
							<li class=""><?php echo the_sub_field('key_point'); ?></li>			
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
				<div class="small-7 medium-7 large-7 columns">
					<?php if ( have_rows('key_points_1', 'option') ) : ?>
						<ul class="list">
						<?php while( have_rows('key_points_1', 'option') ) : the_row(); ?>			
							<li class=""><?php echo the_sub_field('key_point'); ?></li>			
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>						
				</div>
			</div>				
		</div>
		<div class="small-12 medium-12 large-6 columns right-side">
			<?php
			$images = get_field('banner_images', 'option');
			if( $images ): $count=0;?>
			    <div class="row small-up-3 medium-up-3 large-up-3 lightbox-gallery" id="image-circles">
			        <?php foreach( $images as $image ):
						$margin_class= '';
			        	if (++$count<=3) {
			        		$margin_class= ' margin';
			        	} ?>
			            <div class="columns">
			                <a href="<?php echo $image['url']; ?>" class="img-circle-link" title="<?php echo $image['caption']; ?>">
			                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['caption']; ?>" class="img-circle thumbnail<?php echo $margin_class; ?>"/>
			                </a>
			            </div>
			        <?php endforeach; ?>
			    </div>
			<?php endif; ?>									
		</div>
	</div>
</header>