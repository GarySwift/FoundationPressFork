<?php 
    // text_&_thumbs
    $header = get_sub_field('header');
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    $position_text_on_right = get_sub_field('position');
?>

<div class="row module-wrapper text-and-thumbs">
    <?php if($header): ?>
        <h3><?php echo $header ?></h3>
    <?php endif; ?>

    <?php if($position_text_on_right): ?>

        <div class="small-12 medium-12 large-7 large-push-5 columns">
            <?php include( '_text_and_image__text.php' ); ?>
        </div>           
        <div class="small-12 medium-12 large-5 large-pull-7 columns text-center">
            <?php  include( '_text_and_image__image.php' ); ?> 
        </div>

    <?php else: ?>

        <div class="small-12 medium-12 large-7 columns">
            <?php include( '_text_and_image__text.php' ); ?>
        </div>   
        <div class="small-12 medium-12 large-5 columns text-center">
            <?php  include( '_text_and_image__image.php' ); ?> 
        </div>

    <?php endif; ?>    
</div>
<!-- <hr> -->
<!-- <pre>
    <?php //var_dump($image); ?>
</pre> -->
