<?php
/**
 * The template for displaying search form
 */
 ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="search" class="input-group-field  search-field" placeholder="<?php echo esc_attr_x( 'Search', 'jointswp' ); ?>" value="<?php echo get_search_query(); ?>" name="s" aria-label="<?php echo esc_attr_x( 'Search', 'jointswp' ); ?>" />
		<div class="input-group-button">
			<button class="button" type="submit"><i class="fas fa-search" aria-hidden="true"></i><span class="show-for-sr">Search</span></button>
		</div>
	</div>
</form>
