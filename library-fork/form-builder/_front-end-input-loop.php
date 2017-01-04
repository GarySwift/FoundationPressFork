<?php   
function front_end_form_input_loop($form_data, $tabIndex=1, $form_pristine=true, $form_num_error_found=0) {
    $i=0;
    foreach ($form_data as $id => $settings):
        $tabIndex++;
        /*if($i!=$settings['section']): ?>
            <div class="row">
                <div class="small-12 large-4 columns"></div>
                <div class="small-12 large-8 columns">
                    <h4><?php echo $form_headers[$i]; ?></h4>
                </div>
            </div>
            <?php
            $i=$settings['section'];
        endif;*/

        switch ($settings['type']) {
            case "text":
            case "url":
            case "email":
            case "number":
                bldFormInput($id, $settings, $form_pristine, $form_num_error_found, $tabIndex);
                break;
            case "textarea":
                bldFormTextarea($id, $settings, $form_pristine, $form_num_error_found, $tabIndex);
                break; 
            case "select":
                bldFormSelect($id, $settings, $form_pristine, $form_num_error_found, $tabIndex, '');
                break;
            case "select2":
                bldFormSelect2($id, $settings, $form_pristine, $form_num_error_found, $tabIndex);
            case "multi_select":
                bldFormSelect2($id, $settings, $form_pristine, $form_num_error_found, $tabIndex);
                // bldFormSelect($id, $settings, $form_pristine, $form_num_error_found, $tabIndex, 'multiple');   
                break; 
            case "file":
                bldFormFileUpload($id, $settings, $form_pristine, $form_num_error_found, $tabIndex);
                break;                                             
        }           
    endforeach;
    return $tabIndex;    
}