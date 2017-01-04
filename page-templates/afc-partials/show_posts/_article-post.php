<article id="post-<?php the_ID(); ?>" <?php post_class($post_class) ?> >
    <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
    <?php the_content() ?>                                       
</article>