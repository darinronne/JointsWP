<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

<main class="site-content" id="content" role="main">

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php get_template_part( 'parts/loop', 'page' ); ?>

		<?php endwhile; ?>
	<?php endif; ?>

</main>

<?php get_footer(); ?>
