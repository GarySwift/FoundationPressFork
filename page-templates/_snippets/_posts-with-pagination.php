<?php 
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array( 
		'post_type' => 'project', 
		'posts_per_page' => 2, 
		'paged' => $paged,
	);
	$wp_query = new WP_Query($args);
	while ( have_posts() ) : the_post(); 
	?>
	    <h2><?php the_title() ?></h2>
	    <div class="entry-content"><?php the_excerpt() ?></div>
	<?php 
	endwhile; 
?>

<!-- then the pagination links -->
<?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>
<hr>
<?php previous_posts_link( 'Newer posts &rarr;' );