<?php

function process_form($form_settings, $post) {
    $send_email=false;//Debug variable
    $form_settings["form_pristine"]=false;
    
    # Google recaptcha library
    // require_once "recaptchalib.php";
    // # your secret key
    // $secret = "6LcnawkUAAAAALJRqPuRKjMLBDfBcJDJQB0JD31j";
    // # empty response
    // $response = null;
    // # check secret key
    // $reCaptcha = new ReCaptcha($secret);

    // if submitted check response
    // if ($post["g-recaptcha-response"]) {
    //     $response = $reCaptcha->verifyResponse(
    //         $_SERVER["REMOTE_ADDR"],
    //         $post["g-recaptcha-response"]
    //     );
    // }

    // if ($response != null && $response->success) {
        $mail_receipt=false;//auto-reponse flag
        if(isset($post['mail-receipt'])){
            $mail_receipt=true;//Send an auto-response to user
        }
        // include('_email-template.php');
   
        //Loop through the POST and validate. Store the values in $form_data
        foreach ($post as $key => $value) {
            if (($key!='submit-request-form') && ($key!='mail-receipt') && ($key!='form-file-upload') && ($key!='g-recaptcha-response')) { //Skip the button and mail-receipt checkbox
                $form_settings["form_data"][$key] = check_input($form_settings["form_data"][$key], $value);//Validate input    
                // echo '<pre>';var_dump($form_settings["form_data"][$key]); echo '</pre>';
            }
        }

        // Loop through form1_data and increase form1_num_error_found count for each error
        foreach ($form_settings["form_data"] as $key => $value) {
            if(!$form_settings["form_data"][$key]['passed']) {
                //An error has been found in this input so increase the count
                $form_settings["form_num_error_found"]++;
            }
        }

        if($form_settings["form_num_error_found"]) {
            // Error has been found in user input
            $form_settings["response_msg"] = "We're sorry, there has been an error with the form input.<br>Please rectify the ".$form_num_error_found." errors below and resubmit.";
            $form_settings["error_class"] = 'error';
            // echo "<pre>"; var_dump($form_settings); echo "</pre>";
        }
        else {  

            //If a debug email is set in ACF, send the email there instead of the admin email
            get_field('debug_email', $form_settings["option"]) ? $to = get_field('debug_email', $form_settings["option"]) : $to = get_option('admin_email');

            // Set reponse subject for email (ACF)
            get_field('response_subject', $form_settings["option"]) ? $response_subject = get_field('response_subject', $form_settings["option"]).$date : $response_subject = "New Enquiry - ".date("Y-m-d H:i:s"). ' GMT';

            // Set reponse message
            // echo "<pre>".$to."</pre>";
            // echo "<pre>".$response_subject."</pre>";
 // Set reponse message
            get_field('response_message') ? $response_message = get_field('response_message').$date : $response_message = '<p>A website user has made the following enquiry.</p>';

            // Set auto_response_message
            get_field('auto_response_message') ? $auto_response_message = get_field('auto_response_message') : $auto_response_message = 'Thank you very much for your enquiry. A representative will be contacting you shortly.';

            // Set auto_response_message
            get_field('browser_output_headder') ? $browser_output_headder = get_field('browser_output_headder') : $browser_output_headder = 'Hold Tight, We\'ll Get Back To You';


            // Start making the string that will be sent in the email
            $email_string =$response_message;
            //Create string that will hold table of users input
            $table= '<table style="width:100%">';
            $j=0;
            foreach ($form_settings["form_data"] as $key => $value) {
                $required = $value['required'];
                $type = $value['type'];
                $table.= '<tr>';
                $table.= '<th style="width:30%">'.ucwords(str_replace('-', ' ',substr($key, 5))).':</th>';

                if($value['type']=='select') {
                    $table.= '<td>'.ucwords(str_replace('-', ' ',$value['clean'])).'</td>';
                }
                else {
                    $table.= '<td>'.$value['clean'].'</td>';
                }                    
                
                $table.= '</tr>';
                $j++;
            }
            $table.= '</table>';

            // Add the table of values to the string
            $email_string .= $table;

            if( get_field('email', 'option') ) {
                $from_email = get_field('email', 'option');
            }
            else {
                $from_email = get_bloginfo('admin_email');
            }
            $from_email = get_bloginfo('admin_email');
            // $headers = array('From: '.html_entity_decode(get_bloginfo('name')).' <'.$from_email.'>');

            if ($send_email) {
                $status = wp_mail($to, $response_subject.' - '.date("D j M Y, H:i"). ' GMT',  wrap_email($email_string));
            }

            // Construct the reponse to show to the user
            $confirmation_output_wrapper_open = '<div id="contact-thank-you">';                  
            $confirmation_output_wrapper_open .= '<div class="callout primary" data-closable="slide-out-right">';
            $confirmation_output = '<h3>'.$browser_output_headder.'</h3>';
            $confirmation_output .= $auto_response_message;
            $confirmation_output .= '<p>A copy of your enquiry is shown below.</p>';
            $confirmation_output .= $table;
            $confirmation_outputwrapper_close = '<button class="close-button" aria-label="Dismiss alert" type="button" data-close>';
            $confirmation_outputwrapper_close .= '<span aria-hidden="true">&times;</span>';
            $confirmation_outputwrapper_close .= '</button>';
            $confirmation_output_wrapper_close .= '</div></div>';
            if (!$form_settings["ajax"]) {
                $confirmation_output = $confirmation_output_wrapper_open.$confirmation_output. $confirmation_outputwrapper_close ;
            }
            $form_settings["confirmation_output"] = $confirmation_output;

            //If the user has requested it, send an email acknowledgement
            if($mail_receipt) {
                $auto_response_subject='Auto-response (no-reply)';
                if( get_field('auto_response_subject') ) {
                    $auto_response_subject = get_field('auto_response_subject');
                }
                $user_response_msg = $auto_response_message;
                $user_response_msg .= '<p>A copy of your enquiry is shown below.</p>';
                $user_response_msg .= $table;
                if ($send_email) {
                    $status = wp_mail($form_settings["form_data"]['form-email']['clean'], $auto_response_subject, wrap_email($user_response_msg));
                }
                
            }              

        }     
    // } else {
    //     $form_settings["response_msg"] = "We're sorry, please use the recaptcha.<br>".json_encode($response);
    //     $form_settings["error_class"] = 'error';
    // }

	return $form_settings;
}