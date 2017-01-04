<?php 
$posts = get_posts(array(
    'post_type'     => 'team',
    'posts_per_page'  => -1,
    'meta_key'      => 'show_in_contact_page',
    'meta_value'    => '1'
));  

if( $posts ): ?>
    <div class="row"><div class="columns"><h3 class="section-header">Quick Links</h3></div></div>
    <div class="row small-up-1 medium-up-3 large-up-3">
        <?php 
        foreach( $posts as $post ):
            setup_postdata( $post );
        ?>
            <div class="column quick-link">
                <article id="post-<?php the_ID(); ?>" <?php post_class('index-card') ?> >
                    <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>                      
                    <?php if ( get_field('job_title') ) : ?>
                        <p><?php echo get_field('job_title'); ?></p>
                    <?php endif; ?>

                                                                  
                    <?php if ( get_field('email') ) : ?>
                        <a class="quick-link" href="mailto:<?php echo get_field('email'); ?>"><i class="fa fa-envelope-o"></i><span class="key">Email:</span> <span class="value"><?php echo get_field('email'); ?></span></a>
                    <?php endif; ?>


                    <?php if ( get_field('phone') ) : ?>
                        <a class="quick-link" href="tel:<?php echo get_field('phone'); ?>"><i class="fa fa-phone"></i><span class="key">Call:</span> <span class="value"><?php echo get_field('phone'); ?></span></a>
                    <?php endif; ?>


                    <?php if ( get_field('skype') ) : ?>
                        <a class="quick-link" href="skype:<?php echo get_field('skype'); ?>"><i class="fa fa-skype"></i><span class="key">Skype:</span> <span class="value"><?php echo get_field('skype'); ?></span></a>
                    <?php endif; ?>                       
                </article>
            </div>
        <?php 
        endforeach; // End the loop 
        wp_reset_postdata(); ?>

    </div>
<?php 
endif; //@end if( $posts )
?>   