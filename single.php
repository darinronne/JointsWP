<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<div class="site-content" id="content" role="main">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">

			<main class="cell small-12 medium-9" role="main">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : ?>
						<?php the_post(); ?>

						<?php get_template_part( 'parts/loop', 'single' ); ?>

					<?php endwhile; ?>
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
