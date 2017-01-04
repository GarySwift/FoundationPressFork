<?php
/*
 * Bread crumbs for parent/child custom post types
 *
 * Outputs breadcrumbs in zurb foundation style
 */
function the_breadcrumbs($parent_page_id=0, $parent_id=0, $post_id) {
?>
<nav aria-label="You are here:" role="navigation">
<ul class="breadcrumbs">
	<li>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="breadcrumb-title">Home</span></a>
	</li>
<?php

	if($parent_page_id>0):
		?>
		<li>
			<a href="<?php echo get_page_link(); ?>">
				<span class="breadcrumb-title"><?php echo get_the_title($parent_page_id); ?></span>
			</a>
		</li>
	<?php
	endif;
	
	if($parent_id>0):


		$parent = get_post($parent_id);
		if($parent->post_parent>0):
			$grand_parent = get_post($parent->post_parent);
			?>
			<li>
				<a href="<?php echo get_page_link($grand_parent->ID); ?>">
					<span class="breadcrumb-title"><?php echo $grand_parent->post_title; ?></span>
				</a>
			</li>
			<?php
		endif;



		?>
		<li>
			<a href="<?php echo get_page_link($parent_id); ?>">
				<span class="breadcrumb-title"><?php echo get_the_title($parent_id); ?></span>
			</a>
		</li>
		<?php
	endif;
	?>	
	<li>
		<span class="breadcrumb-title "><?php echo  get_the_title($post_id); ?></span>
	</li>
</ul>
</nav>
<?php
// $children = get_pages('child_of='.$post_id);
// if( count( $children ) != 0 ) { 
// 	echo 'show list as normal ';
// }
// else { 
// 	echo 'show "no offers" text ';
// }
?>
<?php
}