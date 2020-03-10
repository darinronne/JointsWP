<?php
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header(); ?>

<div class="site-content" id="content">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">

			<main class="cell small-12 medium-9" role="main">
				<header>
					<h1 class="archive-title"><?php esc_html_e( 'Search Results for:', 'jointswp' ); ?> <?php echo esc_attr( get_search_query() ); ?></h1>
				</header>

				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : ?>
						<?php the_post(); ?>

						<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/loop', 'archive' ); ?>

					<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>
			</main>

			<div class="cell small-12 medium-3">
				<?php get_sidebar(); ?>
			</div>

		</div>
	</div>
</div>

<?php get_footer(); ?>
