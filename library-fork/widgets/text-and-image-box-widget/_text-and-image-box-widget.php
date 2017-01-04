<?php if( function_exists( 'acf' ) ): 

	$article_class='';
	$article_id='';
	if( get_field('class', $widget_id) ) {
	    $article_class=' '.get_field('class', $widget_id);
	}

	$image_location='';
	if ( get_field('image_location', $widget_id) ) {
		$image_location = get_field('image_location', $widget_id);
	}

	$image='';
	if ( get_field('image', $widget_id) ) {
		$image =  get_field('image', $widget_id);
	}

	$image_allignment='';
	if ( get_field('image_allignment', $widget_id) ) {
		$image_allignment =  'text-'.get_field('image_allignment', $widget_id);
	}

	if ( get_field('hook', $widget_id) ) {
		$article_id = get_field('hook', $widget_id);
		$article_id = ltrim($article_id, '_');
		$article_id = substr($article_id,0, -4);
		$article_id = ' id="'.$article_id.'"';
	}
	?>

	<article<?php echo $article_id; ?> class="row widget widget_meta brightlight-text-widget<?php echo $article_class; ?>">

	<?php if ( get_field('hook', $widget_id) ) : ?>
		<?php include( get_field('hook', $widget_id) ); ?>

	<?php else: ?>
		<?php 
			if($image && $image_location==='above') {
				include('_image.php');
			} 
		?>

		<?php if ( get_field('title', $widget_id) ) : ?>
			<h6><?php echo get_field('title', $widget_id); ?></h6>
		<?php else: ?>
			<h6>Please Add a Title</h6>
		<?php endif; ?>

		<?php 
			if($image && $image_location==='under') {
				include('_image.php');
			} 
		?>

		<?php if ( get_field('content', $widget_id) ) : ?>
			<div class="content"><?php echo get_field('content', $widget_id); ?></div>
		<?php endif; ?>	

		<?php 
			if($image && $image_location==='content') {
				include('_image.php');
			} 
		?>		
	<?php endif; ?>	




	</article>

<?php endif; // End function_exists( 'acf' )
