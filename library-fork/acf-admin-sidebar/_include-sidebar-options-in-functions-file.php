<?php 
/** Adds menu items to backend sidebar */
# ref: https://www.advancedcustomfields.com/add-ons/options-page/
if(function_exists('acf_add_options_page')) { 
    $user = wp_get_current_user();
    if (user_can( $user->ID, 'administrator' ) || user_can( $user->ID, 'editor' )) { // Editor and below
        if($show_sidebar_options) {
            acf_add_options_page(array(
                'page_title'    => 'Custom Settings',
                'menu_slug'     => 'custom_settings',
                'icon_url'      => 'dashicons-forms',
                'capability'    => 'manage_options',
                // 'position' => 2,
            )); 
            if($show_sidebar_option_social_media) {
                acf_add_options_sub_page(array(
                    'title' => 'Social Media',
                    'slug' => 'social_media',
                    'parent' => 'custom_settings',
                ));
            }
            if($show_sidebar_option_contact_details) {
                acf_add_options_sub_page(array(
                    'title' => 'Contact Details',
                    'slug' => 'contact_details',
                    'parent' => 'custom_settings',
                ));        
            }
            if($show_sidebar_option_company_details) {
                acf_add_options_sub_page(array(
                    'title' => 'Company Details',
                    'slug' => 'company_details',
                    'parent' => 'custom_settings',
                )); 
            }
            if($show_sidebar_option_contact_numbers) {
                acf_add_options_sub_page(array(
                    'title' => 'Contact Numbers',
                    'slug' => 'contact_numbers',
                    'parent' => 'custom_settings',
                )); 
            }   
            if($show_sidebar_options_opening_hours) {
                acf_add_options_sub_page(array(
                    'title' => 'Opening Hours',
                    'slug' => 'opening-hours',
                    'parent' => 'custom_settings',
                )); 
            }  
            if($show_sidebar_option_location) {   
                acf_add_options_sub_page(array(
                    'title' => 'Location',
                    'slug' => 'location',
                    'parent' => 'custom_settings',
                )); 
            }
            if($show_sidebar_option_global_contact_form) {   
                acf_add_options_sub_page(array(
                    'title' => 'Service Form Fields',
                    'slug' => 'form-fields',
                    'parent' => 'custom_settings',
                )); 
            }  
            acf_add_options_sub_page(array(
                'title' => 'Sign Up Form',
                'slug' => 'sign-up-form',
                'parent' => 'custom_settings',
            ));   
            // acf_add_options_sub_page(array(
            //     'title' => 'Google API Key',
            //     'slug' => 'google-api-key',
            //     'parent' => 'custom_settings',
            // ));
            // acf_add_options_sub_page(array(
            //     'title' => 'Header Banner',
            //     'slug' => 'header-banner',
            //     'parent' => 'custom_settings',
            // )); 

        }        
    }   
}

// if(function_exists('acf_add_options_page')) { 
//     $user = wp_get_current_user();
//     if (user_can( $user->ID, 'administrator' ) || user_can( $user->ID, 'editor' )) { // Editor and below
//         acf_add_options_page(array(
//             'page_title'    => 'Home Page Parts',
//             'menu_slug'     => 'home_page_parts',
//             'icon_url'      => 'dashicons-admin-home',
//             'capability'    => 'manage_options',
//             // 'position' => 2,
//         )); 
//         acf_add_options_sub_page(array(
//             'title' => 'Top Banner',
//             'slug' => 'top_banner',
//             'parent' => 'home_page_parts',
//         ));
//         acf_add_options_sub_page(array(
//             'title' => 'Search Info',
//             'slug' => 'search_info',
//             'parent' => 'home_page_parts',
//         ));                                 
//     }   
// }