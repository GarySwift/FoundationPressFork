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
	$image_type = get_sub_field('image_type');
	echo "<pre>count: "; var_dump($count); echo "</pre>";
	echo "<pre>row_type: "; var_dump($row_type); echo "</pre>";
	echo "<pre>block_type: "; var_dump($block_type); echo "</pre>";
	echo "<pre>text_and_image_layout: "; var_dump($text_and_image_layout); echo "</pre>";
	echo "<pre>total: "; var_dump($total); echo "</pre>";
	echo "<br><pre>blocks_in_row: "; var_dump($blocks_in_row); echo "</pre>";
	echo "<pre>blocks_in_row_med: "; var_dump($blocks_in_row_med); echo "</pre>";
	echo "<pre>blocks_in_row_sm: "; var_dump($blocks_in_row_sm); echo "</pre>";
	echo "<br><pre>padding: "; var_dump($padding); echo "</pre>";
	echo "<pre>padding_top: "; var_dump($padding_top); echo "</pre>";
	echo "<pre>large_offset: "; var_dump($large_offset); echo "</pre>";
	echo "<pre>classes_string: "; var_dump($classes_string); echo "</pre>";
	echo "<pre>image_overlay: "; var_dump($image_overlay); echo "</pre>";
	echo "<pre>overlay_init_state: "; var_dump($overlay_init_state); echo "</pre>";
	echo "<pre>image_type: "; var_dump($image_type); echo "</pre>";


	$css_id = get_sub_field('id');
	// $css_class = get_sub_field('class');
	if ($css_id) {
		$section_css_id = ' id="section-'.$css_id.'"';
	}
	// echo "<pre>css_id: "; var_dump($css_id); echo "</pre>";
	// echo "<pre>css_class: "; var_dump($css_class); echo "</pre>";

?>

<?php //echo get_container_class( get_sub_field('row_builder_large_offest', false) ) ?>
<section<?php echo $section_css_id ?> class="row-builder-with-blocks module-wrapper lightbox-container <?php echo $classes_string ?> <?php echo get_padding_class(get_sub_field('padding')) ?>">
	<div class="row">
		<div class="<?php echo get_container_class( get_sub_field('row_builder_large_offest'), false ) ?>">
			<?php 
				include('_row-header.php');
				include('_block-loop.php');
			?>
		</div>
	</div>
</section>