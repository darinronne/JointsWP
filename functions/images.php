<?php
/**
 * Define theme image sizes.
 */

// No cropping.
add_image_size( 'small', 320, 320 );
update_option( 'medium_size_w', 640 ); // Change medium size.
update_option( 'medium_size_h', 640 ); // Change medium size.
update_option( 'large_size_w', 1024 ); // Change large size.
update_option( 'large_size_h', 1024 ); // Change large size.
add_image_size( 'xlarge', 1200, 1200 );
add_image_size( 'xxlarge', 1440, 1440 );
add_image_size( 'xxxlarge', 1920, 1920 );

// 4:3 ratio, cropped.
// add_image_size( 'small-4x3', 320, 320 / 1.33333, true );
// add_image_size( 'medium-4x3', 640, 640 / 1.33333, true );
// add_image_size( 'large-4x3', 1024, 1024 / 1.33333, true );
// add_image_size( 'xlarge-4x3', 1200, 1200 / 1.33333, true );
// add_image_size( 'xxlarge-4x3', 1440, 1440 / 1.33333, true );
// add_image_size( 'xxxlarge-4x3', 1920, 1920 / 1.33333, true );

// 1:1 ratio, cropped.
// add_image_size( 'small-square', 320, 320, true );
// add_image_size( 'medium-square', 640, 640, true );
// add_image_size( 'large-square', 1024, 1024, true );
// add_image_size( 'xlarge-square', 1200, 1200, true );
// add_image_size( 'xxlarge-square', 1440, 1440, true );
// add_image_size( 'xxxlarge-square', 1920, 1920, true );


add_filter( 'image_size_names_choose', 'joints_add_custom_image_sizes' );
function joints_add_custom_image_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'small'  => __( 'Small' ),
		'xlarge' => __( 'X-Large' ),
		// 'small-4x3'  => __( '4X3 Small' ),
		// 'medium-4x3' => __( '4X3 Medium' ),
		// 'large-4x3'  => __( '4X3 Large' ),
	) );
}


// If hard-cropping, upscale image first so that it will be cropped to the correct ratio.
add_filter( 'image_resize_dimensions', 'joints_thumbnail_upscale', 10, 6 );
function joints_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ) {
	if ( ! $crop ) { // let the WordPress default function handle this.
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
