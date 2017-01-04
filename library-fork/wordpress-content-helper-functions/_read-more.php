<?php 

function the_edit_link($type='Post') {
	global $post;
	edit_post_link('<div class="float-right">Edit '.$type.' <i class="fa fa-pencil-square-o"></i></div><div class="clearfix"></div>', '', '');	
}
function read_more() {
	?>
    <div class="float-right">
    	<a href="<?php the_permalink() ?>" title="Read More">Read More</a>
    </div>
    <div class="clearfix"></div>
    <?php
}

