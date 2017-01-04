<div class="row">
	<div class="small-6 medium-6 large-6 columns">
		<?php if ( get_sub_field('image') ) : ?>
			<?php $image = get_sub_field('image'); ?>
		  	<a href="<?php echo $image['url']; ?>" class="lightbox" ><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>"/></a>
		<?php endif; ?>		
	</div>
	<div class="small-6 medium-6 large-6 columns">
		<?php 
			include('_block-header.php'); 
			include('_content.php');	
		?>
	</div>
</div>