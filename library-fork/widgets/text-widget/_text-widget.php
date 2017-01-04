<?php if( function_exists( 'acf' ) ): 
if( get_field('brightlight_text_area_class', $widget_id) ) {
    $article_class=' '.get_field('brightlight_text_area_class', $widget_id);
}
else {
	$article_class='';
}
?>



<article id="brightlight-text-widget" class="row widget widget_meta<?php echo $article_class; ?>">
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


