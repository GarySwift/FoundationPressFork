<?php 
	$count=0;
	$row_type = get_sub_field('row_type');
	$block_type = get_sub_field('block_type');
	$text_and_image_layout = get_sub_field('text_and_image_layout');
	$total = count(get_sub_field('blocks'));
	$blocks_in_row = get_sub_field('blocks_in_row');
	$blocks_in_row_med = get_sub_field('blocks_in_row_med');
	$blocks_in_row_sm = get_sub_field('blocks_in_row_sm');
	$padding = get_sub_field('padding');
	$padding_top = $padding[0];
	$padding_bottom = $padding[1];
	$large_offset = get_sub_field('row_builder_large_offest');
	$classes_string = classes_string(get_sub_field('class'));
	$image_overlay='';
	$overlay_init_state='';
	if( get_sub_field('image_overlay') ) {
	     $image_overlay = 'tint t2';
	}
?>
<?php echo get_container_class( get_sub_field('row_builder_large_offest', false) ) ?>
<section class="row-builder-with-blocks module-wrapper lightbox-container <?php echo $classes_string ?> <?php echo get_padding_class(get_sub_field('padding')) ?>">
	<div class="row">
		<div class="<?php echo get_container_class( get_sub_field('row_builder_large_offest'), false ) ?>">
			<?php 
				include('_row-header.php');
				include('_block-loop.php');
			?>
		</div>
	</div>
</section>