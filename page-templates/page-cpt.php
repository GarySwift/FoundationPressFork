<?php
/*
 * Template Name: CPT Index
 */

get_header(); 
if( get_field('page_post_type') ) {
    $post_type = get_field('page_post_type');
}
else {
    $post_type = 'post';
}
?>

<div id="page" role="main">
    <article class="main-content">
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array( 
                'post_type' => $post_type, 
                'posts_per_page' => 4, 
                'paged' => $paged,
            );
            global $wp_query;
            $wp_query = new WP_Query($args);
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();                        
                    ?>
                    <div class="content-wrapper">
                        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                        <?php the_breadcrumbs(51, $parent, get_the_title($post->ID) ) ?>
                        <?php the_image($single_post=false) ?>
                        <div class="entry-content">
                            <?php 
                                the_excerpt();
                                the_table(); 
                            ?>   
                        </div>                       
                    </div>
                    <?php 
                endwhile; 
            else :
                get_template_part( 'template-parts/content', 'none' ); 

            endif; // End have_posts() check.
        ?>

        <!-- then the pagination links -->

        <?php /* Display navigation to next/previous pages when applicable */ ?>
        <?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
            <nav id="post-nav">
                <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
                <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
            </nav>
        <?php } ?>

    </article>
    <?php get_sidebar(); ?>

</div>

<?php get_footer();
