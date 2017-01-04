<?php 
    // text_&_thumbs
    $header = get_sub_field('header');
    $content = get_sub_field('content');
    $images = get_sub_field('images');
    $images_in_row = get_sub_field('images_in_row');
    $images_notes = get_sub_field('images_notes');
    $img_layout_class = 'large-up-3';
    if($images_in_row == 2 ) {
        $img_layout_class = 'large-up-2';
    }
    $position_text_on_right = get_sub_field('position');
?>


<div class="row module-wrapper text-and-thumbs">
<?php if($header): ?>
<h3><?php echo $header ?></h3>
<?php endif; ?>

    <?php if($position_text_on_right): ?>

        <div class="small-12 medium-12 large-8 large-push-4 columns">
            <?php include( '_text_and_thumbs__text.php' ); ?>
        </div>           
        <div class="small-12 medium-12 large-4 large-pull-8 columns">
            <?php  include( '_text_and_thumbs__thumbs.php' ); ?> 
        </div>

    <?php else: ?>

        <div class="small-12 medium-12 large-8 columns ">
            <?php include( '_text_and_thumbs__text.php' ); ?>
        </div>   
        <div class="small-12 medium-12 large-4 columns">
            <?php  include( '_text_and_thumbs__thumbs.php' ); ?> 
        </div>

    <?php endif; ?>    
</div>
