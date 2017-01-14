<?php 
if( get_sub_field('hook') ) {
    $hook = get_sub_field('hook');
}
if ( have_rows('blocks') ) : ?>
	<?php 
		if ($block_type==='call') {
			$data_equalizer = 'data-equalizer';
			$call_to_action = 'call-to-actions';
		} 
		else {
			$data_equalizer='';
			$call_to_action='';
		}
$row_class = row_class($row_type, $total, $blocks_in_row_sm, $blocks_in_row_med, $blocks_in_row);

// $row_class = 'small-'.$blocks_in_row_sm.' medium-'.$blocks_in_row_med.' large-'.$blocks_in_row.' columns';
// echo "<br><pre>"; var_dump($row_class); echo "</pre>";

	?> 

	<div class="<?php echo $row_class ?> block-<?php echo $block_type . ' ' .$text_and_image_layout ?> <?php echo $call_to_action ?>" <?php echo $data_equalizer ?>>
		<?php while( have_rows('blocks') ) : the_row(); $count++; ?>
			<?php $block_class = block_class($row_type, $total, $count, $blocks_in_row_sm, $blocks_in_row_med, $blocks_in_row); ?>
			<div class="<?php echo $block_class ?>">
			<?php //echo $block_class; ?>
				<?php 
					$link_block=false;
					include('_link.php');

					if($block_type==='icon') {
						include('_icon.php');
						include('_block-header.php');
						include('_content.php');	
					} 
					else if ($block_type==='img') {
						if($text_and_image_layout==='side') {
							if($hook) {
								include($hook);
							}
							else {
								include('_img-txt-side-by-side.php');
							}
						}
						else if($text_and_image_layout==='over') {
							if($hook) {
								include($hook);
							}
							else {
								include('_img-txt-over-under.php');
							}
						}
						else if($text_and_image_layout==='overlay') {	
							if($hook) {
								include($hook);
							}
							else {
								include('_img-txt-overlay.php');
							}
						}
						else if($text_and_image_layout==='custom') {
							if($hook) {
								include($hook);
							}
							else {
								include('_img-txt-over-under.php');
							}
						}
					}
					else if ($block_type==='img_only') {
						include('_img-only.php');

					}
					else if ($block_type==='text') {
						?>
						<div class="columns">

						<?php
						include('_block-header.php');
						include('_content.php');	
						echo '</div>';
					}
					else if ($block_type==='call') {
						include('_call-to-action.php');
					}
					
				    
				    				    
			    ?>
			</div>
	  	<?php endwhile; ?>
	</div>
<?php endif;