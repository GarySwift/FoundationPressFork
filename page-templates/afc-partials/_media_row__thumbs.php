<?php 
	$small_up = 'small-up-2';
	$medium_up = 'medium-up-4';
    $large_up = 'large-up-3';
    if($images_in_row) {
        $large_up = 'large-up-'.$images_in_row;
    }
    if($images_in_row_med) {
        $medium_up = 'medium-up-'.$images_in_row_med;
    }
    if($images_in_row_sm) {
        $small_up = 'small-up-'.$images_in_row_sm;
    }

?>
<div class="row <?php echo $small_up; ?> <?php echo $medium_up; ?> <?php echo $large_up; ?>">
    <?php foreach( $images as $image ): ?>
    <div class="column">
        <a href="<?php echo $image['url']; ?>">
            <img class="thumbnail" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
        </a>
    </div>
    <?php endforeach; ?>
</div>    

