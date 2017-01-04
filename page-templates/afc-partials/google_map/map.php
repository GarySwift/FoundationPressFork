<section class="google-map module-wrapper <?php get_padding_class(get_sub_field('padding')) ?>">
<?php 
    global $include_google_maps_in_footer;
    $include_google_maps_in_footer=true; // If set to true, google maps script for api call will be included in the footer

    if(get_sub_field('map')): 
        $map = get_sub_field('map');
        $latLng = array();
        $latLng[] = $map['lat'];
        $latLng[] = $map['lng'];

        if (!empty($map)): ?>
            <div class="acf-map">
                <div class="marker" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>"></div>
            </div>
        <?php 
        endif;
    endif; 
?>	
</section>