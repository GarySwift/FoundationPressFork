<?php
    // If POST
    if(isset($_POST['submit-request-form'])){ //check if form was submitted
        $debug=false;
        $form_pristine=false;
        $attach_file=false;
        $attachments = array();
        $mail_receipt=false;//auto-reponse flag

            $path_array  = wp_upload_dir();
    $path = str_replace('\\', '/', $path_array['path']);//Uploads Folder
    $home_path = ABSPATH; //Root folder
    $home_path.='uploads';
    // $path=$home_path;
    
        if(isset($_POST['mail-receipt'])){
            $mail_receipt=true;//Send an auto-response to user
        }


// $template_open = '<div class="_email-template" style="background-color:#E3E3E3;border:1px solid #D2D2D2;margin:0;padding:0;width: 100%;padding-top: 40px;padding-bottom: 20px;">'
// .'<header style="background-color: #333333;margin: 0;padding: 20px;text-align: center;color: #F8F8F8;">'
// .'<h1 style="margin: 0;padding: 0;">'.get_bloginfo('name').'</h1>'
// .'</header>'
// .'<section style="margin: 0;padding: 20px;background-color: #FDFDFD;">';

// $template_close = '</section>'
// .'<footer style="margin: 0;padding: 0;text-align: center;background-color: #333333;color: #F8F8F8;">'
// .'<h5 style="margin: 0;padding: 0;">'.get_bloginfo('name').' - '.get_bloginfo('description').'</h5>'
// .'</footer>';
include('_email-template.php');
        // $debug_email='';
        // $response_subject='';
        // $response_message='';

        // if( get_field('debug_email') ) {
        //     $debug_email =  get_field('debug_email');
        // }

        // if( get_field('response_subject') ) {
        //     $response_subject = get_field('response_subject');
        // }
        // if( get_field('response_message') ) {
        //     $response_message = get_field('response_message');
        // }

// echo '<pre>var_dump($_POST)<br>';var_dump($_POST);echo '</pre>';
// echo '<pre>';var_dump($_FILES); echo '</pre>';

  
// $path_array  = wp_upload_dir();
// // echo '$path_array '.$path_array.'<br>';
// $path = str_replace('\\', '/', $path_array['path']);
// echo '$path '.$path.'<br>';

// $old_name = $_FILES["form-file-upload"]["name"];
// echo '$old_name '.$old_name.'<br>';
// $split_name = explode('.',$old_name);
// echo '$split_name '.$split_name.'<br>';
// $time = time();
// echo '$time '.$time.'<br>';
// $file_name = $time.".".$split_name[1];
// echo '$file_name '.$file_name.'<br>';
// echo '$path. "/" . $file_name = '. $path. "/" . $file_name.'<br>';
// move_uploaded_file($_FILES["form-file-upload"]["tmp_name"],$path. "/" . $old_name.$file_name);       
 

        //Loop through the POST and validate. Store the values in $form_data
        foreach ($_POST as $key => $value) {
            if (($key!='submit-request-form') && ($key!='mail-receipt') && ($key!='form-file-upload')) { //Skip the button and mail-receipt checkbox
                $form_data[$key] = check_input($form_data[$key], $value);//Validate input    
                // echo '<pre>';
                // var_dump($form_data[$key]);
                // echo '</pre>';
            }
        }

        // foreach ($form_data as $key => $value) {
        //     if($key==='form-file-upload') {
        //         echo'validate file upload<br>';
        //     }
        // }
// Loop through the $_FILES global variable and prepare attachments for email
        foreach ($form_data as $key => $value) {
            if($value['type']==='file') {
                if($_FILES[$key]) {
                    $old_name = $_FILES[$key]["name"];
                    $split_name = explode('.',$old_name);
                    $time = time();
                    $file_name = $time.".".$split_name[1];
                    if(move_uploaded_file($_FILES[$key]["tmp_name"],$path. "/" . $time.'_'.$old_name)) {
                        $form_data[$key]['passed'] = true;
                        $attach_file=true;
                        $attachments[]= $path. "/" . $time.'_'.$old_name;
                        $form_data[$key]['clean'] = $time.'_'.$old_name.' (See Attachments)';
                    }
                    else {
                        $form_data[$key]['passed'] = false;
                        $form_data[$key]['clean'] = $old_name;
                        $form_num_error_found++;
                        // echo 'error found 34<br>';
                    } 
                }
                else {
                    echo 'No files found when we should have<br>';
                    
                }
            }
        }


        // Loop through form1_data and increase form1_num_error_found count for each error
        foreach ($form_data as $key => $value) {
            if(!$form_data[$key]['passed']) {
                //An error has been found in this input so increase the count
                $form_num_error_found++;
                // echo $key.'<br>';

            }
        }

        if($form_num_error_found) {
            // Error has been found in user input
            $response_msg = "We're sorry, there has been an error with the form input.<br>Please rectify the ".$form_num_error_found." errors below and resubmit.";
            $form_class='';
        }
        else {  

            //If a debug email is set in ACF, send the email there instead of the admin email
            get_field('debug_email') ? $to = get_field('debug_email') : $to = get_option('admin_email');

            // Set reponse subject for email (ACF)
            get_field('response_subject') ? $response_subject = get_field('response_subject').$date : $response_subject = "New Enquiry - ".date("Y-m-d H:i:s"). ' GMT';

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
            foreach ($form_data as $key => $value) {
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

            // Send the email
            if($attach_file) {
                // $attach = $path_array . '/1457432336_test-doc.pdf';
                // echo $attach;
                // echo '<br>';
                // $attachments = array( $attach );
                // var_dump($attachments);
                $headers = 'From: Will Hayes <whayes@brightlight.com>' . "\r\n";
                 // echo '<br>';
                //$status = wp_mail($to, $response_subject.' - '.date("D j M Y, H:i"). ' GMT', $email_string);
                // $status = wp_mail($to, $response_subject.' - '.date("D j M Y, H:i"). ' GMT', $email_string, $headers, $attachments);
            }
            else {
                // echo $email_string;
                 $status = wp_mail($to, $response_subject.' - '.date("D j M Y, H:i"). ' GMT', $email_head.$email_string.$email_foot );
            }
            //$status = wp_mail($to, $response_subject.' - '.date("D j M Y, H:i"). ' GMT', $email_string);

            // Construct the reponse to show to the user
            $confirmation_output = '<div id="contact-thank-you">';                  
            $confirmation_output .= '<div class="callout primary" data-closable="slide-out-right">';
            $confirmation_output .= '<h3>'.$browser_output_headder.'</h3>';
            $confirmation_output .= $auto_response_message;
            $confirmation_output .= '<p>A copy of your enquiry is shown below.</p>';
            $confirmation_output .= $table;
            $confirmation_output .= '<button class="close-button" aria-label="Dismiss alert" type="button" data-close>';
            $confirmation_output .= '<span aria-hidden="true">&times;</span>';
            $confirmation_output .= '</button>';
            $confirmation_output .= '</div></div>';
            // echo $confirmation_output;
            
            //If the user has requested it, send an email acknowledgement
            if($mail_receipt) {
                $auto_response_subject='Auto-response (no-reply)';
                if( get_field('auto_response_subject') ) {
                    $auto_response_subject = get_field('auto_response_subject');
                }
                $user_response_msg = $auto_response_message;
                $user_response_msg .= '<p>A copy of your enquiry is shown below.</p>';
                $user_response_msg .= $table;
                $status = wp_mail($form_data['form-email']['clean'], $auto_response_subject, $email_head.$user_response_msg.$email_foot);
                // echo $user_response_msg;
            }  

        }
    }  
?>