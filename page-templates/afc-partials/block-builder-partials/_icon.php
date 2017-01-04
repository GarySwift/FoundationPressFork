<?php if ( get_sub_field('icon') ) : ?>
	<?php if($link_block): ?>
		<span class="icon">
			<a href="<?php echo $link; ?>" title="<?php echo $title; ?>" <?php echo $target; ?>><i class="fa <?php echo get_sub_field('icon') ?>"></i></a>
		</span>		
	<?php else: ?>
		<span class="icon">
			<i class="fa <?php echo get_sub_field('icon') ?>"></i>
		</span>
	<?php endif; ?>
<?php endif; ?>