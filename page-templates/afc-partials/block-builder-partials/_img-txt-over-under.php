<div class="row">
	<div class="columns">
<?php if ( get_sub_field('image') ) : ?>
	<?php $image = get_sub_field('image'); ?>
	<!-- Thumbnail image -->
	<?php  ?>
  	<a href="<?php echo $image['url']; ?>" class="lightbox" ><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>"/></a>
<?php endif; ?>		


	</div>

</div>
<div class="row">
	<div class="columns">
		<?php include('_block-header.php'); 
		include('_content.php');	
		?>


	</div>
</div>