<?php get_header(); ?>

				<?php

				if ( is_singular() ) {
					mv_trellis_get_template_part( 'template-parts/content/content-article' );
				} else {
					mv_trellis_get_template_part( 'template-parts/content/content' );
				}
				mvt_content_bottom();
				?>
			</main><!--index main-->
			<?php
				mvt_content_after();
				mvt_sidebars_before();
				get_sidebar();
				mvt_sidebars_after();
			?>
		</div>
	</div>

<?php get_footer(); ?>
