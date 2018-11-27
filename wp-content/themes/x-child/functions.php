<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

function custom_scripts() {
    wp_enqueue_style( 'child_css', get_stylesheet_directory_uri().'/parallax.css' );
    wp_enqueue_script( 'clutch', 'https://static1.clutch.co/api/widget.js');
}
add_action( 'wp_enqueue_scripts', 'custom_scripts', 9999 );