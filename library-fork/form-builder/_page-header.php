<?php
global $form_settings;
$form_settings = get_form_data("form_inputs", "option"); 
// If POST
if(isset($_POST['submit-request-form'])){ //check if form was submitted
	// echo "<pre>"; var_dump($_POST); echo "</pre>";
    $form_settings = process_form($form_settings, $_POST);
}		
acf_form_feedback($form_settings);
// # prints e.g. 'Current PHP version: 4.1.1'
// echo 'Current PHP version: ' . phpversion();

// # prints e.g. '2.0' or nothing if the extension isn't enabled
// echo phpversion('tidy');