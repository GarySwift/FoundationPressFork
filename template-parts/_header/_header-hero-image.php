


<?php if ( get_field('hero_image') && get_field('hero_image') === 'industry' ) : ?>
	<header id="featured-hero" role="banner" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/heros/industry.jpg')">
		<div class="row">
		<div class="headers">
				<?php 
	if ( get_field('hero_html') ) :	
		echo '<div class="headers">';
		if ( get_field('hero_header') ) : 
			echo get_field('hero_header'); 
		endif; 
		if ( get_field('hero_subheader') ) : 
			echo get_field('hero_subheader'); 
		endif; 
		echo '</div>';
	else: ?>
		<?php if ( get_field('hero_header') ) : ?>
			<h2><?php echo get_field('hero_header'); ?></h2>
		<?php endif; ?>
		<?php if ( get_field('hero_subheader') ) : ?>
			<h3><?php echo get_field('hero_subheader'); ?></h3>
		<?php endif;
	endif; 
	?>
	</div>
		</div>
	</header>
	<?php else: ?>

	<?php $header_settings = get_header_settings(); ?>

	<header id="featured-hero" class="<?php echo $header_settings['class']; ?>" role="banner" style="background-image: url('<?php echo $header_settings['bg-img']; ?>')">
		<div class="row">
			<div class="headers">
				<h2 class="utility"><?php echo $header_settings['header']; ?></h2>
			<h3 class="utility-tagline"><?php echo $header_settings['subheader']; ?></h3>
			<!-- <h5 class="block-header-no-line"><?php //echo $header_settings['tagline']; ?></h5> -->
			</div>
		</div>
	</header>

<?php endif;


function get_header_settings() {
	global $post;
	$post_type= get_post_type();
	$post_name=$post->post_name;
	// echo $post_type;
	// echo '<br>';
	// echo $post_name;
	$header_settings = array();
	$default_tagline = 'Comprehensive installation &amp; administrative support';
	$header_settings['post-title'] = get_the_title();
	$header_settings['header'] = get_bloginfo('name');
	$header_settings['subheader'] = get_bloginfo('description');
	$header_settings['tagline'] = $default_tagline;
	$header_settings['bg-img'] =  get_stylesheet_directory_uri().'/assets/images/heros/hero.jpg';
	$header_settings['class'] =  'slim';
	
	if($post_type==='service') {
		$ancestors = get_ancestors( get_the_id(), $post_type );
		// echo "<pre>";
		// 	var_dump($ancestors);
		// echo "</pre>";
		if(!count($ancestors)) { //if it is a top level service
			$top_level_parent_id = get_the_id();
		}
		else {
			$top_level_parent_id = end($ancestors);
		}
		
		$header_settings = set_header_settings($top_level_parent_id);
	}
	elseif ($post_type==='utility') {
		$header_settings = set_header_settings($post_name);
	}


	// echo get_the_id();
	// $ancestors = get_ancestors( get_the_id(), $post_type );
	// $top_level_parent_id = end($ancestors);
	// $top_level_parent = get_post($top_level_parent_id);
	// echo "<pre>";
	// 	var_dump($top_level_parent->post_title);
	// 	var_dump($top_level_parent->ID);
	// echo "</pre>";
	// $header_settings['bg-img'] =  get_stylesheet_directory_uri().'/assets/images/images/heros/cladding.jpg';
	// switch (get_the_id()) {
	//     case 5:
	//         echo "i equals 0";
	//         break;
	//     case 1:
	//         echo "i equals 1";
	//         break;
	//     case 2:
	//         echo "i equals 2";
	//         break;
	// }	



	return $header_settings;
}

function set_header_settings($type) {
	$header_settings = array();
	$header_settings['class'] =  'slim';
	$default_tagline = 'Comprehensive installation &amp; administrative support';
	switch ($type) {
	    case 5://"flooring":
	    	if( get_field('solar_header', 'option') ) {
	    	    $header_settings['header'] = get_field('solar_header', 'option');
	    	}
	    	else {
	    		$header_settings['header'] = 'Every Floor';
	    	}

    		if( get_field('solar_subheader', 'option') ) {
    			$header_settings['subheader'] = get_field('solar_subheader', 'option');
    		}
    		else {
    			$header_settings['subheader'] = 'We Have It Covered';
    		}

    		// if( get_field('solar_tagline', 'option') ) {
    		// 	 $header_settings['tagline'] = get_field('solar_tagline', 'option');
    		// }
    		// else {
    		// 	 $header_settings['tagline'] = $default_tagline;
    		// }
	        $header_settings['bg-img'] =  get_stylesheet_directory_uri().'/assets/images/heros/hero.jpg';
	        break;
	    case 31://"wall-cladding":
	    	if( get_field('wind_header', 'option') ) {
	    	    $header_settings['header'] = get_field('wind_header', 'option');
	    	}
	    	else {
	    		$header_settings['header'] = 'Restaurant';
	    	}

    		if( get_field('wind_subheader', 'option') ) {
    			$header_settings['subheader'] = get_field('wind_subheader', 'option');
    		}
    		else {
    			$header_settings['subheader'] = 'Wall Cladding';
    		}

    		// if( get_field('wind_tagline', 'option') ) {
    		// 	 $header_settings['tagline'] = get_field('wind_tagline', 'option');
    		// }
    		// else {
    		// 	 $header_settings['tagline'] = $default_tagline;
    		// }
	        $header_settings['bg-img'] =  get_stylesheet_directory_uri().'/assets/images/heros/cladding.jpg';
	}
	return $header_settings;					
}

