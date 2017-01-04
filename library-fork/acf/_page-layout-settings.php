<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_56b09a47645be',
	'title' => 'Page Layout Settings',
	'fields' => array (
		array (
			'key' => 'field_5700d542734f7',
			'label' => 'Page Layout',
			'name' => 'page_layout',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'page' => 'Show Sidebar',
				'page-full-width' => 'Page in Container',
				'page-full-screen' => 'Full Screen Page',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'page-full-width',
			'layout' => 'vertical',
		),
		array (
			'key' => 'field_570e53bab1421',
			'label' => 'Sidebar Side',
			'name' => 'sidebar_side',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_5700d542734f7',
						'operator' => '==',
						'value' => 'page',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'left' => 'Left',
				'right' => 'Right',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'right',
			'layout' => 'horizontal',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/page-afc-flex.php',
			),
		),
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/page-contact.php',
			),
		),
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/page-form-builder.php',
			),
		),
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/page-test.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;