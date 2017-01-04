<div id="footer-container">
	<footer id="footer">
	<!-- 	<div class="row text-center" id="footer-logo-brand">
			<a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/images/theme/logo.png" id="footer-logo" class="" alt="Footer Logo">
			</a>
		</div>	 -->
		<?php do_action( 'foundationpress_before_footer' ); ?>
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		<?php do_action( 'foundationpress_after_footer' ); ?>
		<div class="row">
			<div class="small-12 medium-12 large-1 columns"><p></p></div>
			<div class="small-12 medium-12 large-6 columns">
				
					<?php 
						global $form_settings;
						acf_build_form_custom($form_settings); 
					?>
					<?php include('_contact-table.php'); ?>
			</div>
			<div class="small-12 medium-12 large-4 columns">
				<div class="row">
					<div class="small-6 medium-6 large-6 columns contact">
						<?php include('_social-media.php') ?>
					</div>
					<div class="small-6 medium-6 large-6 columns contact">
						<?php include('_contact.php') ?>				
					</div>
				</div>
			</div>

			<div class="small-12 medium-12 large-1 columns">
			</div>
		</div>	
		<div class="clearfix"></div>	
		<div class="row" id="copyright">
			<p><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</small></p>
		</div>
	</footer>
</div>



