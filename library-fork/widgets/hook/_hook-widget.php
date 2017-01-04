<?php if( function_exists( 'acf' ) ): ?>

<article class="row widget widget_meta">
	<?php if ( get_field('hook', $widget_id) ) : ?>
		<?php include( get_field('hook', $widget_id) ); ?>
	<?php endif; ?>	
</article>

<?php endif; // End function_exists( 'acf' ) ?>


