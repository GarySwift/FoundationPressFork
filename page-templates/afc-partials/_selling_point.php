<?php 
    // selling_point
    $header = get_sub_field('header');
    $content = get_sub_field('content');
    $icon = get_sub_field('icon');
 ?>



<div class="row module-wrapper">
    <div class="small-12 large-10 large-offset-1 columns">
        <div class="selling-point-panel">
            <div class="fa-wrap"><i class="fa <?php echo ($icon ? $icon  : 'fa-check' ); ?> fa-5x"></i></div>
            <?php if($header): ?>
            <h2><?php echo $header ?></h2>
            <?php endif; ?>
            <?php echo $content ?>
        </div>        
    </div>
</div>