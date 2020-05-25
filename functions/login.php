<?php
/**
 * Admin Login
 *
 * @package JointsWP
 */

/**
 * Calling your own login css so you can style it.
 */
function joints_login_css() {
	wp_enqueue_style( 'joints_login_css', get_template_directory_uri() . '/assets/styles/login.css', array(), filemtime( get_template_directory() . '/assets/styles/scss' ), 'all' );
}

/**
 * Changing the logo link from wordpress.org to your site.
 */
function joints_login_url() {
	return home_url();
}

/**
 * Changing the alt text on the logo to show your site name.
 */
function joints_login_title() {
	return get_option( 'blogname' );
}

// calling it only on the login page.
add_action( 'login_enqueue_scripts', 'joints_login_css', 10 );
add_filter( 'login_headerurl', 'joints_login_url' );
add_filter( 'login_headertext', 'joints_login_title' );
