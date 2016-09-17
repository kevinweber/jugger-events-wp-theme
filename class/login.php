<?php
class JuggerEventsThemeLogin {

	function __construct() {
        add_action( 'login_enqueue_scripts', array( $this, 'login_styles' ) );
	}

    // Load custom login styles
    function login_styles() {
        wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/css/login.css' );
    }
}