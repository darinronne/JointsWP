<?php
/**
 * Template part for displaying a single post
 *
 * @package JointsWP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</header>

	<div class="entry-content" itemprop="text">
		<?php the_post_thumbnail( 'full' ); ?>
		<?php the_content(); ?>
	</div>

	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after' => '</div>' ) ); ?>
		<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', '' ); ?></p>
	</footer>

	<?php comments_template(); ?>

</article>
