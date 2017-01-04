<?php 
function check_input($data, $value){

	$data['value'] = $value;
	if($data['required'] && $data['value']=='') {
		return $data;
	}
	else if(!$data['required'] && $data['value']=='') {
		$data['clean'] = $data['value'];
		$data['passed'] = true;
		return $data;
	}

	if(!is_array($data['value'])) {
	    $data['value'] = trim($data['value']);
	    $data['value'] = stripslashes($data['value']);
	    $data['value'] = htmlspecialchars($data['value']);		
	}

	switch ($data['type']) {
	    case "email":
	        if ( !is_email( $data['value'] ) ) { 
	        	return $data; 
	        }
	        break;
	    case "url":
	        if (filter_var($data['value'], FILTER_VALIDATE_URL) === false) {
			    return $data;
			}
	        break;
	    case "select2":
	    case "select":
	        $data['selected_option'] = $value;
	        break;
	    case "file":     
	        break;             	                
	    default:;
	}
	$data['clean'] = $data['value'];
	$data['passed'] = true;
    return $data;
}


function bldFormInput($id, $data, $form_pristine, $form_num_error_found, $tabIndex=0) {
	$has_error='';
	if(!$form_pristine) {
		if(!$form_num_error_found) {
			// No errors found so clear the values
			$data['value']=''; 
		}
	}
	if(!$form_pristine && $data['passed']==false) {
		// This input has has error detected so add an error class to the surrounding div
		$has_error = 'has-error';
	}
	?>

	<div class="row form-group form-builder <?php echo $has_error; ?>" id="<?php echo $id; ?>-form-group">
		<a href="<?php echo $id; ?>-anchor"></a>
		<div class="form-label"><!-- small-12 medium-3 large-3 columns  -->
			<label for="<?php echo $id; ?>" class="control-label <?php echo $data['required']; ?>"><?php echo $data['label']; ?> <span></span></label>
		</div>
		<div class="form-input"><!-- small-12 medium-9 large-9 columns -->
			<input type="<?php echo $data['type']; ?>" class="form-control js-form-control" id="<?php echo $id; ?>" name="<?php echo $id; ?>" value="<?php echo $data['value']; ?>" placeholder="<?php echo $data['placeholder']; ?>" tabindex=<?php echo $tabIndex; ?> <?php echo $data['required']; ?>>
			<?php $data['help'] ? $help= $data['help'] : $help = $data['label']. ' is required'; ?>
			<small class="error"><?php echo $help; ?></small>
		</div>
	</div>
	<?php 
}

function bldFormFileUpload($id, $data, $form_pristine, $form_num_error_found, $tabIndex=0) {
	$has_error='';
	if(!$form_pristine) {
		if(!$form_num_error_found) {
			// No errors found so clear the values
			$data['value']=''; 
		}
	}
	if(!$form_pristine && $data['passed']==false) {
		// This input has has error detected so add an error class to the surrounding div
		$has_error = 'has-error';
	}
	?>

	<div class="row form-group form-builder <?php echo $has_error; ?>" id="<?php echo $id; ?>-form-group">
		<a href="<?php echo $id; ?>-anchor"></a>
		<div class="small-12 medium-3 large-3 columns form-label">
			<label for="<?php echo $id; ?>" class="control-label <?php echo $data['required']; ?>"><?php echo $data['label']; ?> <span></span></label>
		</div>
		<div class="small-12 medium-9 large-9 columns">
			<div class="dummy-input">
				<input type="<?php echo $data['type']; ?>" class="form-control js-form-control-file-upload" id="<?php echo $id; ?>" name="<?php echo $id; ?>" tabindex=<?php echo $tabIndex; ?> <?php echo $data['required']; ?> accept="application/pdf">
			<?php $data['help'] ? $help= $data['help'] : $help = $data['label']. ' is required'; ?>
			
			</div>
			<small class="error"><?php echo $help; ?></small>
		</div>
	</div>
	<?php 
}

// function bldFormTextarea($id='name', $label='Name', $placeholder='', $required='', $value = '') {
function bldFormTextarea($id, $data, $form_pristine, $form_num_error_found, $tabIndex) {
	$has_error='';
	if(!$form_pristine) {
		if(!$form_num_error_found) {
			// No errors found so clear the values
			$data['value']=''; 
		}
	}
	if(!$form_pristine && $data['passed']==false) {
		// This input has has error detected so add an error class to the surrounding div
		$has_error = 'has-error';
	}	
	?>
	<div class="row form-group form-builder <?php echo $has_error; ?>" id="<?php echo $id; ?>-form-group">
		<div class="form-label">
			<label for="<?php echo $id; ?>" class="control-label <?php echo $data['required']; ?>"><?php echo $data['label']; ?> <span></span></label>
		</div>
		<div class="form-input">
			<textarea class="form-control js-form-control" rows="3" id="<?php echo $id; ?>" name="<?php echo $id; ?>" tabindex=<?php echo $tabIndex; ?> placeholder="<?php echo $data['placeholder']; ?>" <?php echo $data['required']; ?>><?php echo $data['value']; ?></textarea>
			<?php $data['help'] ? $help= $data['help'] : $help = $data['label']. ' is required'; ?>
			<small class="error"><?php echo $help; ?></small>
		</div>
	</div>
	<?php 
}

// function bldFormSelect($id='name', $label='Name', $keys='', $required='', $selected_option = '') {
function bldFormSelect($id, $data, $form_pristine, $form_num_error_found, $tabIndex, $multiple) {

	if(!$form_pristine) {
		if(!$form_num_error_found) {
			// No errors found so clear the selected option
			$data['selected_option']=''; 
		}
	}
	if(!$form_pristine && $data['passed']==false) {
		// This input has has error detected so add an error class to the surrounding div
		$has_error = 'has-error';
	}	
	?>
	<div class="row form-group form-builder <?php echo $has_error; ?>" id="<?php echo $id; ?>-form-group">
		<div class="small-12 medium-3 large-3 columns form-label">
			<label for="<?php echo $id; ?>" class="control-label <?php echo $data['required']; ?>"><?php echo $data['label']; ?> <span></span></label>
		</div>
		<div class="small-12 medium-9 large-9 columns">
			<select class="form-control js-form-control" id="<?php echo $id; ?>" name="<?php echo $id; ?>" tabindex=<?php echo $tabIndex; ?> <?php echo $data['required']; ?> <?php echo $multiple; ?>>
				<?php if(!$multiple): ?>
					<option value="">Please select an option...</option>
				<?php endif; ?>
				<?php foreach ($data['options'] as $option): ?>
					<?php if($option['option_value'] == $data['selected_option']){ $selected='selected'; } else { $selected=''; }?>
	  				<option value="<?php echo  $option['option_value']; ?>" <?php echo $selected; ?>><?php echo $option['option']; ?></option>
	  			<?php endforeach; ?>
			</select>
			<?php $data['help'] ? $help= $data['help'] : $help = $data['label']. ' is required'; ?>
			<small class="error"><?php echo $help; ?></small>
			<?php if($multiple): ?>
				<small>Hold down the control/command button to select multiple options</small>
			<?php endif; ?>
		</div>
	</div>
	<?php 
}

function bldFormSelect2($id, $data, $form_pristine, $form_num_error_found, $tabIndex) {
	if(!$form_pristine) {
		if(!$form_num_error_found) {
			// No errors found so clear the selected option
			$data['selected_option']=''; 
		}
	}
	if(!$form_pristine && $data['passed']==false) {
		// This input has has error detected so add an error class to the surrounding div
		$has_error = 'has-error';
	}	
	?>

	<div class="row form-group form-builder <?php echo $has_error; ?>" id="<?php echo $id; ?>-form-group">
		<div class="small-3 columns form-label">
			<label for="<?php echo $id; ?>" class="control-label <?php echo $data['required']; ?>"><?php echo $data['label']; ?> <span></span></label>
		</div>
		<div class="small-9 columns">
			<div class="select2-container" style="width: 100%">
				<select class="form-control js-example-basic-multiple" id="<?php echo $id; ?>" name="<?php echo $id; ?>[]" tabindex=<?php echo $tabIndex; ?> <?php echo $data['required']; ?> multiple="multiple" style="width: 100%">
					<?php foreach ($data['options'] as $option): ?>
				    <!-- <optgroup label="<?php //echo  $option['name']; ?>"> -->
				        <?php //foreach ($option['products'] as $product):?>
				        	<option value="<?php echo $option['option_value'] ?>"><?php echo $option['option'] ?></option>
				        <?php //endforeach; ?>
				    <!-- </optgroup> -->
					<?php endforeach;?>
				</select>
				<?php $data['help'] ? $help= $data['help'] : $help = $data['label']. ' is required'; ?>
				<small class="error"><?php echo $help; ?></small>

			</div>
		</div>
	</div>
	<?php 
}

function getProductsForSelect()  {

    $taxonomy     = 'product_cat';
    $orderby      = 'name';  
    $show_count   = 0;      // 1 for yes, 0 for no
    $pad_counts   = 0;      // 1 for yes, 0 for no
    $hierarchical = 1;      // 1 for yes, 0 for no  
    $title        = '';  
    $empty        = 0;

    $args = array(
        'taxonomy'     => $taxonomy,
        'orderby'      => $orderby,
        'show_count'   => $show_count,
        'pad_counts'   => $pad_counts,
        'hierarchical' => $hierarchical,
        'title_li'     => $title,
        'hide_empty'   => $empty
    );
    $data = array();
    // $all_categories_with_products = array();

    $all_categories = get_categories( $args );
    foreach ($all_categories as $cat) {
        if($cat->category_parent == 0) {

        	// if ($cat->slug !== 'cable-assemblies' && $cat->slug !== 'connectors-2') {
        	if ($cat->slug !== 'cable-assemblies') {	
        	
	            $product_cat = array();

	            $product_cat['slug']=$cat->slug;
	            $product_cat['name']=$cat->name;
				// echo $cat->slug.'<br>';

	            $cat_products = new WP_Query(array(
	                'post_type'         => 'product',
	                'posts_per_page'    => -1,
	                'product_cat'       => $cat->slug,
	                'orderby'           => 'name',
	                'order'             => 'ASC',//'DESC'
	            ));
	            
	            $products = array();
	            while($cat_products->have_posts()): $cat_products->the_post(); 
	              	$theid = get_the_ID();
	    			$product = wc_get_product($theid);
	                $product_details = array();
	                $product_details['id']=get_the_ID();
	                $product_details['number']= $product->get_sku() ? $product->get_sku() : '';
	                $product_details['title']= get_the_title( $post );
	                $products[]=$product_details;
	            endwhile; // End the loop


	            $product_cat['products'] =  $products;
	            $product_cats[]=$product_cat;
	            // $all_categories_with_products[]=$products;
	            wp_reset_query();
            }
        }       
    }

    return $product_cats;
}


function getCountries() {
	$countries = array ( '' => 'Select country...', 'AF' => 'Afghanistan', 'AX' => 'Aland Islands', 'AL' => 'Albania', 'DZ' => 'Algeria', 'AS' => 'American Samoa', 'AD' => 'Andorra', 'AO' => 'Angola', 'AI' => 'Anguilla', 'AQ' => 'Antarctica', 'AG' => 'Antigua and Barbuda', 'AR' => 'Argentina', 'AM' => 'Armenia', 'AW' => 'Aruba', 'AC' => 'Ascension Island', 'AU' => 'Australia', 'AT' => 'Austria', 'AZ' => 'Azerbaijan', 'BS' => 'Bahamas', 'BH' => 'Bahrain', 'BD' => 'Bangladesh', 'BB' => 'Barbados', 'BY' => 'Belarus', 'BE' => 'Belgium', 'BZ' => 'Belize', 'BJ' => 'Benin', 'BM' => 'Bermuda', 'BT' => 'Bhutan', 'BO' => 'Bolivia', 'BA' => 'Bosnia and Herzegovina', 'BW' => 'Botswana', 'BV' => 'Bouvet Island', 'BR' => 'Brazil', 'IO' => 'British Indian Ocean Territory', 'VG' => 'British Virgin Islands', 'BN' => 'Brunei Darussalam', 'BG' => 'Bulgaria', 'BF' => 'Burkina Faso', 'BI' => 'Burundi', 'KH' => 'Cambodia', 'CM' => 'Cameroon', 'CA' => 'Canada', 'CV' => 'Cape Verde', 'KY' => 'Cayman Islands', 'CF' => 'Central African Republic', 'TD' => 'Chad', 'CL' => 'Chile', 'CN' => 'China', 'CX' => 'Christmas Island', 'CC' => 'Cocos (Keeling) Islands', 'CO' => 'Colombia', 'KM' => 'Comoros', 'CG' => 'Congo', 'CD' => 'Zaire (Congo Democratic Republic)', 'CK' => 'Cook Islands', 'CR' => 'Costa Rica', 'CI' => 'Cote D\'Ivoire (Ivory Coast)', 'HR' => 'Croatia (Hrvatska)', 'CU' => 'Cuba', 'CY' => 'Cyprus', 'CZ' => 'Czech Republic', 'CS' => 'Czechoslovakia (former)', 'DK' => 'Denmark', 'DJ' => 'Djibouti', 'DM' => 'Dominica', 'DO' => 'Dominican Republic', 'TP' => 'East Timor', 'EC' => 'Ecuador', 'EG' => 'Egypt', 'SV' => 'El Salvador', 'GQ' => 'Equatorial Guinea', 'ER' => 'Eritrea', 'EE' => 'Estonia', 'ET' => 'Ethiopia', 'MK' => 'F.Y.R.O.M. (Macedonia)', 'FK' => 'Falkland Islands (Malvinas)', 'FO' => 'Faroe Islands', 'FJ' => 'Fiji', 'FI' => 'Finland', 'FR' => 'France', 'FX' => 'France (Metropolitan)', 'GF' => 'French Guiana', 'PF' => 'French Polynesia', 'TF' => 'French Southern Territories', 'GA' => 'Gabon', 'GM' => 'Gambia', 'GE' => 'Georgia', 'DE' => 'Germany', 'GH' => 'Ghana', 'GI' => 'Gibraltar', 'GB' => 'Great Britain (UK)', 'GR' => 'Greece', 'GL' => 'Greenland', 'GD' => 'Grenada', 'GP' => 'Guadeloupe', 'GU' => 'Guam', 'GT' => 'Guatemala', 'GG' => 'Guernsey', 'GN' => 'Guinea', 'GW' => 'Guinea-Bissau', 'GY' => 'Guyana', 'HT' => 'Haiti', 'HM' => 'Heard and McDonald Islands', 'HN' => 'Honduras', 'HK' => 'Hong Kong', 'HU' => 'Hungary', 'IS' => 'Iceland', 'IN' => 'India', 'ID' => 'Indonesia', 'IR' => 'Iran', 'IQ' => 'Iraq', 'IE' => 'Ireland', 'IM' => 'Isle of Man', 'IL' => 'Israel', 'IT' => 'Italy', 'JM' => 'Jamaica', 'JP' => 'Japan', 'JE' => 'Jersey', 'JO' => 'Jordan', 'KZ' => 'Kazakhstan', 'KE' => 'Kenya', 'KI' => 'Kiribati', 'KP' => 'Korea (North)', 'KR' => 'Korea (South)', 'XK' => 'Kosovo*', 'KW' => 'Kuwait', 'KG' => 'Kyrgyzstan', 'LA' => 'Laos', 'LV' => 'Latvia', 'LB' => 'Lebanon', 'LS' => 'Lesotho', 'LR' => 'Liberia', 'LY' => 'Libya', 'LI' => 'Liechtenstein', 'LT' => 'Lithuania', 'LU' => 'Luxembourg', 'MO' => 'Macau', 'MG' => 'Madagascar', 'MW' => 'Malawi', 'MY' => 'Malaysia', 'MV' => 'Maldives', 'ML' => 'Mali', 'MT' => 'Malta', 'MH' => 'Marshall Islands', 'MQ' => 'Martinique', 'MR' => 'Mauritania', 'MU' => 'Mauritius', 'YT' => 'Mayotte', 'MX' => 'Mexico', 'FM' => 'Micronesia', 'MD' => 'Moldova', 'MC' => 'Monaco', 'MN' => 'Mongolia', 'ME' => 'Montenegro', 'MS' => 'Montserrat', 'MA' => 'Morocco', 'MZ' => 'Mozambique', 'MM' => 'Myanmar', 'NA' => 'Namibia', 'NR' => 'Nauru', 'NP' => 'Nepal', 'NL' => 'Netherlands', 'AN' => 'Netherlands Antilles', 'NC' => 'New Caledonia', 'NZ' => 'New Zealand (Aotearoa)', 'NI' => 'Nicaragua', 'NE' => 'Niger', 'NG' => 'Nigeria', 'NU' => 'Niue', 'NF' => 'Norfolk Island', 'MP' => 'Northern Mariana Islands', 'NO' => 'Norway', 'OM' => 'Oman', 'PK' => 'Pakistan', 'PW' => 'Palau', 'PS' => 'Palestinian Territory (Occupied)', 'PA' => 'Panama', 'PG' => 'Papua New Guinea', 'PY' => 'Paraguay', 'PE' => 'Peru', 'PH' => 'Philippines', 'PN' => 'Pitcairn', 'PL' => 'Poland', 'PT' => 'Portugal', 'PR' => 'Puerto Rico', 'QA' => 'Qatar', 'RE' => 'Reunion', 'RO' => 'Romania', 'RU' => 'Russian Federation', 'RW' => 'Rwanda', 'GS' => 'S. Georgia and S. Sandwich Isls.', 'KN' => 'Saint Kitts and Nevis', 'LC' => 'Saint Lucia', 'VC' => 'Saint Vincent & the Grenadines ', 'WS' => 'Samoa', 'SM' => 'San Marino', 'ST' => 'Sao Tome and Principe', 'SA' => 'Saudi Arabia', 'SN' => 'Senegal', 'RS' => 'Serbia', 'YU' => 'Serbia and Montenegro (former)', 'SC' => 'Seychelles', 'SL' => 'Sierra Leone', 'SG' => 'Singapore', 'SK' => 'Slovak Republic', 'SI' => 'Slovenia', 'SB' => 'Solomon Islands', 'SO' => 'Somalia', 'ZA' => 'South Africa', 'ES' => 'Spain', 'LK' => 'Sri Lanka', 'SH' => 'St. Helena', 'PM' => 'St. Pierre and Miquelon', 'SD' => 'Sudan', 'SR' => 'Suriname', 'SJ' => 'Svalbard & Jan Mayen Islands ', 'SZ' => 'Swaziland', 'SE' => 'Sweden', 'CH' => 'Switzerland', 'SY' => 'Syria', 'TW' => 'Taiwan', 'TJ' => 'Tajikistan', 'TZ' => 'Tanzania', 'TH' => 'Thailand', 'TG' => 'Togo', 'TK' => 'Tokelau', 'TO' => 'Tonga', 'TT' => 'Trinidad and Tobago', 'TN' => 'Tunisia', 'TR' => 'Turkey', 'TM' => 'Turkmenistan', 'TC' => 'Turks and Caicos Islands', 'TV' => 'Tuvalu', 'UG' => 'Uganda', 'UA' => 'Ukraine', 'AE' => 'United Arab Emirates', 'UK' => 'United Kingdom', 'US' => 'United States of America', 'UY' => 'Uruguay', 'UM' => 'US Minor Outlying Islands', 'SU' => 'USSR (former)', 'UZ' => 'Uzbekistan', 'VU' => 'Vanuatu', 'VA' => 'Vatican City State (Holy See)', 'VE' => 'Venezuela', 'VN' => 'Viet Nam', 'VI' => 'Virgin Islands (U.S.)', 'WF' => 'Wallis and Futuna Islands', 'EH' => 'Western Sahara', 'YE' => 'Yemen', 'ZM' => 'Zambia', 'ZW' => 'Zimbabwe', );
	//$countries = array ( 'Afghanistan' => 'Afghanistan', 'Albania' => 'Albania', 'Algeria' => 'Algeria', 'Andorra' => 'Andorra', 'Angola' => 'Angola', 'Antigua & Deps' => 'Antigua & Deps', 'Argentina' => 'Argentina', 'Armenia' => 'Armenia', 'Australia' => 'Australia', 'Austria' => 'Austria', 'Azerbaijan' => 'Azerbaijan', 'Bahamas' => 'Bahamas', 'Bahrain' => 'Bahrain', 'Bangladesh' => 'Bangladesh', 'Barbados' => 'Barbados', 'Belarus' => 'Belarus', 'Belgium' => 'Belgium', 'Belize' => 'Belize', 'Benin' => 'Benin', 'Bhutan' => 'Bhutan', 'Bolivia' => 'Bolivia', 'Bosnia Herzegovina' => 'Bosnia Herzegovina', 'Botswana' => 'Botswana', 'Brazil' => 'Brazil', 'Brunei' => 'Brunei', 'Bulgaria' => 'Bulgaria', 'Burkina' => 'Burkina', 'Burundi' => 'Burundi', 'Cambodia' => 'Cambodia', 'Cameroon' => 'Cameroon', 'Canada' => 'Canada', 'Cape Verde' => 'Cape Verde', 'Central African Rep' => 'Central African Rep', 'Chad' => 'Chad', 'Chile' => 'Chile', 'China' => 'China', 'Colombia' => 'Colombia', 'Comoros' => 'Comoros', 'Congo' => 'Congo', 'Congo {Democratic Rep}' => 'Congo {Democratic Rep}', 'Costa Rica' => 'Costa Rica', 'Croatia' => 'Croatia', 'Cuba' => 'Cuba', 'Cyprus' => 'Cyprus', 'Czech Republic' => 'Czech Republic', 'Denmark' => 'Denmark', 'Djibouti' => 'Djibouti', 'Dominica' => 'Dominica', 'Dominican Republic' => 'Dominican Republic', 'East Timor' => 'East Timor', 'Ecuador' => 'Ecuador', 'Egypt' => 'Egypt', 'El Salvador' => 'El Salvador', 'Equatorial Guinea' => 'Equatorial Guinea', 'Eritrea' => 'Eritrea', 'Estonia' => 'Estonia', 'Ethiopia' => 'Ethiopia', 'Fiji' => 'Fiji', 'Finland' => 'Finland', 'France' => 'France', 'Gabon' => 'Gabon', 'Gambia' => 'Gambia', 'Georgia' => 'Georgia', 'Germany' => 'Germany', 'Ghana' => 'Ghana', 'Greece' => 'Greece', 'Grenada' => 'Grenada', 'Guatemala' => 'Guatemala', 'Guinea' => 'Guinea', 'Guinea-Bissau' => 'Guinea-Bissau', 'Guyana' => 'Guyana', 'Haiti' => 'Haiti', 'Honduras' => 'Honduras', 'Hungary' => 'Hungary', 'Iceland' => 'Iceland', 'India' => 'India', 'Indonesia' => 'Indonesia', 'Iran' => 'Iran', 'Iraq' => 'Iraq', 'Ireland {Republic}' => 'Ireland {Republic}', 'Israel' => 'Israel', 'Italy' => 'Italy', 'Ivory Coast' => 'Ivory Coast', 'Jamaica' => 'Jamaica', 'Japan' => 'Japan', 'Jordan' => 'Jordan', 'Kazakhstan' => 'Kazakhstan', 'Kenya' => 'Kenya', 'Kiribati' => 'Kiribati', 'Korea North' => 'Korea North', 'Korea South' => 'Korea South', 'Kosovo' => 'Kosovo', 'Kuwait' => 'Kuwait', 'Kyrgyzstan' => 'Kyrgyzstan', 'Laos' => 'Laos', 'Latvia' => 'Latvia', 'Lebanon' => 'Lebanon', 'Lesotho' => 'Lesotho', 'Liberia' => 'Liberia', 'Libya' => 'Libya', 'Liechtenstein' => 'Liechtenstein', 'Lithuania' => 'Lithuania', 'Luxembourg' => 'Luxembourg', 'Macedonia' => 'Macedonia', 'Madagascar' => 'Madagascar', 'Malawi' => 'Malawi', 'Malaysia' => 'Malaysia', 'Maldives' => 'Maldives', 'Mali' => 'Mali', 'Malta' => 'Malta', 'Marshall Islands' => 'Marshall Islands', 'Mauritania' => 'Mauritania', 'Mauritius' => 'Mauritius', 'Mexico' => 'Mexico', 'Micronesia' => 'Micronesia', 'Moldova' => 'Moldova', 'Monaco' => 'Monaco', 'Mongolia' => 'Mongolia', 'Montenegro' => 'Montenegro', 'Morocco' => 'Morocco', 'Mozambique' => 'Mozambique', 'Myanmar {Burma}' => 'Myanmar {Burma}', 'Namibia' => 'Namibia', 'Nauru' => 'Nauru', 'Nepal' => 'Nepal', 'Netherlands' => 'Netherlands', 'New Zealand' => 'New Zealand', 'Nicaragua' => 'Nicaragua', 'Niger' => 'Niger', 'Nigeria' => 'Nigeria', 'Norway' => 'Norway', 'Oman' => 'Oman', 'Pakistan' => 'Pakistan', 'Palau' => 'Palau', 'Panama' => 'Panama', 'Papua New Guinea' => 'Papua New Guinea', 'Paraguay' => 'Paraguay', 'Peru' => 'Peru', 'Philippines' => 'Philippines', 'Poland' => 'Poland', 'Portugal' => 'Portugal', 'Qatar' => 'Qatar', 'Romania' => 'Romania', 'Russian Federation' => 'Russian Federation', 'Rwanda' => 'Rwanda', 'St Kitts & Nevis' => 'St Kitts & Nevis', 'St Lucia' => 'St Lucia', 'Saint Vincent & the Grenadines' => 'Saint Vincent & the Grenadines', 'Samoa' => 'Samoa', 'San Marino' => 'San Marino', 'Sao Tome & Principe' => 'Sao Tome & Principe', 'Saudi Arabia' => 'Saudi Arabia', 'Senegal' => 'Senegal', 'Serbia' => 'Serbia', 'Seychelles' => 'Seychelles', 'Sierra Leone' => 'Sierra Leone', 'Singapore' => 'Singapore', 'Slovakia' => 'Slovakia', 'Slovenia' => 'Slovenia', 'Solomon Islands' => 'Solomon Islands', 'Somalia' => 'Somalia', 'South Africa' => 'South Africa', 'South Sudan' => 'South Sudan', 'Spain' => 'Spain', 'Sri Lanka' => 'Sri Lanka', 'Sudan' => 'Sudan', 'Suriname' => 'Suriname', 'Swaziland' => 'Swaziland', 'Sweden' => 'Sweden', 'Switzerland' => 'Switzerland', 'Syria' => 'Syria', 'Taiwan' => 'Taiwan', 'Tajikistan' => 'Tajikistan', 'Tanzania' => 'Tanzania', 'Thailand' => 'Thailand', 'Togo' => 'Togo', 'Tonga' => 'Tonga', 'Trinidad & Tobago' => 'Trinidad & Tobago', 'Tunisia' => 'Tunisia', 'Turkey' => 'Turkey', 'Turkmenistan' => 'Turkmenistan', 'Tuvalu' => 'Tuvalu', 'Uganda' => 'Uganda', 'Ukraine' => 'Ukraine', 'United Arab Emirates' => 'United Arab Emirates', 'United Kingdom' => 'United Kingdom', 'United States' => 'United States', 'Uruguay' => 'Uruguay', 'Uzbekistan' => 'Uzbekistan', 'Vanuatu' => 'Vanuatu', 'Vatican City' => 'Vatican City', 'Venezuela' => 'Venezuela', 'Vietnam' => 'Vietnam', 'Yemen' => 'Yemen', 'Zambia' => 'Zambia', 'Zimbabwe' => 'Zimbabwe', );
	// $countries = array(
	//     'Afghanistan'                       => 'emeasales@taoglas.com',
	//     'Albania'                           => 'emeasales@taoglas.com',
	//     'Algeria'                           => 'emeasales@taoglas.com',
	//     'Andorra'                           => 'emeasales@taoglas.com',
	//     'Angola'                            => 'emeasales@taoglas.com',
	//     'Antigua & Deps'                    => 'nasales@taoglas.com', 
	//     'Argentina'                         => 'emeasales@taoglas.com',
	//     'Armenia'                           => 'emeasales@taoglas.com',
	//     'Australia'                         => 'asiasales@taoglas.com',
	//     'Austria'                           => 'emeasales@taoglas.com',
	//     'Azerbaijan'                        => 'emeasales@taoglas.com',
	//     'Bahamas'                           => 'nasales@taoglas.com', 
	//     'Bahrain'                           => 'emeasales@taoglas.com',
	//     'Bangladesh'                        => 'asiasales@taoglas.com',
	//     'Barbados'                          => 'nasales@taoglas.com',
	//     'Belarus'                           => 'emeasales@taoglas.com',
	//     'Belgium'                           => 'emeasales@taoglas.com',
	//     'Belize'                            => 'emeasales@taoglas.com',
	//     'Benin'                             => 'emeasales@taoglas.com',
	//     'Bhutan'                            => 'asiasales@taoglas.com',
	//     'Bolivia'                           => 'emeasales@taoglas.com',
	//     'Bosnia Herzegovina'                => 'emeasales@taoglas.com',
	//     'Botswana'                          => 'emeasales@taoglas.com',
	//     'Brazil'                            => 'emeasales@taoglas.com',
	//     'Brunei'                            => 'asiasales@taoglas.com',
	//     'Bulgaria'                          => 'emeasales@taoglas.com',
	//     'Burkina'                           => 'emeasales@taoglas.com',
	//     'Burundi'                           => 'emeasales@taoglas.com',
	//     'Cambodia'                          => 'asiasales@taoglas.com',
	//     'Cameroon'                          => 'emeasales@taoglas.com',
	//     'Canada'                            => 'nasales@taoglas.com',
	//     'Cape Verde'                        => 'emeasales@taoglas.com',
	//     'Central African Rep'               => 'emeasales@taoglas.com',
	//     'Chad'                              => 'emeasales@taoglas.com',
	//     'Chile'                             => 'nasales@taoglas.com',
	//     'China'                             => 'asiasales@taoglas.com',
	//     'Colombia'                          => 'nasales@taoglas.com',
	//     'Comoros'                           => 'emeasales@taoglas.com',
	//     'Congo'                             => 'emeasales@taoglas.com',
	//     'Congo {Democratic Rep}'            => 'emeasales@taoglas.com', 
	//     'Costa Rica'                        => 'nasales@taoglas.com',
	//     'Croatia'                           => 'emeasales@taoglas.com',
	//     'Cuba'                              => 'nasales@taoglas.com',
	//     'Cyprus'                            => 'emeasales@taoglas.com',
	//     'Czech Republic'                    => 'emeasales@taoglas.com',
	//     'Denmark'                           => 'emeasales@taoglas.com',
	//     'Djibouti'                          => 'emeasales@taoglas.com',
	//     'Dominica'                          => 'nasales@taoglas.com',
	//     'Dominican Republic'                => 'nasales@taoglas.com',
	//     'East Timor'                        => 'asiasales@taoglas.com',
	//     'Ecuador'                           => 'nasales@taoglas.com',
	//     'Egypt'                             => 'emeasales@taoglas.com',
	//     'El Salvador'                       => 'nasales@taoglas.com',
	//     'Equatorial Guinea'                 => 'emeasales@taoglas.com',
	//     'Eritrea'                           => 'emeasales@taoglas.com',
	//     'Estonia'                           => 'emeasales@taoglas.com',
	//     'Ethiopia'                          => 'emeasales@taoglas.com',
	//     'Fiji'                              => 'asiasales@taoglas.com',
	//     'Finland'                           => 'emeasales@taoglas.com',
	//     'France'                            => 'emeasales@taoglas.com',
	//     'Gabon'                             => 'emeasales@taoglas.com',
	//     'Gambia'                            => 'emeasales@taoglas.com',
	//     'Georgia'                           => 'emeasales@taoglas.com',
	//     'Germany'                           => 'emeasales@taoglas.com',
	//     'Ghana'                             => 'emeasales@taoglas.com',
	//     'Greece'                            => 'emeasales@taoglas.com',
	//     'Grenada'                           => 'nasales@taoglas.com',            
	//     'Guatemala'                         => 'nasales@taoglas.com',
	//     'Guinea'                            => 'emeasales@taoglas.com',         
	//     'Guinea-Bissau'                     => 'emeasales@taoglas.com',    
	//     'Guyana'                            => 'nasales@taoglas.com',
	//     'Haiti'                             => 'nasales@taoglas.com',
	//     'Honduras'                          => 'nasales@taoglas.com',
	//     'Hungary'                           => 'emeasales@taoglas.com',
	//     'Iceland'                           => 'emeasales@taoglas.com',
	//     'India'                             => 'asiasales@taoglas.com',
	//     'Indonesia'                         => 'asiasales@taoglas.com',
	//     'Iran'                              => 'emeasales@taoglas.com',
	//     'Iraq'                              => 'emeasales@taoglas.com',
	//     'Ireland {Republic}'                => 'emeasales@taoglas.com',     
	//     'Israel'                            => 'emeasales@taoglas.com',     
	//     'Italy'                             => 'emeasales@taoglas.com',
	//     'Ivory Coast'                       => 'emeasales@taoglas.com',
	//     'Jamaica'                           => 'nasales@taoglas.com',
	//     'Japan'                             => 'asiasales@taoglas.com',
	//     'Jordan'                            => 'emeasales@taoglas.com',
	//     'Kazakhstan'                        => 'asiasales@taoglas.com',    
	//     'Kenya'                             => 'emeasales@taoglas.com',
	//     'Kiribati'                          => 'asiasales@taoglas.com',
	//     'Korea North'                       => 'asiasales@taoglas.com',
	//     'Korea South'                       => 'asiasales@taoglas.com',
	//     'Kosovo'                            => 'emeasales@taoglas.com',
	//     'Kuwait'                            => 'emeasales@taoglas.com',
	//     'Kyrgyzstan'                        => 'emeasales@taoglas.com',
	//     'Laos'                              => 'asiasales@taoglas.com',
	//     'Latvia'                            => 'emeasales@taoglas.com',
	//     'Lebanon'                           => 'emeasales@taoglas.com',
	//     'Lesotho'                           => 'emeasales@taoglas.com',
	//     'Liberia'                           => 'emeasales@taoglas.com',
	//     'Libya'                             => 'emeasales@taoglas.com',
	//     'Liechtenstein'                     => 'emeasales@taoglas.com',
	//     'Lithuania'                         => 'emeasales@taoglas.com',
	//     'Luxembourg'                        => 'emeasales@taoglas.com',
	//     'Macedonia'                         => 'emeasales@taoglas.com',
	//     'Madagascar'                        => 'emeasales@taoglas.com',    
	//     'Malawi'                            => 'emeasales@taoglas.com',
	//     'Malaysia'                          => 'asiasales@taoglas.com',
	//     'Maldives'                          => 'asiasales@taoglas.com',
	//     'Mali'                              => 'emeasales@taoglas.com',
	//     'Malta'                             => 'rquinlan@taoglas.com',
	//     'Marshall Islands'                  => 'asiasales@taoglas.com',
	//     'Mauritania'                        => 'emeasales@taoglas.com',         
	//     'Mauritius'                         => 'emeasales@taoglas.com',
	//     'Mexico'                            => 'nasales@taoglas.com',
	//     'Micronesia'                        => 'asiasales@taoglas.com',
	//     'Moldova'                           => 'emeasales@taoglas.com',
	//     'Monaco'                            => 'emeasales@taoglas.com',
	//     'Mongolia'                          => 'asiasales@taoglas.com',
	//     'Montenegro'                        => 'emeasales@taoglas.com',
	//     'Morocco'                           => 'emeasales@taoglas.com',    
	//     'Mozambique'                        => 'emeasales@taoglas.com',
	//     'Myanmar {Burma}'                   => 'asiasales@taoglas.com',
	//     'Namibia'                           => 'emeasales@taoglas.com',       
	//     'Nauru'                             => 'asiasales@taoglas.com',
	//     'Nepal'                             => 'asiasales@taoglas.com',
	//     'Netherlands'                       => 'emeasales@taoglas.com',
	//     'New Zealand'                       => 'asiasales@taoglas.com',
	//     'Nicaragua'                         => 'nasales@taoglas.com',
	//     'Niger'                             => 'emeasales@taoglas.com',
	//     'Nigeria'                           => 'emeasales@taoglas.com',
	//     'Norway'                            => 'emeasales@taoglas.com',
	//     'Oman'                              => 'emeasales@taoglas.com',
	//     'Pakistan'                          => 'emeasales@taoglas.com',
	//     'Palau'                             => 'asiasales@taoglas.com', 
	//     'Panama'                            => 'nasales@taoglas.com',     
	//     'Papua New Guinea'                  => 'asiasales@taoglas.com',
	//     'Paraguay'                          => 'nasales@taoglas.com',
	//     'Peru'                              => 'nasales@taoglas.com',
	//     'Philippines'                       => 'asiasales@taoglas.com',
	//     'Poland'                            => 'emeasales@taoglas.com',
	//     'Portugal'                          => 'emeasales@taoglas.com',
	//     'Qatar'                             => 'emeasales@taoglas.com',
	//     'Romania'                           => 'emeasales@taoglas.com',
	//     'Russian Federation'                => 'emeasales@taoglas.com',    
	//     'Rwanda'                            => 'emeasales@taoglas.com',     
	//     'St Kitts & Nevis'                  => 'nasales@taoglas.com',
	//     'St Lucia'                          => 'nasales@taoglas.com',
	//     'Saint Vincent & the Grenadines'    => 'nasales@taoglas.com',        
	//     'Samoa'                             => 'asiasales@taoglas.com',
	//     'San Marino'                        => 'emeasales@taoglas.com',
	//     'Sao Tome & Principe'               => 'emeasales@taoglas.com',
	//     'Saudi Arabia'                      => 'emeasales@taoglas.com',
	//     'Senegal'                           => 'emeasales@taoglas.com',
	//     'Serbia'                            => 'emeasales@taoglas.com',
	//     'Seychelles'                        => 'emeasales@taoglas.com',
	//     'Sierra Leone'                      => 'emeasales@taoglas.com',
	//     'Singapore'                         => 'asiasales@taoglas.com',
	//     'Slovakia'                          => 'emeasales@taoglas.com',
	//     'Slovenia'                          => 'emeasales@taoglas.com',
	//     'Solomon Islands'                   => 'asiasales@taoglas.com',
	//     'Somalia'                           => 'emeasales@taoglas.com',
	//     'South Africa'                      => 'emeasales@taoglas.com',
	//     'South Sudan'                       => 'emeasales@taoglas.com',
	//     'Spain'                             => 'emeasales@taoglas.com',
	//     'Sri Lanka'                         => 'asiasales@taoglas.com',
	//     'Sudan'                             => 'emeasales@taoglas.com',
	//     'Suriname'                          => 'nasales@taoglas.com',
	//     'Swaziland'                         => 'emeasales@taoglas.com',
	//     'Sweden'                            => 'emeasales@taoglas.com',
	//     'Switzerland'                       => 'emeasales@taoglas.com',
	//     'Syria'                             => 'emeasales@taoglas.com',
	//     'Taiwan'                            => 'asiasales@taoglas.com',
	//     'Tajikistan'                        => 'emeasales@taoglas.com',
	//     'Tanzania'                          => 'emeasales@taoglas.com',
	//     'Thailand'                          => 'asiasales@taoglas.com',
	//     'Togo'                              => 'emeasales@taoglas.com',
	//     'Tonga'                             => 'asiasales@taoglas.com',
	//     'Trinidad & Tobago'                 => 'nasales@taoglas.com',
	//     'Tunisia'                           => 'emeasales@taoglas.com',
	//     'Turkey'                            => 'emeasales@taoglas.com',
	//     'Turkmenistan'                      => 'emeasales@taoglas.com',
	//     'Tuvalu'                            => 'asiasales@taoglas.com',
	//     'Uganda'                            => 'emeasales@taoglas.com',
	//     'Ukraine'                           => 'emeasales@taoglas.com',
	//     'United Arab Emirates'              => 'emeasales@taoglas.com',
	//     'United Kingdom'                    => 'emeasales@taoglas.com',
	//     'United States'                     => 'nasales@taoglas.com',
	//     'Uruguay'                           => 'emeasales@taoglas.com',
	//     'Uzbekistan'                        => 'emeasales@taoglas.com',
	//     'Vanuatu'                           => 'asiasales@taoglas.com',
	//     'Vatican City'                      => 'emeasales@taoglas.com',
	//     'Venezuela'                         => 'nasales@taoglas.com',     
	//     'Vietnam'                           => 'asiasales@taoglas.com',
	//     'Yemen'                             => 'emeasales@taoglas.com',
	//     'Zambia'                            => 'emeasales@taoglas.com',
	//     'Zimbabwe'                          => 'emeasales@taoglas.com'
	// );

	// $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
	return $countries;
}

function getCountryEmail($country) {
	$countries =  getCountries();
	return $countries[$country];
}
?>