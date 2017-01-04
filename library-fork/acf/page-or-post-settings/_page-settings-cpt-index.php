<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_573d737196da9',
	'title' => 'Page Settings: CPT Index',
	'fields' => array (
		array (
			'key' => 'field_573d737b104c6',
			'label' => 'Page Post Type',
			'name' => 'page_post_type',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				// 'post' => 'Post',
				// 'project' => 'Project',
				// 'sector' => 'Sector',
				// 'product' => 'Product',
				// 'utility' => 'Utility',
				// 'service' => 'Service',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/page-cpt.php',
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


/*
 * Gets all posts types and injects them into select box so user 
 * can select post type
 *
 * Used by two ACF field groups
 */
function acf_load_post_types_choices( $field ) {   
    // reset choices
    $field['choices'] = array();
    // Posts are built in so we add them here instead
    $field['choices']['post' ] = 'Post';
    // Filter the query so only custom post types are returned
    $args = array(
       '_builtin' => false
    );

    $output = 'names'; // names or objects, note names is the default
    $operator = 'and'; // 'and' or 'or'

    // Get post types
    $post_types = get_post_types( $args, $output, $operator ); 

    foreach ( $post_types as $post_type ) {
        // Do not add the ypes in the array
        if ( !in_array($post_type, array('acf-field-group','acf-field'), true ) ) {
            $field['choices'][$post_type] = ucfirst ($post_type);
        }
    }
    // return the field
    return $field;
    
}
// Unknown injection 
// add_filter('acf/load_field/name=post_type', 'acf_load_post_types_choices');
// Page Template: CPT Index
add_filter('acf/load_field/name=page_post_type', 'acf_load_post_types_choices');