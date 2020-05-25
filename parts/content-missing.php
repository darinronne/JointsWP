<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package JointsWP
 */

?>

<div class="post-not-found">

	<?php if ( is_search() ) : ?>

		<header class="article-header">
			<h1><?php esc_html_e( 'Sorry, No Results.', 'jointswp' ); ?></h1>
		</header>

		<div class="entry-content">
			<p><?php esc_html_e( 'Try your search again.', 'jointswp' ); ?></p>
			<p><?php get_search_form(); ?></p>
		</div>

	<?php else : ?>

		<h2><?php esc_html_e( 'Post Not Found', 'jointswp' ); ?></h2>
		<p><?php esc_html_e( 'Uh Oh. Something is missing. Try double checking things.', 'jointswp' ); ?></p>
		<p><?php get_search_form(); ?></p>

	<?php endif; ?>

</div>
