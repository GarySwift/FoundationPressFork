<?php
/*
 * File exists sample code
 */

# Example 1
$filename = 'afc-partials/block-builder-partials/'.get_sub_field('section_hook');
if (file_exists(dirname(__FILE__).'/'.$filename)) {
    include $filename;
}
else {
    include 'afc-partials/block-builder-partials/_error-msg-no-section-hook-found.php';

}

# Example 1
$image= "test-image";
$path = realpath(__DIR__ . '/..');
$uri = get_stylesheet_directory_uri();
$filename = '/assets/images/'.$image.'.png';

if (file_exists($path.$filename)): ?>
	<div class="row">
		<img src="<?php echo $uri.$filename; ?>" alt="<?php echo $image ?>">
	</div>	
<?php 
endif;