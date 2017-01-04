<?php 
function the_video($video, $title='Video') {
	if ( $video ) :?>
		<div class="entry-content-part">
			<?php 
			if($title): 
				?>
					<h5><?php echo $title; ?></h5>
				<?php 
			endif; 	
			?>	
		    <div class="embed-container">
		        <?php echo get_field('video') ?>
		    </div>
	    </div>
		<?php 
	endif;
}
