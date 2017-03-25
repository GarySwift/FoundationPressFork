<?php
/*
Template Name: Form Builder
*/
get_header();
include('general-partials/_page-id.php');
// include('forms/_form-head.php'); 

// global $form_settings;
if (function_exists('get_form_data')) {
	$form_settings = get_form_data("form_inputs", false); //"option"
}


// If POST
if(isset($_POST['submit-request-form'])){ //check if form was submitted
	echo "<pre>"; var_dump($_POST); echo "</pre>";
    $form_settings = process_form($form_settings, $_POST);
}		
// acf_form_feedback($form_settings);
// # prints e.g. 'Current PHP version: 4.1.1'
// echo "<pre>"; echo 'Current PHP version: ' . phpversion(); echo "</pre>";
// # prints e.g. '2.0' or nothing if the extension isn't enabled
// echo "<pre>"; echo phpversion('tidy'); echo "</pre>";
// echo "<pre>SERVER[\"REMOTE_ADDR\"] "; echo $_SERVER["REMOTE_ADDR"]; echo "</pre>";
?>
<div id="<?php echo $page_id; ?>" role="main">
    <article class="main-content">

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur excepturi, reiciendis, odio atque ad modi quisquam animi fuga blanditiis incidunt eligendi assumenda harum dolore ab quo consequuntur doloribus esse quasi.</p>
		<?php 
		if( function_exists('acf')) {
			if (function_exists('acf_build_form')) {
				acf_build_form($form_settings); 
			}
		}
		else {
			include('general-partials/_acf-not-installed-warning.php');
		}//@end function_exists( 'acf' ) 
		?>
    </article>
    <?php include('general-partials/_sidebar-acf-check.php'); ?>
</div>
<?php 
get_footer();
