<?php 
    //text_text_image 
    $header = get_sub_field('header');
    $content_1 = get_sub_field('content_1');
    $content_2 = get_sub_field('content_2');
    $image = get_sub_field('image');
    $position_text_on_right = get_sub_field('position');
 ?>

<div class="row module-wrapper">

    <?php if($position_text_on_right): ?>

        <div class="small-12 medium-12 large-8 large-push-4 columns">
            <?php //include( '_text_and_thumbs__text.php' ); ?>
            <?php include( '_text_text_image__textx2.php' ); ?> 
        </div>           
        <div class="small-12 medium-12 large-4 large-pull-8 columns">
            <?php  //include( '_text_and_thumbs__thumbs.php' ); ?> 
            <?php include( '_text_text_image__image.php' ); ?>
        </div>

    <?php else: ?>

        <div class="small-12 medium-12 large-8 columns ">
            <?php //include( '_text_and_thumbs__text.php' ); ?>
            <?php include( '_text_text_image__textx2.php' ); ?> 
        </div>   
        <div class="small-12 medium-12 large-4 columns">
            <?php  //include( '_text_and_thumbs__thumbs.php' ); ?> 
            <?php include( '_text_text_image__image.php' ); ?>
        </div>

    <?php endif; ?>    
</div>
<!-- <hr>
<pre>
    <?php //var_dump($image); ?>
</pre> -->
