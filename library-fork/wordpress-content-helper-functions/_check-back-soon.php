<?php
function check_back_soon() {
?>
	<div class="callout primary">
		<div class="text-center pad-20">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/error-img-coming-soon.png" alt="Coming Soon">	
		</div>
		<h3>Ah, shucks. We haven't added content here yet.</h3>
		<p class="lead">Please check back soon and we will have remedied this situation</p>
		<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'foundationpress' ); ?></p>
	<?php get_search_form(); ?>
	</div>	
<?php
}