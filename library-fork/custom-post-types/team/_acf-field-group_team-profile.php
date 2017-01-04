<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_56b870f5c968e',
	'title' => 'Team Profile',
	'fields' => array (
		array (
			'key' => 'field_56b87524e3541',
			'label' => 'Notes',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Team member\'s full name should go in the title field above',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		// array (
		// 	'key' => 'field_56b8714c53aa2',
		// 	'label' => 'Short Name',
		// 	'name' => 'short_name',
		// 	'type' => 'text',
		// 	'instructions' => 'Abbreviated version of first name or nickname',
		// 	'required' => 0,
		// 	'conditional_logic' => 0,
		// 	'wrapper' => array (
		// 		'width' => '',
		// 		'class' => '',
		// 		'id' => '',
		// 	),
		// 	'default_value' => '',
		// 	'placeholder' => '',
		// 	'prepend' => '',
		// 	'append' => '',
		// 	'maxlength' => '',
		// 	'readonly' => 0,
		// 	'disabled' => 0,
		// ),
		array (
			'key' => 'field_56b8741937422',
			'label' => 'Job Title',
			'name' => 'job_title',
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
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56cb0269b691e',
			'label' => 'Email',
			'name' => 'email',
			'type' => 'email',
			'instructions' => '',
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
		),
		// array (
		// 	'key' => 'field_56cb0296b691f',
		// 	'label' => 'Skype',
		// 	'name' => 'skype',
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
		// 	'placeholder' => '',
		// 	'prepend' => '',
		// 	'append' => '',
		// 	'maxlength' => '',
		// 	'readonly' => 0,
		// 	'disabled' => 0,
		// ),
		array (
			'key' => 'field_56cb02acb6920',
			'label' => 'Phone',
			'name' => 'phone',
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
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56cb03bdd5e35',
			'label' => 'Phone (Readable)',
			'name' => 'phone_read',
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
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_56b8723853aa5',
			'label' => 'Biography',
			'name' => 'bio',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 1,
		),
		// array (
		// 	'key' => 'field_56c5b2edb3e03',
		// 	'label' => 'Quick Bio',
		// 	'name' => 'quick_bio',
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
		// 	'placeholder' => '',
		// 	'prepend' => '',
		// 	'append' => '',
		// 	'maxlength' => '',
		// 	'readonly' => 0,
		// 	'disabled' => 0,
		// ),
		// array (
		// 	'key' => 'field_56e16bb51bc54',
		// 	'label' => 'Images',
		// 	'name' => 'images',
		// 	'type' => 'gallery',
		// 	'instructions' => '',
		// 	'required' => 0,
		// 	'conditional_logic' => 0,
		// 	'wrapper' => array (
		// 		'width' => '',
		// 		'class' => '',
		// 		'id' => '',
		// 	),
		// 	'min' => '',
		// 	'max' => 2,
		// 	'preview_size' => 'thumbnail',
		// 	'library' => 'all',
		// 	'min_width' => '',
		// 	'min_height' => '',
		// 	'min_size' => '',
		// 	'max_width' => '',
		// 	'max_height' => '',
		// 	'max_size' => '',
		// 	'mime_types' => '',
		// ),
		array (
			'key' => 'field_56cb02ceb6921',
			'label' => 'Show in Contact Page',
			'name' => 'show_in_contact_page',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'team',
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