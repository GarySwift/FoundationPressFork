<?php 
$image='';
if ($image_type ): ?>
	<?php if ($image_type=='image'): $image = get_sub_field('image'); ?>
		<a href="<?php echo $image["sizes"]["large"]; ?>" class="lightbox" ><img src="<?php echo $image['medium'] ?>" alt="<?php echo $image['alt']; ?>"/></a>
	<?php elseif ($image_type=='crop'): $image = get_sub_field('image_crop'); ?>
		<a href="<?php echo $image["original_image"]["sizes"]["large"]; ?>" class="lightbox" ><img src="<?php echo $image['url'] ?>" class="" alt="<?php echo $image['alt']; ?>"/></a>
	<?php endif ?>
<?php 
endif;