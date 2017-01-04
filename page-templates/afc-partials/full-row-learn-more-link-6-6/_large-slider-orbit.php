<?php
if ( get_sub_field('slides') ) : 
    $slides = get_sub_field('slides'); ?>
    <!-- <div class="row"> -->
    <div class="" data-orbit>
        <ul class="orbit-container">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            <?
            $i=0;
            foreach( $slides as $slide ): 
                $image = $slide['image']; 
                $published = $slide['published'];
                if($published): ?>
                    <li class="orbit-slide">
                        <div class="row">
                            <div class="large-6 <?php if($i%2>0) { echo ' large-push-6';}?> medium-12 small-12 columns">
                                <?php include('_large_slider-image.php'); ?>
                            </div>
                            <div class="large-6 <?php if($i%2>0) { echo ' large-pull-6 ';}?> medium-12 small-12 columns">
                                <?php include('_large_slider-text.php');?>
                            </div>
                        </div>
                    </li>
                    <?php 
                    $i++;
                endif;  //@end if($published)
            endforeach; ?>
        </ul>
        <nav class="orbit-bullets">
            <?php for ($i=0; $i < count($slides); $i++): ?> 
                <button data-slide="<?php echo $i ?>"><span class="show-for-sr"><?php echo $i ?> slide details.</span></button>
            <?php endfor ?> 
        </nav> 
    </div>
    <!-- </div> -->
    <?php 
endif;// @end if ( get_sub_field('slides') )
