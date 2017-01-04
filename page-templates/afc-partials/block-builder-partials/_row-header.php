<?php if ( get_sub_field('header') ) : ?>
	<?php if ( get_sub_field('html') ) : ?>
		<?php echo get_sub_field('header'); ?>
		<!-- <br> -->
	<?php else: ?>
		<div class="columns"><h3><?php echo get_sub_field('header'); ?></h3></div>
	<?php endif; ?>
<?php endif;