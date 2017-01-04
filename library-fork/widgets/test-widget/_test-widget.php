<?php if( function_exists( 'acf' ) ): ?>

<article id="test-widget" class="row widget widget_meta">
	<?php if ( get_field('title', $widget_id) ) : ?>
		<h6><?php echo get_field('title', $widget_id); ?></h6>
	<?php else: ?>
		<h6>Please Add a Title</h6>
	<?php endif; ?>
	<?php if ( get_field('content', $widget_id) ) : ?>
		<div> <?php echo get_field('content', $widget_id); ?></div>
	<?php endif; ?>	
</article>

<?php endif; // End function_exists( 'acf' ) ?>


