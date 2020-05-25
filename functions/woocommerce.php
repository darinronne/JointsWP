<?php
/**
 * Woocommerce
 *
 * This file contains tweaks that are more global, or didn't know where to put.
 *
 * I would recommend organizing functions into separate files
 * based on what part of WooCommerce you are editing.
 * Ex. wc-shop-loop.php, wc-single-product.php
 *
 * @package JointsWP
 */

/**
 * Adds Woocommerce support.
 */
function joints_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
	// add_theme_support( 'wc-product-gallery-zoom' );
	// add_theme_support( 'wc-product-gallery-lightbox' );
	// add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'joints_add_woocommerce_support' );



/**
 * Remove deprecated WooCommerce image sizes.
 */
function joints_remove_deprecated_woocom_image_sizes() {
	remove_image_size( 'shop_catalog' );
	remove_image_size( 'shop_single' );
	remove_image_size( 'shop_thumbnail' );
}

add_action( 'init', 'joints_remove_deprecated_woocom_image_sizes' );
