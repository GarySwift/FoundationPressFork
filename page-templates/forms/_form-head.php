<?php
include('_page-variables.php');
if( function_exists( 'acf' ) ) {
    include('_functions.php');
    include('_acf-form-array.php');
    include('_if-post-submit-request-form.php');     
}