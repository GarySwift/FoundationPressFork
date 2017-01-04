<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5801f84e7aac7',
	'title' => 'Contact Form Widget',
	'fields' => array (
		array (
			'key' => 'field_5801f8682ebcf',
			'label' => 'Configuration',
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
			'message' => 'This widget must be configured in:
<b>Custom Setting > Widget Contact Form</b>
(Admin level only)',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'widget',
				'operator' => '==',
				'value' => 'contact_form_widget',
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