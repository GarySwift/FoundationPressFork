<?php
/*
 * Template Name: Sitemap (Visual)
 */
get_header(); 
?>
<div id="page" role="main">
    <article class="main-content">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_edit_link('Page'); ?>
            <h1><?php the_title(); ?></h1>
            <div class="entry-content"><?php the_content(); ?></div>
        <?php endwhile;?>
        <?php
	        if ( function_exists( 'foundationpress_sitemap_menu' ) ) {
	        	foundationpress_sitemap_menu(); 
	        } else {
	        ?>
				<div class="callout warning">
				  <h5>Sitemap Function Not Found</h5>
				  <p>Please make sure the the <code>library-fork/_navigation.php</code> is included in the theme additional includes.</p>
				  <p>Style for this page can be found in <code>pages/_sitemap-menun.scss</code>.</p>
				</div>
	        <?php
	        }
        ?>
<!--         <div class="_email-template" style="background-color:#E3E3E3;border:1px solid #D2D2D2;margin:0;padding:0;width: 100%;padding-top: 40px;padding-bottom: 20px;">
        	<header style="background-color: #333333;margin: 0;padding: 20px;text-align: center;color: #F8F8F8;">
        	<h1 style="margin: 0;padding: 0;"><?php bloginfo('name') ?></h1>
        	</header>
        	<section style="margin: 0;padding: 20px;background-color: #FDFDFD;">
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam tempora laborum sit, accusamus qui repellat nostrum vel molestias error expedita harum deleniti blanditiis assumenda quasi nam. Sapiente neque, dolore unde.</p>
        		<p>Doloribus officiis minus, facilis obcaecati, odit vitae fugit fuga alias. Animi nihil qui consequuntur quibusdam facilis nemo eveniet quas, architecto nostrum explicabo vero minus rerum quae suscipit, similique et odio!</p>
        		<p>Quidem vel, consectetur rem quasi, eaque itaque maxime recusandae a facere tempora nobis, nam minima quibusdam suscipit similique voluptatibus error possimus. Odit quos sint ratione, nobis eum modi magni a!</p>
        		<p>Voluptatum aliquam, eveniet odio error temporibus dolorem iure tempore veniam iste aut quas ipsum itaque doloremque esse minus rerum vitae qui voluptatibus enim accusamus libero, architecto id quidem? Maiores, esse.</p>
        		<p>Quo voluptatum aperiam vero qui doloribus possimus explicabo, distinctio inventore commodi. Accusamus ullam sint adipisci ex minima. Autem voluptatem doloremque, voluptate aperiam quos quisquam error porro blanditiis cumque, labore tenetur.</p>
        	</section>
        	<footer style="margin: 0;padding: 0;text-align: center;background-color: #333333;color: #F8F8F8;">
        	<h5 style="margin: 0;padding: 0;"><?php bloginfo('name') ?> - <?php bloginfo('description') ?></h5>
        	</footer>
        </div> -->
    </article>
    <?php get_sidebar(); ?>
</div>
<?php 
get_footer();