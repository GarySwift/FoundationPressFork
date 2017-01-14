<?php
function get_debug_mode($debug_mode) {
	if($debug_mode) {
		return ' debug';
	}
	else {
		return '';
	}
}
function get_id($field) {
	if( $field ) {
	    $css_id = ' id="'. $field.'" ';
	}
	else {
		$css_id='';
	}
	echo $css_id;
}

function get_row_class_offset() {
	if( get_sub_field('offset') ) {
	    $offset = get_sub_field('offset');	    
	    if($offset[0]>0 ) {
	    	$large='large-'.(12-$offset*2);
	    	$large_offset = 'large-offset-'.$offset;
	    }
	    else {
			$large_offset = '';
			$large='large-12';	    	
	    }
	}
	else {
		$large_offset = '';
		$large='large-12';
	}	
}

function get_container_class($large_offset, $grid_required=false) {

    switch ($large_offset) {
        case 0:
            if($grid_required) {
                $container_class = 'small-12 medium-12 large-12 columns';
            }
            else {
                $container_class = '';
            }      
            break;
        case 1:
            $container_class = "small-12 medium-12 large-10 large-offset-1 columns offset";
            break;
        case 2:
            $container_class = "small-12 medium-12 large-8 large-offset-2 columns offset";
            break;
    }
    return $container_class;
}   
function classes_string($acf_field) {
    $classes_string='';
    if($acf_field) {
        $classes_array = explode(" ", $acf_field);
        for ($i = 0; $i < count($classes_array); $i++) {
            if($i>0) {
                $classes_string .= ' '.slug($classes_array[$i]);
            }
            else {
                $classes_string .= slug($classes_array[$i]);
            }
        }           
    }
    return $classes_string;

}

function image_overlay_tint_class($style, $image_overlay, $overlay_init_state) {
	$class='';
	if($style) {
		if($image_overlay) {
			if($overlay_init_state==='show') {
				$class = ' image-overlay-init-show';
			}
			elseif($overlay_init_state==='hide') {
				$class = ' image-overlay-init-hide';
			}
		}		
	}
	return $class;
}


function row_class($row_type, $total, $blocks_in_row_sm, $blocks_in_row_med, $blocks_in_row) {
    // if($total%2===0) {
    //     return 'row small-up-1'.' medium-up-'.$total.' large-up-'.$total;
    // }
    if($row_type==='grid') {
        return 'row';
        
    }
    else {
        return 'row small-up-'.$blocks_in_row_sm.' medium-up-'.$blocks_in_row_med.' large-up-'.$blocks_in_row;
    }   
}
function block_class($row_type, $total, $count, $blocks_in_row_sm, $blocks_in_row_med, $blocks_in_row) {
    if ($row_type=="grid") {
        if($count==$total && $blocks_in_row_med%2==0) {
            return 'columns small-12 medium-12 large-'.(12/$blocks_in_row).' pad-med-l-r';//0 
        }
        else {
            return 'columns small-'.(12/$blocks_in_row_sm).' medium-'.(12/$blocks_in_row_med).' large-'.(12/$blocks_in_row);
        }
    }
    else if($row_type=='block') {
        return 'column column-block';
    }
}
 
function get_padding_class($padding) {
    if(!$padding) {
        return false;
    }
    $padding_string = '';
    if($padding[0]) {
        $padding_string .= $padding[0].' ';
    }
    if($padding[1]) {
        $padding_string .= $padding[1].' ';
    }
    return $padding_string;
} 
function get_margin_class($margin) {
    if(!$margin) {
        return false;
    }
    $margin_string = '';
    if($margin[0]) {
        $margin_string .= 'margin-'.$margin[0].' ';
    }
    if($margin[1]) {
        $margin_string .= 'margin-'.$margin[1].' ';
    }
    return ' '.$margin_string;
}  