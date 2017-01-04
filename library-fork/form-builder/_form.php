<?php
function acf_build_form($form_settings) {
?>
    <form method="post" name="<?php echo $form_settings["form-name"]; ?>" id="<?php echo $form_settings["form-name"]; ?>" class="<?php echo $form_settings["form_class"]; ?>"  novalidate<?php echo $form_settings["enctype"]; ?>>
        <?php
        $tabIndex = front_end_form_input_loop($form_settings["form_data"], $tabIndex=1, $form_settings["form_pristine"], $form_settings["form_num_error_found"]);// ?>

        <!-- <div id="form-hide-until-focus"> -->
            <div class="row form-builder">
                <div class="form-label"></div>
                <div class="form-input">
                    <div class="checkbox">
                      <input type="checkbox" value="" tabindex=<?php echo $tabIndex; ?> name="mail-receipt" id="mail-receipt"><label for="mail-receipt">Acknowledge me with a mail receipt</label>
                    </div>
                </div>                  
            </div>       
           <!--  <div class="row" id="g-recaptcha-row">
                <div class="columns"><div class="g-recaptcha-wrapper"><div class="g-recaptcha" id="g-recaptcha"></div></div></div>
            </div>   -->
            <!-- <div class="g-recaptcha" data-sitekey="6LelawkUAAAAAHlXmEywVaGXQnhcskUkU3tUnzD7"></div>           -->
        <!-- </div> -->
        <?php $tabIndex++; ?>
        <div class="row form-builder">
            <div class="form-label"></div>
            <div class="form-input">
                <button type="submit" name="<?php echo $form_settings["submit-button-name"]; ?>" id="<?php echo $form_settings["submit-button-name"]; ?>" class="button large" tabindex=<?php echo $tabIndex; ?>><?php echo $form_settings["submit-button-text"]; ?></button>
            </div>
        </div>
    </form> 
<?php   
}


function acf_build_form_custom($form_settings) {
?>
    <form method="post" name="<?php echo $form_settings["form-name"]; ?>" id="<?php echo $form_settings["form-name"]; ?>" class="<?php echo $form_settings["form_class"]; ?>"  novalidate<?php echo $form_settings["enctype"]; ?>>
        
<div class="row" id="sign-up-form">
    <div class="small-12 medium-6 large-6 columns"><?php
        $tabIndex = front_end_form_input_loop($form_settings["form_data"], $tabIndex=1, $form_settings["form_pristine"], $form_settings["form_num_error_found"]);// ?></div>
    <div class="small-12 medium-6 large-6 columns">
        <?php $tabIndex++; ?>
        <div class="row form-builder">
            <div class="form-label"></div>
            <div class="form-input">
                <button type="submit" name="<?php echo $form_settings["submit-button-name"]; ?>" id="<?php echo $form_settings["submit-button-name"]; ?>" class="button large expanded" tabindex=<?php echo $tabIndex; ?>>Submit</button><!--  -->
            </div>
        </div>        
    </div>
</div>

    </form> 
<?php   
}
function acf_form_feedback($form_settings) {
    ?>
    <div class="row"><div class="columns">
    <?php 
    if ($form_settings["confirmation_output"]): 
    // <div class="row form-builder">
    //     <div class="form-label"></div>
    //     <div class="form-input"></div>                  
    // </div>
    ?>
    <!-- confirmation_output -->
    <div id="confirmation_output">
        <?php echo $form_settings["confirmation_output"]; ?>
    </div>
    <?php 
    endif; ?>

    <!-- Error panel -->
    <div id="form-error-msg" class="<?php echo $form_settings["error_class"]; ?>">
        <h4>Warning</h4>
        <p><?php echo $form_settings["response_msg"]; ?></p>
    </div>
    </div></div><!-- @end .row .columns -->
    <?php
}
