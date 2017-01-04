<?php if ( get_sub_field('image') ) : ?>
	<?php $image = get_sub_field('image'); ?>
	<div class="overlay-block" <?php echo ' style="max-width:'.($image['sizes']['medium_large-width']).'px"' ?> data-equalizer data-equalize-on="large">

		<!-- <pre><?php //var_dump($image) ?></pre> -->
		<!-- Thumbnail image -->
		<?php  /* <a href="<?php echo $image['url']; ?>" class="lightbox" >*/ ?>
	  	<img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>"/>


		<div class="overlay-content" data-equalizer-watch>
		<?php //echo $image['sizes']['medium-height'] ?>
			<?php 
				include('_block-header.php'); 
				include('_content.php');	
			?>
		</div>
	</div>
	<!-- <pre><?php //var_dump($image) ?></pre> -->
<?php endif;