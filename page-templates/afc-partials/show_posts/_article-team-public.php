<article id="post-<?php the_ID(); ?>" <?php post_class($post_class) ?> >

    <?php $sizes = array();
        $image =  get_featured_image($post, $sizes); 
        if($image): ?>
            <span class="">
                <a href="<?php echo $image['sizes']['large']; ?>" title="<?php the_title(); ?>"><img class="thumbnail" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo ($image['alt'] ? $image['alt']  : 'Image'); ?>" title="<?php echo ($image['title'] ? $image['title']  : 'defaultImgTitle' ); ?>"></a>
            </span>
    <?php endif; ?>

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