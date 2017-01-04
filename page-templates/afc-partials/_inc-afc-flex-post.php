<?php
/**
 * Created by PhpStorm.
 * User: gary
 * Date: 16/06/15
 * Time: 11:01
 */

// check if the flexible content field has rows of data
if (have_rows('modules')):

    // loop through the rows of data
    while (have_rows('modules')) : the_row();

// New Section ***************************
        if (get_row_layout() == 'video'):
            ?>
            <div class="embed-container">
                <?php
                // get iframe HTML
                $iframe = the_sub_field('oembed');

                // use preg_match to find iframe src
                preg_match('/src="(.+?)"/', $iframe, $matches);
                $src = $matches[1];

                // add extra params to iframe src
                $params = array(
                    'controls' => 0,
                    'hd' => 1,
                    'autohide' => 1
                );

                $new_src = add_query_arg($params, $src);
                $iframe = str_replace($src, $new_src, $iframe);

                // add extra attributes to iframe html
                $attributes = 'frameborder="0"';
                $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
                echo $iframe;
                ?>
            </div>

        <?php
// New Section ***************************
        elseif (get_row_layout() == 'map'):

            $location = get_sub_field('map');
            if (!empty($location)):
                ?>
                <div class="acf-map">
                    <div class="marker" data-lat="<?php echo $location['lat']; ?>"
                         data-lng="<?php echo $location['lng']; ?>"></div>
                </div>
            <?php endif;

// New Section ***************************
        elseif (get_row_layout() == 'leaflet'):
            $location = get_sub_field('route');

            if (!empty($location)):
                ?>
                <h1>Leaflet</h1>
                <div class="acf-map__">
                    <div class="marker" data-lat="<?php echo $location['lat']; ?>"
                         data-lng="<?php echo $location['lng']; ?>"></div>
                </div>
            <?php endif; ?>
            <div class="acf-map__">
                <!--                        --><?php //the_leaflet_subfield( $location);
                ?>
            </div>
        <?php


        // New Section ***************************
        elseif (get_row_layout() == 'race_table'):

            $rows = get_sub_field('row');
            ?>
            <div class="row module-wrapper">
            <table id="myTable" class="tablesorter">
                <thead>
                <tr>
                    <th width="200">Name</th>
                    <th width="200">Club</th>
                    <th width="150">Time</th>
                    <th width="150">Position</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['club']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td><?php echo $row['position']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            </div><?php
        // endif;

        // New Section ***************************
        elseif (get_row_layout() == 'gallery'):

            $images = get_sub_field('images');

                $type = get_sub_field('type');
                // echo 'type'.$type;
                    //echo $type;
                    switch ($type) {
                        case 'grid':
                            $wrapper_open = "\n".'<ul data-clearing class="clearing-thumbs">';
                            $wrapper_close = "\n".'</ul>';
                            $content_type = 'li';
                            break;
                        case 'slider':
                            $wrapper_open = "\n".'<div id="slick-'. get_the_ID().'" class="slick-slider">';
                            $wrapper_close = "\n".'</div>';
                            $content_type = 'div';                          
                            break;                          
                    }
            ?>
            <div class="row module-wrapper">
  <?php
/* Start Image Gallery */
// if( have_rows('images') ):
    // $images = get_field('images');
    if( $images ): ?>
        <!-- <ul data-clearing class="clearing-thumbs">  -->
        <?php echo $wrapper_open; ?>
        <?php foreach( $images as $image ): 
                $caption='';

                                // vars
                            $url = $image['url'];
                            $title = $image['title'];           
                            $caption = $image['caption'];
                            $alt = $image['alt'];
                            if($alt=='')
                                $alt='Image';

                            // thumbnail
                            $size = 'thumbnail';
                            $thumb = $image['sizes'][ $size ];
                            $width = $image['sizes'][ $size . '-width' ];
                            $height = $image['sizes'][ $size . '-height' ];

                            ?>
            <?php echo "\n<$content_type>"; ?>
            <!-- <li> -->


<?php 
                    switch ($type) {
                        case 'grid':
                                if($caption!=''){
                                    $caption = 'data-caption="'.$caption.'" ';
                                }
                                   ?>
                                            <a href="<?php echo $url; ?>"><img src="<?php echo $thumb; ?>" <?php echo $caption; ?>alt="<?php echo $alt; ?>"></a>
                                    <?php                    
                            break;
                        case 'slider': ?>
                <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                            <!-- <div class="orbit-caption"><?php //echo $caption; ?></div> -->
                                            <?php 
                                            if($caption!=''): ?>
                                            <div class="panel"><p class="slick-caption"><?php echo $caption; ?></p></div>
                                            <?php
                                            endif; //End if caption                    
                            break;                          
                    } ?>                
            <!-- </li> -->
            <?php echo "\n</$content_type>";     ?>
        <?php endforeach; ?>

<?php endif; //End if images ?>
        <!-- </ul> -->

<?php echo $wrapper_close;
//endif; //End if row
/* End Image Gallery */
?>
            </div><?php
        endif;
        //End the AFC loop
    endwhile;
endif;
?>