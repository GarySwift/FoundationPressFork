<?php
/*
 * Create a table row for ACF field using key/value pair layout
 */
function table_row($field, $label='') {
	global $odd_even_count;
	global $post;

	if(!$label) {
		$label = ucfirst($field);
	}
	if ( get_field( $field ) ) : 
		$odd_even_count++ % 2 == 0 ? $odd_even = 'even' : $odd_even = 'odd'; ?>
		<tr class="<?php echo $odd_even ?>">
			<td class="column-1"><b><?php echo $label; ?></b></td>
			<td class="column-2"><?php echo get_field( $field ); ?></td>
		</tr>
	<?php 
	// else: 
	// 	return false;
	endif;
}

function the_table() {
	global $post;
	$odd_even = '';
	$odd_even_count=0;
	$show_table= false; // $show_table is turned off by default
	$table_fields = array(
		array("client",'Client/Company'),
		array('year'),
		array('location'),
		array('size'),
		array('modules'),
		array('inverters'),
		array('orientation'),
		array('yield'),
	);

	// Loop through $table_fields. If there is at least one field filled in, we can show the table. Otherwise, we don't show it.
	foreach ($table_fields as $key => $value) {
		if ( get_field(  $value[0] ) ) {
			$show_table=true;
		}
	}
	if($show_table):
	?>
		<div class="entry-content-part">
			<h5>Project Stats</h5>
			<table id="table-<?php the_ID() ?>" class="tablepress">
				<thead>
					<tr class="row-<?php echo $count; ?> <?php echo $odd_even ?>">
						<th class="column-1 table-title" colspan="2"><?php the_title(); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach ($table_fields as $key => $value) {
							table_row( $value[0],  $value[1]);
						}
						
						if ( have_rows('additional_fields') ) :			
							while( have_rows('additional_fields') ) : the_row(); 
								$i++ % 2 == 0 ? $odd_even = 'even' : $odd_even = 'odd'; ?>													    
								<tr class="<?php echo $odd_even ?>">
									<td class="column-1"><b><?php the_sub_field('label'); ?></b></td>
									<td class="column-2"><?php the_sub_field('value'); ?></td>
								</tr>
							<?php 
							endwhile;				
						endif; ?>
				</tbody>
			</table>
		</div>
	<?php
	endif; 
}