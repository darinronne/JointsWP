<?php
/**
 * Admin
 *
 * This file handles the admin area and functions.
 * You can use this file to make changes to the dashboard.
 *
 * @package JointsWP
 */

/**
 * Disable dashboard widgets.
 */
function joints_disable_dashboard_widgets() {
	remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' ); // WordPress News.
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'normal' ); // Quick Draft.
	remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' ); // Site Health Status.
	// remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); // Activity.
	// remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // At a Glance.
	remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'normal' ); // Yoast.
}

add_action( 'admin_menu', 'joints_disable_dashboard_widgets' );



/**
 * Custom Admin Footer.
 */
function joints_custom_admin_footer() {
	echo '<span id="footer-thankyou">Developed by <a href="https://www.meta13.com" target="_blank">Meta 13</a></span>.';
}

// add_filter( 'admin_footer_text', 'joints_custom_admin_footer' );



/**
 * Adding Admin-specific favicon.
 */
function joints_add_admin_favicon() {
	echo '<link rel="icon" href="' . esc_url( get_template_directory_uri() ) . '/assets/images/favicon-admin.png">';
}

add_action( 'login_head', 'joints_add_admin_favicon' );
add_action( 'admin_head', 'joints_add_admin_favicon' );
