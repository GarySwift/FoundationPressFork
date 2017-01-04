<ul>
	<?php if ( get_field('contact_name', 'option') ) : ?>
		<li><?php echo get_field('contact_name', 'option'); ?></li>
	<?php endif; ?>

	<?php if ( have_rows('address', 'option') ) : ?>
	
		<?php while( have_rows('address', 'option') ) : the_row(); ?>
	
			<li><?php the_sub_field('value'); ?></li>
	
		<?php endwhile; ?>
	
	<?php endif; ?>								
</ul>	