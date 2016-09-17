<?php
if ( !defined( 'JUGGER_THEME_PATH' ) )
	define( 'JUGGER_THEME_PATH', plugin_dir_path( __FILE__ ) );

include JUGGER_THEME_PATH . 'class/login.php';
new JuggerEventsThemeLogin();

include JUGGER_THEME_PATH . 'class/editor.php';
new JuggerEventsThemeEditor();