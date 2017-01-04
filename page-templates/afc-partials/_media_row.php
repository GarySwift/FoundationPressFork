<?php 
    // media_row

$split = get_sub_field('split');
$diff = 12-$split;
$media_type = get_sub_field('media_type');
    $header = get_sub_field('header');
    $content = get_sub_field('content');
    $read_more = get_sub_field('read_more');
    $image = get_sub_field('image');
    $images = get_sub_field('images');
    $images_in_row = get_sub_field('images_in_row');
    $images_in_row_med = get_sub_field('images_in_row_med');
    $images_in_row_sm = get_sub_field('images_in_row_sm');
    $media_notes = get_sub_field('media_notes');
    $position_text_on_right = get_sub_field('position');
    // if( get_field('show_sidebar') ) {
    //     echo get_field('show_sidebar');
    // }
    // else {
    //     echo 'no';
    // }   
?>

<?php 
    $padding = get_sub_field('padding');
    $padding_top = $padding[0];
    $padding_bottom = $padding[1];
?>

<section class="flex-media-row module-wrapper <?php echo $padding_top ?> <?php echo $padding_bottom ?>">

<!-- <pre>Off:<?php //var_dump(get_sub_field('offset')); ?></pre> -->
<?php if ( !get_field('show_sidebar') && get_sub_field('offset') ) : 

    $offset = get_sub_field('offset');
    $large = 12-($offset['0']*2);
    ?>

<div class="row">
    <div class="small-12 medium-12 large-<?php echo $large; ?> large-offset-<?php echo $offset; ?> columns">
<?php endif; ?>



        <div class="row text-and-thumbs">
        	<?php if($header): ?>
        	<div class="columns"><h3><?php echo $header ?></h3></div>
        	<?php endif; ?>
            <?php if($position_text_on_right): ?>

                <div class="small-12 medium-12 large-<?php echo $split; ?> large-push-<?php echo $diff; ?> columns">
                    <?php include( '_text_and_thumbs__text.php' ); ?>
                    <?php if($read_more): ?>
        				<a class="large button" href="<?php echo $read_more; ?>">Read More</a>
                    <?php endif; ?>
                </div>           
                <div class="small-12 medium-12 large-<?php echo $diff; ?> large-pull-<?php echo $split; ?> columns">
                    <?php include( '_media_row__media.php' ); ?>
                </div>

            <?php else: ?>

                <div class="small-12 medium-12 large-<?php echo $split; ?> columns ">
                    <?php include( '_text_and_thumbs__text.php' ); ?>
                    <?php if($read_more): ?>
        				<a class="large button" href="<?php echo $read_more; ?>">Read More</a>
                    <?php endif; ?>            
                </div>   
                <div class="small-12 medium-12 large-<?php echo $diff; ?> columns">
                    <?php include( '_media_row__media.php' ); ?>
                </div>

            <?php endif; ?>    
        </div>


<?php if ( !get_field('show_sidebar') && get_sub_field('offset') ) : ?>
    </div>
</div>
<?php endif; ?>


</section>



