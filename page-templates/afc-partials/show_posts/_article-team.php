<article id="post-<?php the_ID(); ?>" <?php post_class($post_class) ?> >

    <?php $sizes = array();
        $image =  get_featured_image($post, $sizes); 
        if($image): ?>
            <span class="">
                <a href="<?php echo $image['sizes']['large']; ?>" title="<?php the_title(); ?>"><img class="" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo ($image['alt'] ? $image['alt']  : 'Image'); ?>" title="<?php echo ($image['title'] ? $image['title']  : 'defaultImgTitle' ); ?>"></a>
            </span>
    <?php endif; ?>

    <h4><?php the_title(); ?></h4>                      
    <?php if ( get_field('job_title') ) : ?>
        <p><?php echo get_field('job_title'); ?></p>
    <?php endif; ?>                     
</article>