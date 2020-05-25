<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/responsive-navigation/
 *
 * @package JointsWP
 */

?>

<div class="top-bar" id="main-menu">
	<div class="top-bar-left">
		<ul class="menu">
			<li><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></li>
		</ul>
	</div>
	<div class="top-bar-right">
		<?php joints_top_nav(); ?>
	</div>
</div>
