<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_56e462f7cb7da',
	'title' => 'Sidebar Option: Location',
	'fields' => array (
		array (
			'key' => 'field_56e4631218465',
			'label' => 'Address',
			'name' => 'address',
			'type' => 'repeater',
			'instructions' => 'Keys are optional',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_56e4633218467',
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Address Line',
			'sub_fields' => array (
				array (
					'key' => 'field_56e4632618466',
					'label' => 'Key',
					'name' => 'key',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Eg. City',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_56e4633218467',
					'label' => 'Value',
					'name' => 'value',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Waterford City',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
		// array (
		// 	'key' => 'field_56e4668c9c2ed',
		// 	'label' => 'Address Notes',
		// 	'name' => 'address_notes',
		// 	'type' => 'text',
		// 	'instructions' => '',
		// 	'required' => 0,
		// 	'conditional_logic' => 0,
		// 	'wrapper' => array (
		// 		'width' => '',
		// 		'class' => '',
		// 		'id' => '',
		// 	),
		// 	'default_value' => '',
		// 	'placeholder' => 'Eg. By Appointment Only',
		// 	'prepend' => '',
		// 	'append' => '',
		// 	'maxlength' => '',
		// 	'readonly' => 0,
		// 	'disabled' => 0,
		// ),
		// array (
		// 	'key' => 'field_56e5b6dfae56f',
		// 	'label' => 'Map Header',
		// 	'name' => 'map_header',
		// 	'type' => 'text',
		// 	'instructions' => '',
		// 	'required' => 0,
		// 	'conditional_logic' => 0,
		// 	'wrapper' => array (
		// 		'width' => '',
		// 		'class' => '',
		// 		'id' => '',
		// 	),
		// 	'default_value' => '',
		// 	'placeholder' => 'Eg. Come Visit Our Showroom',
		// 	'prepend' => '',
		// 	'append' => '',
		// 	'maxlength' => '',
		// 	'readonly' => 0,
		// 	'disabled' => 0,
		// ),
		// array (
		// 	'key' => 'field_56e4636d18468',
		// 	'label' => 'Google Map',
		// 	'name' => 'google_map',
		// 	'type' => 'google_map',
		// 	'instructions' => '',
		// 	'required' => 0,
		// 	'conditional_logic' => 0,
		// 	'wrapper' => array (
		// 		'width' => '',
		// 		'class' => '',
		// 		'id' => '',
		// 	),
		// 	'center_lat' => '52.259320',
		// 	'center_lng' => '-7.110070',
		// 	'zoom' => 16,
		// 	'height' => '',
		// ),
	// 	array (
	// 		'key' => 'field_56e463f418469',
	// 		'label' => 'Directions',
	// 		'name' => 'directions',
	// 		'type' => 'repeater',
	// 		'instructions' => '',
	// 		'required' => 0,
	// 		'conditional_logic' => 0,
	// 		'wrapper' => array (
	// 			'width' => '',
	// 			'class' => '',
	// 			'id' => '',
	// 		),
	// 		'collapsed' => 'field_56e4640e1846a',
	// 		'min' => '',
	// 		'max' => '',
	// 		'layout' => 'table',
	// 		'button_label' => 'Add Directions',
	// 		'sub_fields' => array (
	// 			array (
	// 				'key' => 'field_56e4640e1846a',
	// 				'label' => 'Header',
	// 				'name' => 'header',
	// 				'type' => 'text',
	// 				'instructions' => '',
	// 				'required' => 0,
	// 				'conditional_logic' => 0,
	// 				'wrapper' => array (
	// 					'width' => '',
	// 					'class' => '',
	// 					'id' => '',
	// 				),
	// 				'default_value' => '',
	// 				'placeholder' => 'Eg. From North Road',
	// 				'prepend' => '',
	// 				'append' => '',
	// 				'maxlength' => '',
	// 				'readonly' => 0,
	// 				'disabled' => 0,
	// 			),
	// 			array (
	// 				'key' => 'field_56e464221846b',
	// 				'label' => 'Content',
	// 				'name' => 'content',
	// 				'type' => 'textarea',
	// 				'instructions' => '',
	// 				'required' => 0,
	// 				'conditional_logic' => 0,
	// 				'wrapper' => array (
	// 					'width' => '',
	// 					'class' => '',
	// 					'id' => '',
	// 				),
	// 				'default_value' => '',
	// 				'placeholder' => '1. Turn west on 5th 2. Take a right on Pleasant View Rd. Follow South. 3.Turn Left on Riverbend Ave. Follow East.',
	// 				'maxlength' => '',
	// 				'rows' => '',
	// 				'new_lines' => 'wpautop',
	// 				'readonly' => 0,
	// 				'disabled' => 0,
	// 			),
	// 		),
	// 	),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'location',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;