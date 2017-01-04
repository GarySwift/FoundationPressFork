<header id="masthead" class="site-header" role="banner">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/theme/logos/window-surgeon-logo.svg" alt="Logo" id="top-bar-logo" class="hidden">
	<div class="title-bar" data-responsive-toggle="site-navigation">
		<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
		<div class="title-bar-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/theme/logos/window-surgeon-logo-inverted.svg" alt="Logo" id="title-bar-logo" class="">
	</div>
	<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
		<div class="top-bar-center">
			<?php foundationpress_top_bar_center(); ?>
			<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
				<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
			<?php endif; ?>
		</div>
	</nav>
</header>