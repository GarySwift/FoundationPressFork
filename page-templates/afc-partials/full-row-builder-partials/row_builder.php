<?php
	$row_style='';
	$section_style='';
	$row_class = '';
	$section_class = classes_string(get_sub_field('class'));
	$padding_class = get_padding_class(get_sub_field('padding'));
	$margin_class = get_margin_class(get_sub_field('margin'));
	$container_class = get_container_class(get_sub_field('offset'), $grid_required=true);
	$debug_mode = get_debug_mode(get_field('debug_mode'));


	if( get_sub_field('image_type') ) {
	    $image_type =  get_sub_field('image_type');

    	if( get_sub_field('image_full') ) {
    		$image = get_sub_field('image_full');			
	    	if($image_type==='bg') {
	  			$row_style = ' style="background-image: url('.$image['url'].')"';
				$row_class = ' row-bg-img';
				$section_style='';
	    	}
	    	elseif($image_type==='full') {
	    		$section_style = ' style="background-image: url('.$image['url'].')"';
	    		$section_class .= ' section-bg-img';
	    		$row_style='';
	    	}
	    }
	}

	$section_image_overlay_tint_class = image_overlay_tint_class($section_style, get_sub_field('image_type'), get_sub_field('overlay_init_state'));
	$row_image_overlay_tint_class = image_overlay_tint_class($row_style, get_sub_field('image_type'), get_sub_field('overlay_init_state'));
?>

<section <?php get_id(get_sub_field('id')) ?>class="row-builder module-wrapper <?php echo $padding_class.$margin_class.$section_image_overlay_tint_class.$section_class.$debug_mode ?>"<?php echo $section_style ?>>
	<div class="row<?php echo $row_image_overlay_tint_class.$row_class ?>" <?php echo $row_style ?>>
		<div class="<?php echo $container_class ?>" >
			<?php 
				if( get_sub_field('hook') ) {
				    $hook = get_sub_field('hook');
				    include($hook);
				}
				else {
					include('_header.php');
					include('_subheader.php');
					include('_content.php');
				}

			?>		
		</div>
	</div>
</section>