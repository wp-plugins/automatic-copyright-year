<?php
/*
 Plugin Name: Automatic Copyright Year
 Plugin URI: http://www.wpsos.io/wordpress-plugin-automatic-copyright-year/
 Description: Replaces '&lt;span&gt;[wpsos_year]&lt;/span&gt;' with the current year in widget texts and in the html element 'footer'
 Author: WPSOS
 Version: 1.0
 Author URI: http://www.wpsos.io/
 Licence: GPLv2 or later
 */

/**
 * Modifies the content of the text, replacing [wpsos_year] with the current year number
 * 
 * @param String $content
 * @return String The modified text
 */
function wpsos_replace_copyright_year( $content ){
	$content = str_replace( '[wpsos_year]', date('Y'), $content );
	//Return the modified text
	return $content;
}
//Add filters to run the functions before displaying content on the screen
add_filter( 'widget_text', 'wpsos_replace_copyright_year', 10, 1 );

// Include the scripts required by the plugin
function wpsos_include_scripts(){
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'wpsos-copyright', plugin_dir_url( __FILE__ ) . 'script.js', array('jquery'), false, false);
}
add_action( 'wp_enqueue_scripts', 'wpsos_include_scripts' );
?>