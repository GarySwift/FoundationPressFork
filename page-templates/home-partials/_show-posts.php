<?php 
$post_type = 'post';
if( $post_type ) :
	$posts = get_posts(array(
	    'post_type'     => $post_type,
	    'posts_per_page'  => 4,//get_sub_field('posts_per_page'),
	));  
	if( $posts ): ?>
		<section id="home-latest-posts">
			<div class="row">
				<?php if ( get_field('latest_posts_header') ) : ?>
					<h3 class="text-center sectionbreak header paired"><?php echo get_field('latest_posts_header'); ?></h3>
				<?php endif; ?>
				<?php 
					if ( get_field('latest_posts_link') ) {
						$url = get_field('latest_posts_link');
					}
					else {
						$url = '#';
					}
				?>
				<?php if ( get_field('latest_posts_subheader') ) : ?>
					<h5 class="sectionbreak subheader paired"><a href="<?php echo $url; ?>"><?php echo get_field('latest_posts_subheader'); ?></a></h5> 
				<?php endif; ?>
			</div>
		    <div class="row small-up-1 medium-up-2 large-up-4 lightbox-gallery post-block">
		        <?php 
		        foreach( $posts as $post ):
		            setup_postdata( $post );		        
		       		?>
		            <div class="column text-center large-text-left">
			            <?php $image = get_featured_image(); ?>
			            <a href="<?php echo $image['url'] ?>" title="Image for <?php the_title(); ?>" class="lightbox">
			            	<img class="thumbnail" src="<?php echo $image['sizes']['medium_large'] ?>" alt="Image for <?php the_title(); ?>">
			            </a>
			            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		             	<div class="entry-content">
		             		<?php if ( get_field('excerpt') ) : ?>
		             			<?php echo get_field('excerpt'); ?>
		             		<?php endif; ?>
		             	</div>
		            </div>
		        <?php 
		        endforeach; // End the loop 
		        wp_reset_postdata(); ?>
		    </div>
		</section>
	<?php 
	endif; //@end if( $posts )
endif; //@end if( get_sub_field('post_type') )