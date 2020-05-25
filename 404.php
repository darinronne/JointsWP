<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package JointsWP
 */

get_header(); ?>

<main class="site-content" id="content" role="main">
	<article class="content-not-found">

		<header class="article-header content-container">
			<h1 class="page-title"><?php esc_html_e( 'Page Not Found', 'jointswp' ); ?></h1>
		</header>

		<div class="entry-content content-container">
			<p><?php esc_html_e( 'The page you were looking for was not found. Maybe try a site search.', 'jointswp' ); ?></p>
			<p><?php get_search_form(); ?></p>
		</div>

	</article>
</main>

<?php get_footer(); ?>
