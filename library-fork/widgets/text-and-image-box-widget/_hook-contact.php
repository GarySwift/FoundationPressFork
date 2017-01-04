<h5 class="header">Contact Us Now</h5>
<div class="row">
	<div class="small-6 medium-6 large-6 columns text-center">
		<!-- <h6 class="sub">Call</h6> -->
		<i class="fa fa-phone" aria-hidden="true"></i>
		<div class="hr"></div>

            <?php if ( get_field('office', 'option') ) :
                $office = get_field('office', 'option'); 
                $office_readable = get_field('office_readable', 'option'); ?>
               
                    <a class="form-contact" href="tel:<?php echo $office; ?>" title="Contact Our Office">
                    <span class="link-details"><?php echo $office_readable; ?><span>
                </a>
               
            <?php endif; ?> 
	</div>
	<div class="small-6 medium-6 large-6 columns text-center">
		<!-- <h6 class="sub">Email</h6> -->
		<i class="fa fa-envelope" aria-hidden="true"></i>
		<div class="hr"></div>
	    <?php if ( get_field('email', 'option') ) :
            $email= get_field('email', 'option'); ?>
            
                <a class="form-contact" href="mailto:<?php echo $email; ?>" title="Email <?php echo $contact_name_short; ?> now">
                <!-- <span class="link-title"> Email: </span> -->
                <span class="link-details"><?php echo $email; ?><span>
            </a>
            
        <?php endif; ?>		
	</div>
</div>