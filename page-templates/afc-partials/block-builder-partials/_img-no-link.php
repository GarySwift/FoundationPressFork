<?php 
$image='';
if ($image_type ): ?>
	<?php if ($image_type=='image'): $image = get_sub_field('image'); ?>
		<img src="<?php echo $image['medium'] ?>" alt="<?php echo $image['alt']; ?>"/>
	<?php elseif ($image_type=='crop'): $image = get_sub_field('image_crop'); ?>
		<img src="<?php echo $image['url'] ?>" class="" alt="<?php echo $image['alt']; ?>"/>
	<?php endif ?>
<?php 
endif;