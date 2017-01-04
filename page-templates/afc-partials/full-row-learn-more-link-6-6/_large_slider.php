<?php 
    $padding = get_sub_field('padding');
    $padding_top = $padding[0];
    $padding_bottom = $padding[1];
?>
<section class="full-row-learn-more-link module-wrapper <?php echo $padding_top ?> <?php echo $padding_bottom ?>">
<?php
    if( get_sub_field('slider') ) {
        include('_large-slider-orbit.php');
    }
    else {
        include('_large-rows.php');
    }
?>
</section>
   

