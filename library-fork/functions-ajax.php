<?php

// Add the JS
function add_theme_ajax_scripts() {
   // These php variables will be available in Javascript as global variables - Eg. MyAjax.ajaxurl, MyAjax.security
  wp_localize_script( 'wp-enqueue-script', 'MyAjax', array(
    // URL to wp-admin/admin-ajax.php to process the request
    'ajaxurl' => admin_url( 'admin-ajax.php' ),
    // generate a nonce with a unique ID "ajax-nonce-string" so that you can check it later when an AJAX request is sent
    'security' => wp_create_nonce( AJAX_NONCE )
  ));
  /*
    Example JavaScript log  - Note only 'ajaxurl' and 'security' need to defined on server

    data = {
      action: "ajax_action",
      ajaxurl: "http://localhost:8888/foundationpress/wp-admin/admin-ajax.php",
      security: "9eb945ee08",
      whatever: 10
    };
  */
}
add_action( 'wp_enqueue_scripts', 'add_theme_ajax_scripts' );

// The function that handles the AJAX request
function ajax_action_callback() {
  //Verifies the Ajax request to prevent processing requests external of the blog.
  check_ajax_referer( AJAX_NONCE, 'security' );//ref: https://codex.wordpress.org/Function_Reference/check_ajax_referer

  $whatever = intval( $_POST['whatever'] );
  $whatever += 10;
  // echo json_encode($_POST['security'];
  echo $whatever;
  die(); // this is required to return a proper result
}
add_action( 'wp_ajax_ajax_action', 'ajax_action_callback' );
// add_action( 'wp_ajax_nopriv_ajax_action', 'ajax_action_callback' );

function submit_request_form_callback() {
    check_ajax_referer( AJAX_NONCE, 'security' );

    $post =array();
    foreach ($_POST['form'] as $input) {
        $post[$input["name"]] = $input["value"];
    }  

    global $form_settings;
    $form_settings = get_form_data("form_inputs", "option"); 
    $form_settings["ajax"] = true;
    $form_settings = process_form($form_settings, $post);
    echo json_encode( $form_settings );
    die(); // this is required to return a proper result
}
add_action( 'wp_ajax_submit_request_form', 'submit_request_form_callback' );
add_action( 'wp_ajax_nopriv_submit_request_form', 'submit_request_form_callback' );