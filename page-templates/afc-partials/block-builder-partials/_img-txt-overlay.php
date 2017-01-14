<?php 
$image='';
if ($image_type ) {
	if ($image_type=='image') {
		$image = get_sub_field('image'); 
	} 
	elseif ($image_type=='crop') {
		$image = get_sub_field('image_crop');
	} 
}
if ( $image ) : ?>


	<div class="image-blocks-content-in-corner" <?php echo ' style="max-width:'.($image['width']).'px"' ?>>

		<!-- <pre><?php //var_dump($image) ?></pre> -->
		<!-- Thumbnail image -->
		<?php  /* <a href="<?php echo $image['url']; ?>" class="lightbox" >*/ ?>
	  	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>

		<div class="corner-content" >
		<?php //echo $image['sizes']['medium-height'] ?>
			<?php 
				include('_block-header.php'); 
				include('_content.php');	
			?>
		</div>
	</div>
	<pre><?php //var_dump($image) ?></pre>
	<!-- <pre><?php //var_dump($image) ?></pre> -->
<?php endif;