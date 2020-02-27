<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

				<footer class="site-footer" role="contentinfo">
					<div class="grid-container">
					<div class="grid-x grid-margin-x">
						<div class="cell medium-6">
							<nav role="navigation">
								<?php joints_footer_links(); ?>
							</nav>
						</div>
						<div class="cell medium-6">
							<p class="site-footer__legal">Copyright &copy; <?php echo esc_attr( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved. <a href="<?php echo esc_url( get_permalink( get_option( 'wp_page_for_privacy_policy' ) ) ); ?>">Privacy Policy</a></p>
						</div>
					</div>
				</footer><!-- /.site-footer -->

			</div><!-- /.off-canvas-content -->

		</div><!-- /.off-canvas-wrapper -->

		<div class="breakpoint-indicator"></div>

		<?php wp_footer(); ?>

	</body>
</html>
