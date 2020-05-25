<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package JointsWP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header content-container">
		<h1 class="page-title" itemprop="name"><?php the_title(); ?></h1>
	</header>

	<div class="entry-content content-container" itemprop="text">
		<?php the_content(); ?>
	</div>

</article>
