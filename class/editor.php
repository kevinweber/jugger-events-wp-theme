<?php
class JuggerEventsThemeEditor {

	function __construct() {
        add_action( 'init',  array( $this, 'css' ) );
	}

    // Load custom editor styles
    function css() {
        add_editor_style( "css/styles-editor.css" );
    }
}