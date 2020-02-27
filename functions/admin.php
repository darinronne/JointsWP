<?php
// This file handles the admin area and functions - You can use this file to make changes to the dashboard.

/************* DASHBOARD WIDGETS *****************/

// Disable default dashboard widgets.
function disable_default_dashboard_widgets() {
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'core' ); // Right Now Widget.
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'core' ); // Comments Widget.
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'core' ); // Incoming Links Widget.
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'core' ); // Plugins Widget.
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'core' ); // Quick Press Widget.
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'core' ); // Recent Drafts Widget.
	remove_meta_box( 'dashboard_primary', 'dashboard', 'core' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'core' );

	// Removing plugin dashboard boxes.
	remove_meta_box( 'yoast_db_widget', 'dashboard', 'normal' ); // Yoast's SEO Plugin Widget.
}

// removing the dashboard widgets.
add_action( 'admin_menu', 'disable_default_dashboard_widgets' );



/************* CUSTOMIZE ADMIN *******************/

// Custom Backend Footer.
function joints_custom_admin_footer() {
	_e( '<span id="footer-thankyou">Developed by <a href="https://www.meta13.com" target="_blank">Meta 13</a></span>.', 'jointswp' );
}

// Adding it to the admin area.
// add_filter( 'admin_footer_text', 'joints_custom_admin_footer' );



// Adding Admin-specific favicon.
function joints_add_admin_favicon() {
	echo '<link rel="icon" href="' . esc_url( get_template_directory_uri() ) . '/assets/images/favicon-admin.png">';
}
add_action( 'login_head', 'joints_add_admin_favicon' );
add_action( 'admin_head', 'joints_add_admin_favicon' );
