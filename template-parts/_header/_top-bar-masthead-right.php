<header id="masthead" class="site-header" role="banner">
	<div class="title-bar" data-responsive-toggle="site-navigation">
		<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
		<div class="title-bar-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</div>
	</div>

	<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
		<div class="top-bar-left">
			<ul class="menu">
				<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
			</ul>
		</div>
		<div class="top-bar-right">
			<?php foundationpress_top_bar_r(); ?>

			<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
				<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
			<?php endif; ?>
		</div>
	</nav>
</header>