<section id="featured-services">
    <?php if ( get_field('grid_layout_header') ) : ?>
        <div class="row"><h3 class="sectionbreak header"><?php echo get_field('grid_layout_header'); ?></h3></div>
    <?php endif; ?>
    <?php if ( have_rows('blocks') ) : ?>
        <div class="row small-up-1 medium-up-2 large-up-2 image-blocks-content-in-corner">
            <?php while( have_rows('blocks') ) : the_row(); ?>
                <div class="columns block">
                    <?php if ( get_sub_field('image') ) : ?>
                        <?php $image = get_sub_field('image'); ?>
                        <div class="wrapper" <?php echo ' style="max-width:'.($image['sizes']['medium_large']).'px"' ?>>
                            <img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>"/>
                            <div class="corner-content">
                                <?php 
                                   if ( get_sub_field('link_type') !== 'none' ) {
                                        $link_block=true;
                                        $link ='#';
                                        $title = 'Open This Link';
                                        $link_text =  'Read More';
                                        if(get_sub_field('target')) {
                                            $target = ' target="_blank"';
                                        }
                                        else {
                                            $target = '';
                                        }               
                                        switch (get_sub_field('link_type')) {
                                            case "post":                                    
                                                $post = get_sub_field('post');// override $post
                                                setup_postdata( $post );
                                                $link = get_the_permalink();
                                                wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
                                                break;
                                            case "cat":
                                                $link = get_category_link( get_sub_field('cat') );
                                                break;     
                                            case "url":
                                                $link = get_sub_field('url');
                                                break;
                                            case "pdf":                             
                                                $pdf = get_sub_field('pdf');
                                                $link = $pdf['pdf'];
                                                break;
                                            case "post_id":                             
                                                $link = get_the_permalink( get_sub_field('post_id') );
                                                break;
                                        }
                                    }   
                                ?>
                                <a href="<?php echo $link; ?>">
                                    <?php if ( get_sub_field('header') ) : ?>
                                        <h5><?php the_sub_field('header'); ?></h5>
                                    <?php endif; ?>
                                    <?php if ( get_sub_field('content') ) : ?>
                                        <div class="entry-content"><?php echo get_sub_field('content'); ?></div>
                                    <?php endif; ?>                                     
                                </a>                       
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>