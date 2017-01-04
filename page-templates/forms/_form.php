<?php 
if (!empty($form_data)): ?>
    
    <div class="row">
        <div class="small-12 large-3 columns">
            <!-- placeholder -->
        </div>
        <div class="small-12 large-9 columns">
            <?php 
                $error_msg='';
                $error_class='';
                if( $form_num_error_found>0):
                    $error_msg = $response_msg; 
                    $error_class = 'error';
                    ?>
                    <hr>
                <?php
                endif;
            ?>

            <div id="form-error-msg" class="<?php echo $error_class; ?>">
                <h4>Warning</h4>
                <p><?php echo $error_msg; ?></p>
            </div>
        </div>
    </div>

    <?php include('_confirmation-output.php'); ?>
        
    <?php include('_form-header.php'); ?>
    <form action="" method="post" id="request-form" class="<?php echo $form_class; ?>" name="request-form" novalidate <?php echo $enctype; ?>>
        <?php include('_front-end-input-loop.php'); ?>

        <div class="row">
            <div class="small-12 large-3 columns"></div>
            <div class="small-12 large-9 columns">
                <div class="checkbox">
                  <input type="checkbox" value="" tabindex=<?php echo $tabIndex; ?> name="mail-receipt"><label for="mail-receipt">Acknowledge me with a mail receipt</label>
                </div>
            </div>                  
        </div>
        <?php $tabIndex++; ?>
        <div class="row">
            <div class="small-12 large-3 columns"></div>
            <div class="small-12 large-9 columns">
                <button type="submit" name="submit-request-form" class="button large" tabindex=<?php echo $tabIndex; ?>>Submit  Form</button>
            </div>
        </div>
    </form> 
    
<?php 
endif; //@end if $form_data