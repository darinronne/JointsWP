<?php
/**
 * Image Sizes
 *
 * @package JointsWP
 */

/**
 * Remove uneeded Intermediate image sizes.
 *
 * @param array $image_sizes An array of intermediate image size names. Defaults are 'thumbnail', 'medium', 'medium_large', 'large'.
 */
function joints_unset_intermediate_image_sizes( $image_sizes ) {
	$sizes_to_remove = array(
		array_search( 'medium_large', $image_sizes, true ),
		array_search( '1536x1536', $image_sizes, true ),
		array_search( '2048x2048', $image_sizes, true ),
	);
	foreach ( $sizes_to_remove as $size_key ) {
		if ( false === $size_key ) {
			continue;
		}
		unset( $image_sizes[ $size_key ] );
	}
	return $image_sizes;
}

add_filter( 'intermediate_image_sizes', 'joints_unset_intermediate_image_sizes', 999 );



/**
 * Defining image sizes.
 */
function joints_image_sizes() {
	// No cropping.
	add_image_size( 'small', 320, 320 );
	update_option( 'medium_size_w', 640 ); // Change medium size.
	update_option( 'medium_size_h', 640 ); // Change medium size.
	update_option( 'large_size_w', 1024 ); // Change large size.
	update_option( 'large_size_h', 1024 ); // Change large size.
	add_image_size( 'xlarge', 1200, 1200 );
	add_image_size( 'xxlarge', 1440, 1440 );
	add_image_size( 'xxxlarge', 1920, 1920 );

	// 4:3, cropped.
	// add_image_size( 'small-4x3', 320, 320 / 1.33333, true );
	// add_image_size( 'medium-4x3', 640, 640 / 1.33333, true );
	// add_image_size( 'large-4x3', 1024, 1024 / 1.33333, true );
	// add_image_size( 'xlarge-4x3', 1200, 1200 / 1.33333, true );
	// add_image_size( 'xxlarge-4x3', 1440, 1440 / 1.33333, true );
	// add_image_size( 'xxxlarge-4x3', 1920, 1920 / 1.33333, true );

	// Square, cropped.
	// add_image_size( 'small-square', 320, 320, true );
	// add_image_size( 'medium-square', 640, 640, true );
	// add_image_size( 'large-square', 1024, 1024, true );
	// add_image_size( 'xlarge-square', 1200, 1200, true );
	// add_image_size( 'xxlarge-square', 1440, 1440, true );
	// add_image_size( 'xxxlarge-square', 1920, 1920, true );
}

add_action( 'after_setup_theme', 'joints_image_sizes' );



/**
 * Add image sizes to the editor's "Image size" select options.
 *
 * @param array $sizes Array of image size labels keyed by their name. Default values include 'Thumbnail', 'Medium', 'Large', and 'Full Size'.
 */
function joints_add_custom_image_sizes_to_admin( $sizes ) {
	return array_merge( $sizes, array(
		'small'  => __( 'Small', 'jointswp' ),
		'xlarge' => __( 'X-Large', 'jointswp' ),
		// 'small-4x3'  => __( '4X3 Small', 'jointswp' ),
		// 'medium-4x3' => __( '4X3 Medium', 'jointswp' ),
		// 'large-4x3'  => __( '4X3 Large', 'jointswp' ),
	) );
}

add_filter( 'image_size_names_choose', 'joints_add_custom_image_sizes_to_admin' );



/**
 * If hard-cropping, upscale image first so that it will be cropped to the correct ratio.
 *
 * @param int  $default IDK what this is, but breaks without it.
 * @param int  $orig_w Original width in pixels.
 * @param int  $orig_h Original height in pixels.
 * @param int  $new_w New width in pixels.
 * @param int  $new_h New height in pixels.
 * @param bool $crop Whether to crop image to specified width and height or resize. An array can specify positioning of the crop area.
 */
function joints_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ) {
	if ( ! $crop ) {
		return null;
	}

	$aspect_ratio = $orig_w / $orig_h;
	$size_ratio   = max( $new_w / $orig_w, $new_h / $orig_h );

	$crop_w = round( $new_w / $size_ratio );
	$crop_h = round( $new_h / $size_ratio );

	$s_x = floor( ( $orig_w - $crop_w ) / 2 );
	$s_y = floor( ( $orig_h - $crop_h ) / 2 );

	return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}

add_filter( 'image_resize_dimensions', 'joints_thumbnail_upscale', 10, 6 );
