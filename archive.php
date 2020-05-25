<?php
/**
 * Displays archive pages if a speicifc template is not set.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JointsWP
 */

get_header(); ?>

<div class="site-content" id="content">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">

			<main class="cell small-12 medium-9" role="main">
				<header>
					<h1 class="page-title"><?php the_archive_title(); ?></h1>
					<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
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
