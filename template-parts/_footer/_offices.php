<h3>Contact Us</h3>
<?php
$posts = get_posts(array(
	'posts_per_page'	=> 2,
	'post_type'			=> 'office'
));
if( $posts ): ?>	
	<div class="row" id="footer-offices">

		<?php foreach( $posts as $post ): 
			setup_postdata( $post )
			?>
			<div class="small-6 medioum-6 large-6 columns">
				<h5><?php the_title(); ?></h5>

				<?php if ( have_rows('address_lines') ) : ?>				
					<div class="address">
						<?php while( have_rows('address_lines') ) : the_row(); ?>
							<div class="address-line"><?php the_sub_field('line'); ?></div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

				<?php if ( get_field('email') ) : ?>
					<div class="phone">
						<a href="mailto:<?php echo get_field('email'); ?>" title="Email Us"><?php echo get_field('email'); ?></a>
					</div>
				<?php endif; ?>		
				
				<?php if ( get_field('_phone') ) : ?>
					<?php 
						$phone = get_field('phone'); 
						if( get_field('phone_readable') ) {
						    $phone_readable = get_field('phone_readable');
						}
						else {
							$phone_readable = $phone;
						}
					?>
					<div class="email"><span>Free Phone: </span><a href="tel:<?php echo $phone; ?>" title="Call us"><?php echo $phone_readable; ?></a></div>
				<?php endif; ?>	

			</div>		
		<?php endforeach; ?>
	</div>
	<?php wp_reset_postdata(); ?>
<?php endif;