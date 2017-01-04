<div class="panel" id="driver-widget">
    <?php if ( get_field('widget_image') ) : ?>
		<?php $image = get_field('widget_image'); ?>
		<img src="<?php echo $image['url']; ?>" alt="Window Surgeon Van">
	<?php endif; ?>

    <?php if ( get_field('widget_header') ) : ?>
		 <h4 class="slab"><?php echo get_field('widget_header'); ?></h4>
	<?php endif; ?>
	<?php if ( get_field('widget_content') ) : ?>
		<?php echo get_field('widget_content'); ?>
	<?php endif; ?>
</div>