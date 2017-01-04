<?php
if( function_exists('acf_add_local_field_group') ):

// acf_add_local_field_group(array (
// 	'key' => 'group_5746cfe0e066c',
// 	'title' => 'Additional Fields',
// 	'fields' => array (
// 		array (
// 			'key' => 'field_5746cffb81345',
// 			'label' => 'Excerpt',
// 			'name' => 'excerpt',
// 			'type' => 'textarea',
// 			'instructions' => 'Add a short version of the content without formatting',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array (
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'default_value' => '',
// 			'placeholder' => '',
// 			'maxlength' => 160,
// 			'rows' => 3,
// 			'new_lines' => '',
// 			'readonly' => 0,
// 			'disabled' => 0,
// 		),
// 	),
// 	'location' => array (
// 		array (
// 			array (
// 				'param' => 'post_type',
// 				'operator' => '==',
// 				'value' => 'industry',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => 1,
// 	'description' => '',
// ));

acf_add_local_field_group(array (
	'key' => 'group_5744286e2d9f7',
	'title' => 'Industry Alternative Header',
	'fields' => array (
		array (
			'key' => 'field_5744288c2c66c',
			'label' => 'Alternative Header',
			'name' => 'header',
			'type' => 'text',
			'instructions' => 'Use this field to give a less verbose header if the standard header is too long.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'industry',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => 'Use this field to give a less verbose header',
));

// acf_add_local_field_group(array (
// 	'key' => 'group_5746be70cdd30',
// 	'title' => 'Featured Post',
// 	'fields' => array (
// 		array (
// 			'key' => 'field_5746be7b96f55',
// 			'label' => 'Featured',
// 			'name' => 'featured',
// 			'type' => 'true_false',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array (
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'message' => 'Tick to give this post priority',
// 			'default_value' => 0,
// 		),
// 	),
// 	'location' => array (
// 		array (
// 			array (
// 				'param' => 'post_type',
// 				'operator' => '==',
// 				'value' => 'industry',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'side',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => 1,
// 	'description' => '',
// ));

endif;