<article class="large-3 columns large-no-pad widget widget_meta contact-details-widget">
	<div class="row">
		<div class="small-12 medium-4 large-12 columns">
			<h6><i class="fa fa-user" aria-hidden="true"></i> Contact Details</h6>

			<?php if ( get_field('short_address', 'option') ) : ?>
				<p><i class="fa fa-map-signs footer" aria-hidden="true"></i><?php echo get_field('short_address', 'option'); ?></p>
			<?php endif; ?>

			<div class="contact-details">
				<?php if ( get_field('email', 'option') ) :
					$email= get_field('email', 'option'); ?>
					<a class="footer-contact email" href="mailto:<?php echo $email; ?>" title="Email <?php echo $contact_name_short; ?> now">
						<span class="link-title"><i class="fa fa-envelope footer" aria-hidden="true"></i> Email</span>
						<span class="link-details"><?php echo $email; ?></span>
					</a>
				<?php endif; ?>

				<?php if ( get_field('_office', 'option') ) :
					$office = get_field('office', 'option'); 
					$office_readable = get_field('office_readable', 'option'); ?>
					<a class="footer-contact" href="tel:<?php echo $office; ?>" title="Contact Our Office">
						<span class="link-title"><i class="fa fa-phone footer" aria-hidden="true"></i> Office</span>
						<span class="link-details"><?php echo $office_readable; ?></span>
					</a>
				<?php endif; ?>	

				<?php if ( get_field('mobile', 'option') ) :
					$mobile = get_field('mobile', 'option'); 
					$mobile_readable = get_field('mobile_readable', 'option'); ?>
					<a class="footer-contact" href="tel:<?php echo $mobile; ?>" title="Contact us via Mobile">
						<span class="link-title"><i class="fa fa-mobile footer" aria-hidden="true"></i> Mobile</span>
						<span class="link-details"><?php echo $mobile_readable; ?></span>
					</a>
				<?php endif; ?>
			</div>
		</div>
		<div class="small-12 medium-4 large-12 columns">
			<div class="social-media">
				<h6 class="secondary "><i class="fa fa-share-alt" aria-hidden="true"></i> Social Media</h6>
			    <?php 
			    if(is_array(get_field('link', 'option'))):
			        $media = get_field('link', 'option');
			        foreach ($media as $link): 
			        ?>
			            <a class="social-media-link" href="<?php echo $link['link']; ?>" title="<?php echo $link['title']; ?>" target="_blank"><i class="fa <?php echo $link['icon']; ?> social" aria-hidden="true"></i></a> 
					<?php 
			        endforeach;
			    endif;
			    ?>
			</div>
		</div>
		<div class="small-12 medium-4 large-12 columns">
			<div class="opening-hours">
				<h6 class="secondary "><i class="fa fa-clock-o" aria-hidden="true"></i> Opening Hours</h6>
				<span class="opening-hours">Mon - Fri: <b>08:00</b>-<b>17:30</b></span>
				<span class="opening-hours">Sat: <b>10:00</b>-<b>13:30</b></span>
				<span class="opening-hours">Sun: <b>Closed</b></span>
			</div>
		</div>		
	</div>
</article>
