<div class="" > 
    <div class="call-to-action text-center" style="max-width:400px">
        <?php if ( get_sub_field('image') ) : ?>
            <?php $image = get_sub_field('image'); ?>
            <div class="image">
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>"/>
            </div>
        <?php endif; ?> 
        <div class="head">

        <h3 class="subheader"><?php echo get_sub_field('header'); ?></h3></div>
        <div class="body" data-equalizer-watch>
            <?php if ( get_sub_field('content') ) : ?>
                <?php echo get_sub_field('content'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>


                           