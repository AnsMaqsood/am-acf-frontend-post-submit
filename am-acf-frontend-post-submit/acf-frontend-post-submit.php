<?php
/*
Plugin Name: AM ACF Frontend Post Submit
Description: Submit posts from the frontend using ACF.
Version: 1.0
Author: Ans Maqsood
*/

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'AFPS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

add_shortcode( 'acf_frontend_form', 'afps_render_form' );

function afps_render_form( $atts ) {
    if ( ! is_user_logged_in() ) {
        return '<p>You must be logged in to submit a post.</p>';
    }
    ob_start();
    include AFPS_PLUGIN_DIR . 'templates/form.php';
    return ob_get_clean();
}
