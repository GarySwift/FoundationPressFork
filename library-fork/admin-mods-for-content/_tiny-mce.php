<?php
function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

/*
 * Callback function to filter the MCE settings
 */

function my_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Subheader',  
			'block' => 'div',  
			'classes' => 'subheader',
			'wrapper' => true,
		), 
		array(  
			'title' => 'Lead Paragraph',  
			'block' => 'div',  
			'classes' => 'lead',
			'wrapper' => true,
		),
		array(  
			'title' => 'Callout',  
			'block' => 'div',  
			'classes' => 'callout',
			'wrapper' => true,
		),
		array(  
			'title' => 'Callout Primary',  
			'block' => 'div',  
			'classes' => 'callout primary',
			'wrapper' => true,
		),
		array(  
			'title' => 'Callout Secondary',  
			'block' => 'div',  
			'classes' => 'callout secondary',
			'wrapper' => true,
		),
		array(  
			'title' => 'Callout Success',  
			'block' => 'div',  
			'classes' => 'callout success',
			'wrapper' => true,
		),						
		array(  
			'title' => 'Callout Warning',  
			'block' => 'div',  
			'classes' => 'callout warning',
			'wrapper' => true,
		),
		array(  
			'title' => 'Callout Alert',  
			'block' => 'div',  
			'classes' => 'callout alert',
			'wrapper' => true,
		),	
		array(  
			'title' => 'Promo Box',  
			'block' => 'div',  
			'classes' => 'callout promobox',
			'wrapper' => true,
		),		
		array(  
			'title' => 'Statistics',  
			'block' => 'div',  
			'classes' => 'stat',
			'wrapper' => true,
		),
		array(  
			'title' => 'Small',  
			'inline' => 'small',
		),
		array(  
			'title' => 'Custom Span', 
			'inline' => 'span', 
			'classes' => 'custom-span',
		),		
		// array(  
		// 	'title' => 'Preformatted Text',  
		// 	'block' => 'pre',
		// 	'wrapper' => true,
		// ),
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 


/*
 * Add the <hr> button to the Visual Editor (TinyMCE)
 */
function enable_more_buttons($buttons) {
  $buttons[] = 'hr';
  /* 
  Repeat with any other buttons you want to add, e.g.
	  $buttons[] = 'fontselect';
	  $buttons[] = 'sup';
  */
  return $buttons;
}
add_filter("mce_buttons", "enable_more_buttons");