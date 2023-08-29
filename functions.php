<?php

//Helpers.
//Print string to console.
// function debug_to_console($data) {
//     $output = $data;
//     if (is_array($output))
//         $output = implode(',', $output);

//     echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
// }

//
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );




// //Testing retrieving url query parameters.
// function check_query_parameters() {
//  if( isset( $_GET['template'] ) ){
//     $MyNewTheme = $_GET['template'];
//     debug_to_console( $MyNewTheme);

//     add_filter( 'template', $MyNewTheme );
//     add_filter( 'stylesheet', $MyNewTheme );
//  }
// }

// check_query_parameters();


