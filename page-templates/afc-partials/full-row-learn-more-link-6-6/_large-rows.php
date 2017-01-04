<?php
if ( get_sub_field('slides') ) : 
    $slides = get_sub_field('slides'); ?>
    <div class="row">
        <?
        $i=0;
        foreach( $slides as $slide ): 
            $image = $slide['image']; 
            $published = $slide['published'];
            if($published): ?>

                <div class="row">
                    <div class="large-6 <?php if($i%2>0) { echo ' large-push-6';}?> medium-12 small-12 columns">
                        <?php include('_large_slider-image.php'); ?>
                    </div>
                    <div class="large-6 <?php if($i%2>0) { echo ' large-pull-6 ';}?> medium-12 small-12 columns">
                        <?php include('_large_slider-text.php');?>
                    </div>
                </div>

                <?php 
                $i++;
            endif;  //@end if($published)
        endforeach; ?>

    </div>
<?php 
endif;// @end if ( get_sub_field('slides') )
