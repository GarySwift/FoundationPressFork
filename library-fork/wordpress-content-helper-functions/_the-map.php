<?php
function the_map($class='') {
    global $include_google_maps_in_footer;
    $include_google_maps_in_footer=true; // If set to true, google maps functions will be included in the footer

    if(get_field('google_map', 'option')): 
        $map = get_field('google_map', 'option');
        $latLng = array();
        $latLng[] = $map['lat'];
        $latLng[] = $map['lng'];

        if (!empty($map)): ?>
            <div class="acf-map <?php echo $class; ?>">
                <div class="marker" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>"></div>
            </div>
        <?php 
        endif;
    endif; 	
}