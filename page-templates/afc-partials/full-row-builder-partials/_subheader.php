<?php if ( get_sub_field('subheader') ) : ?>			
	<?php if ( get_sub_field('html') ) : ?>
		<?php echo get_sub_field('subheader'); ?>
	<?php else: ?>
		<h5><?php echo get_sub_field('subheader'); ?></h5>
	<?php endif; ?>
<?php endif;