<?php 
wp_register_script( 'maps', 'https://maps.googleapis.com/maps/api/js?v=3.exp', array(), null, $in_footer = true );
wp_enqueue_script('maps');