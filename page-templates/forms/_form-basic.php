<?php if (!empty($form_data)): ?>
<!-- 
<section class="full-width-gray"> -->
    <h3 class="block">Get in Touch Today</h3>
    
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

    <!-- <div class="row"> -->
        <div class="row">
            <p>Please feel free to contact us with any queries you may have and we will be happy to help you in any way that we can.</p>
            <div class="row">
                <div class="small-12 medium-6 large-6 columns">
                    <h6>Location</h6>
                    <?php if ( get_field('address_line_1', 'option') ) : ?>
                        <span class="form-address-line"><?php echo get_field('address_line_1', 'option'); ?></span>
                    <?php endif; ?>
      
                    <?php if ( get_field('address_line_2', 'option') ) : ?>
                        <span class="form-address-line"><?php echo get_field('address_line_2', 'option'); ?></span>
                    <?php endif; ?>

                    <?php if ( get_field('address_line_3', 'option') ) : ?>
                        <span class="form-address-line"><?php echo get_field('address_line_3', 'option'); ?></span>
                    <?php endif; ?>

                </div>
                <div class="small-12 medium-6 large-6 columns">
                    <h6>Contact</h6>
                           <?php if ( get_field('email', 'option') ) :
                $email= get_field('email', 'option'); ?>
                <h5>
                    <a class="form-contact" href="mailto:<?php echo $email; ?>" title="Email <?php echo $contact_name_short; ?> now">
                    <span class="link-title"> Email: </span>
                    <span class="link-details"><?php echo $email; ?><span>
                </a>
                </h5>
            <?php endif; ?>


            <?php if ( get_field('office', 'option') ) :
                $office = get_field('office', 'option'); 
                $office_readable = get_field('office_readable', 'option'); ?>
               <h5>
                    <a class="form-contact" href="tel:<?php echo $office; ?>" title="Contact Our Office">
                    <span class="link-details">Tel: <?php echo $office_readable; ?><span>
                </a>
               </h5>
            <?php endif; ?> 

                </div>
            </div>
        </div>
        <div class="row">
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
        </div>
    <!-- </div> -->

<!-- </section>  -->
<?php //else: ?>
<!-- <div class="row">
          <div class="callout large alert">
        <h5>Please Add Form Inputs</h5>
        <p>Form inputs are managed in the WordPress backend.</p>
      </div>
</div> -->
<?php endif; //@end if $form_data ?>