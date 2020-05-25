<?php
/**
 * Editor Styles
 *
 * @package JointsWP
 */

/**
 * Adds your styles to the WordPress editor.
 */
function add_editor_styles() {
	add_editor_style( get_template_directory_uri() . '/assets/styles/editor-style.css' );
	add_editor_style( 'https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i&display=swap' );
}

add_action( 'init', 'add_editor_styles' );
