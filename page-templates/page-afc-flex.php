<?php
/*
Template Name: AFC Flexible
*/
get_header(); 
include('general-partials/_page-id.php');
include('afc-partials/_functions/_functions.php');
// include('forms/_form-head.php'); 

// if( function_exists( 'acf' ) ) {
//     // $page_id = 'page-full-width';
//     // if( get_field('show_sidebar') ) {
//     //     $page_id = 'page';
//     // }
//     // else {
//     //     $page_id = 'page-full-width';
//     // }
//     // $page_id = 'page-full-screen';
//     // if( get_field('page_layout') ) {
//     //    $page_id =  get_field('page_layout');
//     // }

//     function section_class($subfield) {
        
//     }

       
// }
if( get_field('class') ) {
    $class = 'class="'.slug(get_field('class')).'" ';
}
else {
    $class='';
}
?>

<!-- <div class="row" id="page-row">     -->
<!-- <div id="page" role="main"> -->
<div id="<?php echo $page_id; ?>" <?php echo $class ?>role="main">
    <article class="main-content">

<?php if( function_exists( 'acf' ) ): ?>

    <?php $pageTitle = get_field("page_title"); 
          if($pageTitle): ?>
            <h1><?php echo $pageTitle; ?></h1>    
    <?php endif; 

        // check if the flexible content field has rows of data
        if( have_rows('modules') ):

            // loop through the rows of data
            while ( have_rows('modules') ) : the_row();//Start the AFC loop

                // New Section ***************************
                if( get_row_layout() == 'text_&_thumbs' ):
                    include 'afc-partials/_text_and_thumbs.php';        

                // New Section ***************************
                elseif(get_row_layout() == 'media_text' ):
                    include 'afc-partials/_media_row.php';

                // New Section ***************************
                // Block Builder
                elseif(get_row_layout() == 'row_builder_with_blocks' ):
                    $filename='';
                    if( get_sub_field('section_hook') ) {
                        $filename = 'afc-partials/block-builder-partials/'.get_sub_field('section_hook');
                        if (file_exists(dirname(__FILE__).'/'.$filename)) {
                            include $filename;
                        }
                        else {
                            include 'afc-partials/block-builder-partials/_error-msg-no-section-hook-found.php';

                        }
                    }
                    else {
                        include 'afc-partials/block-builder-partials/block-builder.php';
                    }
                elseif(get_row_layout() == 'row_builder' ):
                    include 'afc-partials/full-row-builder-partials/row_builder.php';

                // New Section ***************************
                // elseif(get_row_layout() == 'section_header' ):
                //     include 'afc-partials/_section-header.php';

                // New Section ***************************
                elseif(get_row_layout() == 'portfolio_gallery' ):
                    include 'afc-partials/_portfolio_gallery.php';

                // New Section ***************************
                // elseif(get_row_layout() == 'text_&_image' ):
                //     include 'afc-partials/_text_and_image.php';

                // New Section ***************************
                // elseif(get_row_layout() == 'text_text_image' ):
                //     include 'afc-partials/_text_text_image.php';

                // New Section ***************************
                // elseif(get_row_layout() == 'h_spacer' ):
                //     include 'afc-partials/_h_spacer.php';

                // New Section ***************************
                // elseif(get_row_layout() == 'selling_points' ):
                //     include 'afc-partials/selling-points/_selling_points.php';

                // New Section ***************************
                // elseif(get_row_layout() == 'selling_point' ):
                //     include 'afc-partials/_selling_point.php';

                // New Section ***************************
                // Full Row - Learn More Link (6/6 Split, image/text) [With sliding option]
                elseif(get_row_layout() == 'large_slider' ):
                    include 'afc-partials/full-row-learn-more-link-6-6/_large_slider.php';

                // New Section ***************************
                elseif(get_row_layout() == 'learn-more-large' ):
                    include 'afc-partials/_learn-more-large.php';

                // New Section ***************************
                // elseif(get_row_layout() == 'product_6_6' ):
                //     include 'afc-partials/_product_6_6.php';
       
                // New Section ***************************
                elseif(get_row_layout() == 'show_posts' ):
                    if( get_sub_field('hook') ) {
                        $hook = get_sub_field('hook');
                        include 'afc-partials/show_posts/'.$hook;
                    }
                    else {
                        include 'afc-partials/show_posts/_show_posts.php';
                    }
                    

                 // New Section ***************************
                elseif(get_row_layout() == 'google_map' ):
                    include 'afc-partials/google_map/map.php';
                //_hook-stained-glass.php

                // New Section ***************************
                elseif(get_row_layout() == 'hook' ):
                    if( get_sub_field('hook') ) {
                        $hook = get_sub_field('hook');
                        include 'afc-partials/'.$hook;
                    }
                endif;
                
            endwhile;// End the AFC loop    
        endif; // End have_rows('modules')

        // Form Builder
        //include('forms/_form.php');

?>
<?php else: // Else function_exists( 'acf' ) ?>

    <div class="callout large alert">
      <h5>Please Install Advanced Custom Fields Pro</h5>
      <p>Use the Advanced Custom Fields plugin to take full control of your edit screens &amp; custom field data</p>
      <a href="http://www.advancedcustomfields.com/pro/">ACF PRO</a>
    </div>

<?php endif; // End function_exists( 'acf' ) ?>
    </article>

<?php include('general-partials/_sidebar-acf-check.php'); ?>

</div>
<?php get_footer();