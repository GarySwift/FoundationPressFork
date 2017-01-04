<header id="top-bar-upper" class="show-for-large">
	<div class="row">
		<!-- <h2 class="site-name">
			<a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php //bloginfo('name') ?>
			</a>
		</h2> -->
		<!-- <h4 class="description"><?php //bloginfo('description'); ?> </h4>	 -->
		<div class="small-9 medium-9 large-9 columns banner"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/theme/header-banner-outline-800.png.svg" alt="Header Banner Image" id="header-banner-upper" class="header-banner"></div>
		<div class="small-3 medium-3 large-3 columns buttons text-center">
			<div >
				<h4><i class="fa fa-medkit" aria-hidden="true"></i><br>Contact Brian Kelly</h4>

				<?php if ( get_field('mobile', 'option') ) :
					$mobile = get_field('mobile', 'option'); 
					$mobile_readable = get_field('mobile_readable', 'option'); ?>
					<a href="tel:<?php echo $mobile; ?>" title="Contact us via Mobile" class="button expanded"><?php echo $mobile_readable; ?></a>
				<?php else: ?>
					<a href="#" class="button expanded">Phone</a>
				<?php endif; ?>		

				<?php if ( get_field('_office', 'option') ) :
					$office = get_field('office', 'option'); 
					$office_readable = get_field('office_readable', 'option'); ?>
					<a href="tel:<?php echo $office; ?>" title="Contact us via Mobile" class="button expanded"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $office_readable; ?></a>
				<?php endif; ?>	

				<?php if ( get_field('email', 'option') ) :
					$email = get_field('email', 'option'); ?>
					<a class="button expanded email" href="mailto:<?php echo $email; ?>" title="Email <?php echo $contact_name_short; ?> now"><?php echo $email; ?></a>
				<?php else: ?>
					<a href="#" class="button expanded">Email</a>
				<?php endif; ?>		
			</div>
		</div>	
	</div>
</header>