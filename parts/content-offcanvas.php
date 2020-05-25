<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 *
 * @package JointsWP
 */

?>

<div class="off-canvas position-right site-off-canvas" id="off-canvas" data-off-canvas  data-transition="overlap">
	<div class="site-off-canvas__close">
		<button class="close-button" aria-label="Close menu" type="button" data-close><span aria-hidden="true">&times;</span></button>
	</div>

	<?php joints_off_canvas_nav(); ?>

	<?php # get_search_form(); ?>

</div>
