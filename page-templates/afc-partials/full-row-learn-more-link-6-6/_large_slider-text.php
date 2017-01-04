<div class="">
	<h3 class="subheader"><?php echo $slide['header']; ?></h3>
	<h5 class="subheader"><?php echo $slide['subheader']; ?></h5>
	<div class="content"><?php echo $slide['content']; ?></div>
	<?php // truncate($slide['content'], 500); ?>
	<?php $link =$slide['link']; ?>
	<a role="button" href="<?php echo get_site_url(); echo'/'; echo $link; ?>/" class="button">Learn More</a>
</div>