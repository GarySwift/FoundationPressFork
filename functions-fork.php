<?php
/*******************************************************************************************************/
/** Custom functions and includes from this point down - ref: Gary Swift https://github.com/GarySwift */
/*****************************************************************************************************/

define("LIBRARY_FORK", "/library-fork/");

/***********************************************/
/************* Start Posts & pages *************/

# Override "Post Formats" eg. 'gallery', 'link', 'image', 'video', 'status', 'chat'
require_once( 'library-fork/admin-mods-for-content/_wp-post-format-theme-support.php' );
# Tiny MCE extra CSS classes
require_once( 'library-fork/admin-mods-for-content/_tiny-mce.php' );

// ACF Page Builder Parts
require_once( 'library-fork/acf-page-builder-parts/_grid-layout-large-image-blocks.php' );

// Post formats
require_once( 'library-fork/acf/posts/_post-format-image.php' );
require_once( 'library-fork/acf/posts/_post-format-gallery.php' );
require_once( 'library-fork/acf/posts/_post-format-video.php' );

require_once( 'library-fork/wordpress-content-helper-functions/_check-back-soon.php' );
require_once( 'library-fork/wordpress-content-helper-functions/_featured-image.php' );
require_once( 'library-fork/wordpress-content-helper-functions/_read-more.php' );
require_once( 'library-fork/wordpress-content-helper-functions/_video-functions.php' );

require_once( 'library-fork/acf-flexible-content/_flexible-content.php' );
require_once( 'library-fork/wordpress-content-helper-functions/_acf-content.php' );

# the_functions - Various functions that are used to load post content
# These functions are different to default WordPress helper functions
require_once( 'library-fork/wordpress-content-helper-functions/_the-table.php' );
require_once( 'library-fork/wordpress-content-helper-functions/_the-gallery.php' );
require_once( 'library-fork/wordpress-content-helper-functions/_the-video.php' );
require_once( 'library-fork/wordpress-content-helper-functions/_the-story.php' );
require_once( 'library-fork/wordpress-content-helper-functions/_the-map.php' );
require_once( 'library-fork/wordpress-content-helper-functions/_the-breadcrumbs.php' );
# End the_functions

# Form Builder Functions
require_once('library-fork/form-builder/_acf-form-array.php');
require_once('library-fork/form-builder/_email-templates.php');
require_once('library-fork/form-builder/_process-form.php');
require_once('library-fork/form-builder/_functions.php');
require_once('library-fork/form-builder/_front-end-input-loop.php');
require_once('library-fork/form-builder/_form.php');
# @end Form Builder Functions

# Allow users to show sidebar on pages: form-builder, contact, acf-flex
require_once( 'library-fork/acf/_page-layout-settings.php' );


/** Various Advanced Custom Fields function includes */

require_once( 'library-fork/acf/_contact-page-additional-fields.php' );
# Form Builde
require_once( 'library-fork/acf/_acf-function-form-builder.php' );
require_once( 'library-fork/acf/_acf-function-test-pages-notes.php' );

# ACF Sidebar hero-image with header, subheader manager - can be used by multiple templpates - read file for details
$show_hero_image_settings=false;
if($show_hero_image_settings) {
	require_once( 'library-fork/acf/page-or-post-settings/_hero-image.php' );
}

/************* End Posts & pages *************/
/*********************************************/

/** Create an ACF field group for the page template 'CPT Index' and Inject post types into select box so user can select type in flexible content */
/** This allows the user select a post type for the template */
require_once( 'library-fork/acf/page-or-post-settings/_page-settings-cpt-index.php' );
/** Child Posts */
require_once( 'library-fork/child-parent/_child-posts.php' );
/** Function that strips out spaces and converts to lowercase */
require_once( 'library-fork/generic-helper-functions/_slug-text.php' );
/** Google maps API key */
require_once( 'library-fork/_google-api-key.php' );

/** 
  * Custom Navigation - Modify naviation in the topbar, mobile, sidebar etc 
  * 
  * Change default menus
  */
$show_menu_desktop_center=false;
$show_menu_sidebar=true;
$show_menu_visual_sitemap=false;

if($show_menu_desktop_center) {
	require_once( 'library-fork/navigation/_navigation-desktop-center.php' );
}
if($show_menu_sidebar) {
	require_once( 'library-fork/navigation/_walker.php' );
	require_once( 'library-fork/navigation/_navigation-sidebar-menu.php' );
}
if($show_menu_visual_sitemap) {
	require_once( 'library-fork/navigation/_navigation-sitemap-visual.php' );
}
require_once( 'library-fork/navigation/_navigation-left-side-bar.php' );
/** 
  * Admin sidebar options
  *
  * Adds menu items to backend sidebar
  */

# Choose what sidebar fields to show - these are ACF input fields that can be used globally
$show_sidebar_options=true;
$show_sidebar_option_contact_details=true;
$show_sidebar_option_social_media=true;
$show_sidebar_option_company_details=false;
$show_sidebar_option_contact_numbers=true;
$show_sidebar_options_opening_hours=false;
$show_sidebar_option_location=true;
$show_sidebar_option_global_contact_form=false;

if($show_sidebar_options) {
	require_once( 'library-fork/acf-admin-sidebar/_include-sidebar-options-in-functions-file.php' );	
	# Adds the functions to control the sidebar menu items - ACF sidebar options - these are ACF input fields that can be used globally 
	if($show_sidebar_option_contact_details) {
		require_once( 'library-fork/acf-admin-sidebar/_sidebar-option-contact-details.php' );
	}
	# Sidebar Social Media
	if($show_sidebar_option_social_media) {
		require_once( 'library-fork/acf-admin-sidebar/_sidebar-option-social-media.php' );	
	}
	# Sidebar Company Details
	if($show_sidebar_option_company_details) {
		require_once( 'library-fork/acf-admin-sidebar/_sidebar-option-company-details.php' );	
	}
	# Contact Numbers
	if($show_sidebar_option_contact_numbers) {
		require_once( 'library-fork/acf-admin-sidebar/_sidebar-option-contact-numbers.php' );
	}
	# Sidebar Opening Hours
	if($show_sidebar_options_opening_hours) {
		require_once( 'library-fork/acf-admin-sidebar/_sidebar-options-opening-hours.php' );
	}
	# Sidebar location
	if($show_sidebar_option_location) {
		require_once( 'library-fork/acf-admin-sidebar/_sidebar-option-location.php' );
	}	
	// require_once( 'library-fork/acf-admin-sidebar/_google-api-key.php' );
}
/** End admin sidebar options */

/**************************************************************************************************/

/** 
  * Custom Post Types & ACF CPT Additonal Fields & Admin Placeholders
  *
  */

# Choose custom post types to show
$show_testimonials=false;
$show_teams=false;
$show_services=false;
$show_projects=false;
$show_brands=false;
$show_industries=false;
// Excerpt field for multiple post types
# require_once( 'library-fork/custom-post-types/_acf-field-groups-multiple-post-types/_additional_fields_excerpt.php' );
// Alternative header field for multiple post types
# require_once( 'library-fork/custom-post-types/_acf-field-groups-multiple-post-types/_alternative-header.php' ); 
if($show_teams) {
	require_once( 'library-fork/custom-post-types/team/_team.php' ); 
	require_once( 'library-fork/custom-post-types/team/_acf-field-group_team-profile.php' );
	require_once( 'library-fork/custom-post-types/team/_team-title-placeholder.php' );
	require_once( 'library-fork/custom-post-types/team/_posts-screen-columns-team.php');
}
if($show_testimonials) {
	require_once( 'library-fork/custom-post-types/testimonial/_testimonial.php' ); 
	require_once( 'library-fork/custom-post-types/testimonial/_acf-field-group_testimonial-additonal-fields.php' );
	require_once( 'library-fork/custom-post-types/testimonial/_testimonial-title-placeholder.php' );
	// require_once( 'posts-screen-columns/_testimonial.php' );//Change column layout on posts screen
	require_once( 'library-fork/custom-post-types/testimonial/_posts-screen-columns-testimonial.php');

}
if($show_services) {
	require_once( 'library-fork/custom-post-types/service/_service.php' ); 
	// require_once( 'library-fork/custom-post-types/service/_acf-field-group_service-additional-fields-alt-header-feat-pos.php' );
	require_once( 'library-fork/custom-post-types/service/_service-title-placeholder.php' );
	// require_once( 'posts-screen-columns/_service.php' );
	require_once( 'library-fork/custom-post-types/service/_posts-screen-columns-service.php');
}
if($show_projects) {
	require_once( 'library-fork/custom-post-types/project/_project.php' ); 
	require_once( 'library-fork/custom-post-types/project/_acf-field-group_project-additional-fields.php' );
	require_once( 'library-fork/custom-post-types/project/_project-title-placeholder.php' );
	// require_once( 'library-fork/custom-post-types/project/');
}
if($show_brands) {
	require_once( 'library-fork/custom-post-types/brand/_custom-post-type-brand.php' ); 
	require_once( 'library-fork/custom-post-types/brand/_acf-field-group_brand-additonal-fields.php');
	require_once( 'library-fork/custom-post-types/brand/_brand-title-placeholder.php');
	require_once( 'library-fork/custom-post-types/brand/_posts-screen-columns-brand.php');
}
if($show_industries) {
	require_once( 'library-fork/custom-post-types/industry/_industry.php' ); 
	// require_once( 'library-fork/custom-post-types/industry/_acf-field-group_industry-additional-fields-alt-header-feat-pos.php');
	require_once( 'library-fork/custom-post-types/industry/_industry-title-placeholder.php');
	require_once( 'library-fork/custom-post-types/industry/_posts-screen-columns-industry.php');
}

/** End Custom Post Types */

/**************************************************************************************************/

/** 
  * Front End Widgets
  *
  */

# Choose widgets to show
$show_test_widget=false;
$show_text_and_image_box_widget=false;
$sidebar_menu_widget=true;
$show_contact_form_widget=false;
$show_map_widget=false;
$show_contact_details_widget=false;

# Add a sidebar widget
if($sidebar_menu_widget) {
	require_once( 'library-fork/widgets/sidebar-menu-widget/_sidebar-menu-widget-function.php' );
	require_once( 'library-fork/acf/widgets/_widget-sidebar-menu-settings.php' ); /** ACF widget */
}

# Add a simple test widget
if($show_test_widget) {
	require_once( 'library-fork/widgets/test-widget/_test-widget-function.php' );
	require_once( 'library-fork/acf/widgets/_widget-tester.php' );/** ACF widget */	
}

# Add a text and image widget
if($show_text_and_image_box_widget) {
	require_once( 'library-fork/widgets/text-and-image-box-widget/_text-and-image-box-widget-function.php' );
	require_once( 'library-fork/acf/widgets/_widget-text-image-box.php' ); /** ACF widget */	
}

# Add a text and image widget
if($show_contact_form_widget) {
	require_once( 'library-fork/widgets/contact-form-widget/_contact-form-widget-function.php' );
	require_once( 'library-fork/widgets/contact-form-widget/_acf-widget-settings.php' ); // ACF widget settings
}

# Add a text and image widget
if($show_map_widget) {
	require_once( 'library-fork/widgets/map-widget/_map-widget-function.php' );
	require_once( 'library-fork/widgets/map-widget/_acf-widget-settings.php' );// ACF widget settings
}

# Add a contact details widget
if($show_contact_details_widget) {
	require_once( 'library-fork/widgets/contact-details-widget/_contact-details-widget-function.php' );
	require_once( 'library-fork/widgets/contact-details-widget/_acf-widget-settings.php' ); // ACF widget settings
}
	
/** End Front End Widgets */
/**************************************************************************************************/

