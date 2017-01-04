<?php while ( have_posts() ) : the_post(); ?>
<section id="intro">
    <div class="row">
        <div class="small-12 medium-12 large-12 columns">
			<h1 class="text-center sectionbreak header paired" id="page-title"><?php bloginfo('name') ?></h1>
			<h2 class="sectionbreak subheader paired" id="page-description"><?php bloginfo('description'); ?></h2>
            <div class="content text-center large-text-left">
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
            </div>
        </div>
    </div>
	<div class="row about-us">
	    <div class="small-12 medium-8 large-8 columns left-side text-center large-text-left">
			<?php if ( get_field('home_page_content') ) : ?>
				<div class="entry-content">
					<?php echo get_field('home_page_content'); ?>
				</div>      	
			<?php endif; ?>                                      
	    </div>
	    <div class="small-12 medium-4 large-4 columns right-side columns-panel" id="driver-widget-column">
			<?php include('__driver-widget.php'); ?>
	    </div> 
	</div>                          
</section> 
<?php endwhile;?>	