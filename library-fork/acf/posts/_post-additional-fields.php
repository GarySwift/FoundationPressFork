<?php 
// Creates the ACF module builder for posts
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_557c76602bb85',
	'title' => 'Post Additional Fields',
	'fields' => array (
		array (
			'key' => 'field_557d39eb7cd4f',
			'label' => 'Modules',
			'name' => 'modules',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'button_label' => 'Add Module',
			'min' => '',
			'max' => '',
			'layouts' => array (
				array (
					'key' => '557d39fc8d32e',
					'name' => 'video',
					'label' => 'Video',
					'display' => 'block',
					'sub_fields' => array (
						array (
							'key' => 'field_557d3a0a7cd50',
							'label' => 'Video',
							'name' => 'oembed',
							'type' => 'oembed',
							'instructions' => 'Add Video',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'width' => '',
							'height' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				array (
					'key' => '5582a84e85d75',
					'name' => 'gallery',
					'label' => 'Gallery',
					'display' => 'row',
					'sub_fields' => array (
						array (
							'key' => 'field_5582a85c85d76',
							'label' => 'Images',
							'name' => 'images',
							'type' => 'gallery',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'min' => '',
							'max' => '',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array (
							'key' => 'field_5622277d4e689',
							'label' => 'Gallery Type',
							'name' => 'type',
							'type' => 'radio',
							'instructions' => 'A grid layout work best with images of different orientation. <br>
Use the slider option only if all image are in landscape.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								'grid' => 'Grid',
								'slider' => 'Slider',
							),
							'other_choice' => 0,
							'save_other_choice' => 0,
							'default_value' => 'grid',
							'layout' => 'horizontal',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
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

endif; ?>