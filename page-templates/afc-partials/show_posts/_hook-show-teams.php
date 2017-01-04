<?php 
if( get_sub_field('post_type') ) :
    $post_type = get_sub_field('post_type');
	$post_class = 'index-card-'.$post_type;
	$article_include = '_article-'.$post_type.'.php';
	$posts = get_posts(array(
	    'post_type'     => $post_type,
	    'posts_per_page'  => get_sub_field('posts_per_page'),
	    'meta_key'      => get_sub_field('meta_key'),
	    'meta_value'    => get_sub_field('meta_value'),
	    // 'order' => 'ASC',
	));  

	if( get_sub_field('offset') ) {
	    $offset = get_sub_field('offset');
	    $large='large-'.(12-$offset*2);
	    $large_offset = 'large-offset-'.$offset;
	}
	else {
		$large_offset = '';
		$large='large-12';
	}	

	if( get_sub_field('id') ) {
	    $id = ' id="'.get_sub_field('id').'" ';
	}
	else {
		$id = '';
	}
	if( get_sub_field('class') ) {
	    $class = get_sub_field('class');
	    // echo $class;
	}
	else {
		$class = '';
	}
	if( $posts ): ?>

		<section <?php echo $id; ?>class="full-builder _module-wrapper <?php echo $padding_top ?> <?php echo $padding_bottom ?> <?php echo $class; ?>"<?php echo $css_id ?>>
			<div class="row">
				<div class="small-12 medium-12 <?php echo $large ?> <?php echo $large_offset ?> columns">
				    <?php if ( get_sub_field('header') ) : ?>	
				    	<div class="row"><div class="columns"><h3 class="header-solid-background"><span><?php echo get_sub_field('header'); ?></span></h3></div></div>
				    <?php endif; ?>


				    <div class="row small-up-1 medium-up-2 large-up-4 text-center">
				        <?php 
				        foreach( $posts as $post ):
				            setup_postdata( $post );
				        ?>
				            <div class="column">
				                <?php include($article_include) ?>
				            </div>
				        <?php 
				        endforeach; // End the loop 
				        wp_reset_postdata(); ?>
				    </div>
			
				    <?php if ( get_sub_field('content') ) : ?>
						<div class="row"><div class="columns content"><?php echo get_sub_field('content'); ?></div></div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php 
	endif; //@end if( $posts )

endif; //@end if( get_sub_field('post_type') )