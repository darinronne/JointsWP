<?php

// Adding WP Functions & Theme Support.
function joints_theme_support() {

	// Add Woocommerce support.
	// add_theme_support( 'woocommerce' );
	// add_theme_support( 'wc-product-gallery-zoom' );
	// add_theme_support( 'wc-product-gallery-lightbox' );
	// add_theme_support( 'wc-product-gallery-slider' );

	// Gutenberg.
	add_theme_support( 'align-wide' );
	add_theme_support( 'disable-custom-colors' );
	add_theme_support( 'responsive-embeds' );

	add_theme_support(
		'editor-color-palette', array(
			array(
				'name'  => esc_html__( 'Denim', 'jointswp' ),
				'slug'  => 'denim',
				'color' => '#1779ba',
			),
			array(
				'name'  => esc_html__( 'White', 'jointswp' ),
				'slug'  => 'white',
				'color' => '#FFFFFF',
			),
		)
	);

	// Add WP Thumbnail Support.
	add_theme_support( 'post-thumbnails' );

	// Default thumbnail size.
	set_post_thumbnail_size( 125, 125, true );

	// Add RSS Support.
	add_theme_support( 'automatic-feed-links' );

	// Add Support for WP Controlled Title Tag.
	add_theme_support( 'title-tag' );

	// Add HTML5 Support.
	add_theme_support( 'html5',
		array(
			'comment-list',
			'comment-form',
			'search-form',
		)
	);

	// Adding post format support.
	add_theme_support( 'post-formats',
		array(
			'aside', // title less blurb.
			'gallery', // gallery of images.
			'link', // quick link to other site.
			'image', // an image.
			'quote', // a quick quote.
			'status', // a Facebook like status update.
			'video', // video.
			'audio', // audio.
			'chat', // chat transcript.
		)
	);

	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1200 );

} /* end theme support */

add_action( 'after_setup_theme', 'joints_theme_support' );
