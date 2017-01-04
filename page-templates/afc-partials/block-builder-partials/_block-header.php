<?php if ( get_sub_field('header') ) : ?>
	<?php if($link_block): ?>
		<h4>
			<a href="<?php echo $link; ?>" title="<?php echo $title; ?>" <?php echo $target; ?>><?php echo get_sub_field('header'); ?></a>
		</h4>
	<?php else: ?>
		<h4><?php echo get_sub_field('header'); ?></h4>
	<?php endif; ?>
<?php endif;