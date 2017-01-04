<article class="row widget widget_meta sidebar-menu-widget">
	<?php if ( get_field('title', $widget_id) ) : ?>
		<h6><?php echo get_field('title', $widget_id); ?></h6>
	<?php //else: ?>
		<!-- <h6>Please Add a Title</h6> -->
	<?php endif; ?>
	<ul class="sidebar-menu"><?php sidebar_nav(); ?></ul>
</article>


