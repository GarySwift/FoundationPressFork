<h3>What's in the Box?</h3>
<?php
$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'lsb-search'
));
if( $posts ): ?>	
	<ul id="box-list-footer">	
	<?php foreach( $posts as $post ): 
		setup_postdata( $post )
		?>
		<li>
			<?php if ( get_field('alternative_header') ) : ?>
				<?php echo get_field('alternative_header'); ?> 
			<?php else: ?>
				<?php the_title(); ?>
			<?php endif; ?>
			<i class="fa fa-check" aria-hidden="true"></i>
		</li>
	<?php endforeach; ?>
	</ul>
	<?php wp_reset_postdata(); ?>
<?php endif;