<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.png">
			<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
		<?php endif; ?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<div class="off-canvas-content" data-off-canvas-content>

				<a class="skipto" href="#content">Skip to main content</a>

				<header class="site-header" role="banner">
					<div class="grid-container">
						<div class="grid-x grid-margin-x align-middle align-justify">
							<div class="cell shrink">
								<a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img class="hide-for-sr" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>" width="160" height="25" aria-hidden="true">
									<h1 class="show-for-sr"><?php bloginfo( 'name' ); ?></h1>
								</a>
							</div>
							<nav class="cell shrink primary-menu show-for-large" role="navigation">
								<h2 class="show-for-sr" id="primary-menu-heading"><?php esc_html_e( 'Website Navigation', 'jointswp' ); ?></h2>
								<?php joints_top_nav(); ?>
							</nav>
							<div class="cell shrink hide-for-large">
								<button class="site-header__menu-button" type="button" data-open="off-canvas"><span><?php echo esc_attr_x( 'MENU', 'jointswp' ); ?></span><i class="menu-icon"></i></button>
							</div>
						</div>
					</div>

				</header><!-- /.site-header -->
