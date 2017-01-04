<div class="image-block wrap">
	<?php if ( get_sub_field('image') ) : ?>
		<?php $image = get_sub_field('image'); ?>
		<?php if($link_block): ?>
			<a href="<?php echo $link ?>" title="<?php echo $title; ?>" <?php echo $target; ?>>
			<figure class=" <?php echo $image_overlay ?>">
			<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>"/>
			</figure>
			</a>
		<?php else: ?>
			<a href="<?php echo $image['url']; ?>" class="lightbox" ><figure class="<?php echo $image_overlay ?>"><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>"/></figure></a>
		<?php endif; ?>
	<?php endif; ?>	
</div>
