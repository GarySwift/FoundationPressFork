<?php
$link_row=false;
if( get_sub_field('span_inside_headers') ) {
    $span_inside_headers = get_sub_field('span_inside_headers');
    echo $span_inside_headers;
}
include('_link.php');
if ( get_sub_field('header') ) : ?>			
	<?php if ( get_sub_field('html') ) : ?>
		<?php echo get_sub_field('header'); ?>
	<?php else: ?>
			<?php if($link_row): ?>
				<h3>
					<a href="<?php echo $link; ?>" title="<?php echo $title; ?>" <?php echo $target; ?>><?php echo get_sub_field('header'); ?></a>
				</h3>
			<?php else: ?>
				<h3><?php echo ($span_inside_headers ? '<span>' : '').get_sub_field('header').($span_inside_headers ? '</span>' : ''); ?></h3>
			<?php endif; ?>
	<?php endif; ?>
<?php 
endif;


// echo ($span_inside_headers ? '<span>' : '');