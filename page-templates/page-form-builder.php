<?php
/*
Template Name: Form Builder
*/
get_header();
include('general-partials/_page-id.php');
include('forms/_form-head.php'); 
?>
<div id="<?php echo $page_id; ?>" role="main">
    <article class="main-content">
		<?php 
		if( function_exists( 'acf' ) ): 
			include('forms/_form.php');
		else:
		    include('general-partials/_acf-not-installed-warning.php');
		endif; // End function_exists( 'acf' ) ?>
    </article>
    <?php include('general-partials/_sidebar-acf-check.php'); ?>
</div>
<?php 
get_footer();
