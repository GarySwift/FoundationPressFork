<?php 
function get_form_data($form_inputs="form_inputs", $option=false) {
    $form_settings=false;
    // Construct the array that makes the form
    if ( have_rows($form_inputs, $option) ) :

        $form_settings = array();
        $form_settings["form_pristine"] = true;
        $form_settings["form_num_error_found"] = 0;
        $form_settings["enctype"] = "";
        $form_settings["form_class"] = "";
        $form_settings["option"]=$option;
        $form_settings["form-name"] = "request-form";
        $form_settings["submit-button-name"] = "submit-request-form";
        $form_settings["submit-button-text"] = "Submit Form";
        $form_settings["error_class"] = "";
        $form_settings["ajax"] = false;
        $form_data = array();

        while( have_rows($form_inputs, $option) ) : the_row(); // Loop through the repeater for form inputs

            $name =  get_sub_field('name');
            $id = sanitize_title_with_dashes( get_sub_field('name') );
            $type = get_sub_field('type');
            $label = get_sub_field('label');
            $help = get_sub_field('help');
            $placeholder = get_sub_field('placeholder');
            $required = get_sub_field('required');
            $select_options='';

            // If the user has manually added options with the repeater
            if( get_sub_field('select_options') ) {
                $select_options = get_sub_field('select_options');

                if(get_sub_field('select_type') === 'user') {                    
                    for ($i = 0; $i < count($select_options); ++$i) {
                        if($select_options[$i]['option_value']=='') {
                            $select_options[$i]['option_value'] = sanitize_title_with_dashes( $select_options[$i]['option'] );
                        }
                    }   
                }
            }

            // If the user has elected to select predefined options - only countries available at the moment
            if(get_sub_field('select_type') === 'select') {
                $countries = getCountries(); // Returns an array of countries
                $i=0;
                // Push each entry into $select_options in a usable way
                foreach ($countries as $key => $value) {
                    ++$i;
                    $select_options[$i]['option_value']  = sanitize_title_with_dashes($key);
                    $select_options[$i]['option'] = $value;//$key;
                }                     
            }

            if($required) {
                $required = 'required';
            }
            else {
                $required = '';
            }
            if(!$label) {
                $label = $name;
            }

            switch ($type) {
                case "text":
                case "url":
                case "email":
                case "number":
                    $form_data['form-'.$id] = array("passed"=>false, "clean"=>"", "value"=>"", "section"=>1, "required"=>$required, "type"=>$type,  "placeholder"=>$placeholder, "label"=>$label, "help"=>$help);
                    break;
                case "textarea":
                    $form_data['form-'.$id] = array("passed"=>false, "clean"=>"", "value"=>"", "section"=>1, "required"=>$required, "type"=>$type,  "placeholder"=>$placeholder, "label"=>$label, "help"=>$help);
                    break; 
                case "select":
                    $form_data['form-'.$id] = array("passed"=>false, "clean"=>"", "value"=>"", "section"=>1, "required"=>$required, "type"=>$type,  "placeholder"=>$placeholder, "label"=>$label, "options"=>$select_options, "selected_option"=>"", "help"=>$help);
                    break;
                case "multi_select":
                    $form_data['form-'.$id] = array("passed"=>false, "clean"=>"", "value"=>"", "section"=>1, "required"=>$required, "type"=>$type,  "placeholder"=>$placeholder, "label"=>$label, "options"=>$select_options, "selected_option"=>"", "help"=>$help);
                    break;    
               case "file":
                    $form_settings["enctype"] = ' enctype="multipart/form-data"';
                    $form_settings["form_class"] = 'js-check-form-file';
                    $form_data['form-'.$id] = array("passed"=>false, "clean"=>"", "value"=>"", "section"=>1, "required"=>$required, "type"=>$type,  "placeholder"=>$placeholder, "label"=>$label, "accept"=>"pdf", "help"=>$help);
                    break;            
            }           
                
        endwhile;// End the AFC loop  
        $form_settings["form_data"] = $form_data;
    endif; 
    return $form_settings;    
}
