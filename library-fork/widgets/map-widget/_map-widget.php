<article class="large-5 columns widget widget_meta map-widget">
	<div class="row">
		<div class="columns large-no-pad">
			<h6><i class="fa fa-map-marker" aria-hidden="true"></i> Location</h6>
			<?php 
				$location = get_field('google_map', 'option');
				if( !empty($location) ):
					?>
					<div class="acf-map footer">
						<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
					<?php 
				endif;
			?>
			<div class="address">
				<h6 class="secondary address"><i class="fa fa-map" aria-hidden="true"></i> Address</h6>
				<div>
					<?php if ( have_rows('address', 'option') ) : ?>
						<?php while( have_rows('address', 'option') ) : the_row(); ?>	
							<div><?php the_sub_field('value'); ?></div>		
						<?php endwhile; ?>	
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</article>


