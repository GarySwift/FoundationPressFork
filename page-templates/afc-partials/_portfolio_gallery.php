<?php
    // portfolio_gallery 
    $images = get_sub_field('images');

    $small_size = 'small-up-2';
    $medium_size = 'medium-up-3';
    $large_size = 'large-up-4';
    
    if( get_sub_field('blocks_per_row_small') ) {
        $small_size = 'small-up-'.get_sub_field('blocks_per_row_small');
    }
    if( get_sub_field('blocks_per_row_medium') ) {
         $medium_size =  'medium-up-'.get_sub_field('blocks_per_row_medium');
    }
    if( get_sub_field('blocks_per_row_large') ) {
        $large_size = 'large-up-'.get_sub_field('blocks_per_row_large');
    }
    $image_size = 'medium';
    if( get_sub_field('image_size') ) {
        $image_size = get_sub_field('image_size');
    }


?>
<section class="module-wrapper <?php get_padding_class(get_sub_field('padding')) ?>">
    <div class="row">
        <?php if ( get_sub_field('header') ) : ?>     
            <div class="columns"><h3><?php echo get_sub_field('header'); ?></h3></div>
        <?php endif; ?>
        <?php if ( get_sub_field('content') ) : ?>
            <div class="columns"><?php echo get_sub_field('content'); ?></div>
        <?php endif; ?>        
    </div>
    <?php if( $images ): ?>
        
        <div class="row <?php echo $small_size.' '.$medium_size.' '.$large_size; ?> lightbox-gallery">
            <?php foreach( $images as $image ): ?>
                <div class="column text-center">
                    <a href="<?php echo $image['url']; ?>" title="<?php echo ($image['caption'] ? $image['caption']  : 'Enlarged Image' ); ?>">
                        <img src="<?php echo $image['sizes'][$image_size]; ?>" alt="<?php echo ($image['caption'] ? $image['caption']  : 'Portfolio Image' ); ?>" class="thumbnail" />
                    </a>
                    <p><?php //echo $image['caption']; ?></p>
                </div>
            <?php endforeach; ?>         
        </div>
    <?php endif; ?>
</section>