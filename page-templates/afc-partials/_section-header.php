<?php
    // text_&_image 
    $header = get_sub_field('header');
    $type=get_sub_field('type');
    if ($type=='page') {
    	$h = 'h1';
    }
    elseif ($type=='section') {
    	$h = 'h2';
    }
    else {
    	$h = 'h3';
    }
 ?>
<div class="section-title">
    <div class="title"><<?php echo $h; ?>><?php echo $header; ?></<?php echo $h; ?>><div class="arrow-left"></div></div>
</div> 
