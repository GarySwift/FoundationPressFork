<section id="hook-turbines">
	<div class="row">
		<div class="columns">
			<?php if ( get_sub_field('image') ) : ?>
				<?php $image = get_sub_field('image'); ?>
				<?php if($link_block): ?>
					<a href="<?php echo $link; ?>" title="<?php echo $title; ?>" <?php echo $target; ?>><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>"/></a>
				<?php else: ?>
					<a href="<?php echo $image['url']; ?>" class="lightbox" ><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']; ?>"/></a>
				<?php endif; ?>	  	
			<?php endif; ?>		
		</div>
	</div>

	<div class="row content">
		<div class="columns" >
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/brands/logo-lely.png" alt="" class="right logo-right">
			<?php if ( get_sub_field('header') ) : ?>
				<?php if($link_block): ?>
					<h4>

						<a href="<?php echo $link; ?>" title="<?php echo $title; ?>" <?php echo $target; ?>><?php echo get_sub_field('header'); ?></a>
					</h4>
				<?php else: ?>
					<h4><?php echo get_sub_field('header'); ?></h4>
				<?php endif; ?>
			<?php endif;?>

			<?php if ( get_sub_field('content') ) : ?>
				<div class="content">
					<?php echo get_sub_field('content'); ?>
				</div>
			<?php endif; ?>


		</div>
	</div>

</section>