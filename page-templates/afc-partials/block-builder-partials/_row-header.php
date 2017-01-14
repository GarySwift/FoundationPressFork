<?php if ( get_sub_field('header') ) : ?>
	<?php if ( get_sub_field('html') ) : ?>
		<?php echo get_sub_field('header'); ?>
	<?php else: ?>
		<h3><?php echo get_sub_field('header'); ?></h3>
	<?php endif; ?>
<?php endif;