<div class="row" id="row-hook-securing-your-energy-needs">
	<div class="header"><?php include('_header.php') ?></div>
	
	<div class="icons-and-call">
				<?php if ( get_field('office', 'option') ) :
				$office = get_field('office', 'option'); 
				$office_readable = get_field('office_readable', 'option'); ?>
				<div class="hook-icons">
					<span class="hook-icon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/solar-white.svg" alt="Solar Icon">						
					</span>
					<span class="hook-icon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/wind-white.svg" alt="Wind Icon">
						
					</span>
					<span class="hook-icon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/storage-white.svg" alt="Storage Icon">
						
					</span>
				</div>
				<div class="icon-titles">
					<span class="icon-title">Solar</span>
					<span class="icon-title">Wind</span>
					<span class="icon-title">Storage</span>
				</div>
				<h3>
					<a id="hook-call-on" href="tel:<?php echo $office; ?>" title="Contact Our Office">Call On <span class="link-details"><?php echo $office_readable; ?><span>
					</a>
				</h3>
			<?php endif; ?>		
	</div>
	<div class="subheader"><?php include('_subheader.php') ?></div>
</div>