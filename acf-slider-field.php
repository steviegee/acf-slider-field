<?php

/*
Plugin Name: Advanced Custom Fields: Slider Field
Plugin URI: PLUGIN_URL
Description: Creates a slider field
Version: 1.0.0
Author: Steven Baltay
Author URI: AUTHOR_URL
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-slider', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_slider( $version ) {
	
	include_once('acf-slider-field-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_slider');	




//3. Include field type for ACF4
function register_fields_slider() {
	
	include_once('acf-slider-field-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_slider');	



	
?>