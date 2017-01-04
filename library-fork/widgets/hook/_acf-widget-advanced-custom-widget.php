<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_574db236844be',
	'title' => 'Widget: Advanced Developer Widget',
	'fields' => array (
		array (
			'key' => 'field_574db26e0674d',
			'label' => 'Hook',
			'name' => 'hook',
			'type' => 'text',
			'instructions' => 'The PHP script filename',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Eg. _hook-contact.php',
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
				'param' => 'widget',
				'operator' => '==',
				'value' => 'hook_widget',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));

endif;