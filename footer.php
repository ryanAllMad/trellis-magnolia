<?php mvt_footer_before(); ?>
		<footer class="footer">
			<div class="wrapper wrapper-footer">
				<div class="footer-container">
				<div class="top-footer-widget-area">
				<?php mv_trellis_output_sidebar( 'top-footer' ); ?>
				<!--
					place widget-areas in Options Multiple of class init.php file to control widgget areas
			
			/**
			 * Set up standard variables on the site.
			 *
			 * These can be overridden with a Child theme by setting the
			 * options in an action using the `mv_trellis_parent_loaded` hook
			 */
			Options::set_multiple(
				-->
				</div><!--top footer widget area-->
				<div class="bottom-footer-widget-area">
				<?php mv_trellis_output_sidebar( 'mid-footer' ); ?>
				</div><!--bottom footer widget area-->
				</div><!--footer container-->
				<?php
				mvt_footer_bottom();
				?>
			</div>
		</footer>
		<?php
		mvt_footer_after();
		mvt_body_bottom();
		wp_footer();
		?>
	</body>
</html>
