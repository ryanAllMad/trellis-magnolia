<?php
mv_trellis_get_template_part( 'template-parts/header/header-content' );
?>
<div class="posts-wrapper">
<?php
if ( have_posts() ) {
	mvt_content_while_before();

	$item_count = 1;
	while ( have_posts() ) {
		the_post();

		mvt_entry_before();

		// Only display full article if singular
		mv_trellis_get_template_part( 'template-parts/article/article-excerpt' );

		// Pass that count to the after hook for potential Mediavine ad placement
		$args = [
			'count' => $item_count,
		];

		mvt_entry_after( $args );

		$item_count++;
	}
?>
</div>
<?php
	mvt_content_while_after();
} else {
	// No content is found
	mvt_no_content_top();
	mv_trellis_get_template_part( 'template-parts/content/content-none' );
	mvt_no_content_bottom();
}

mvt_sidebars_before();
get_sidebar();
mvt_sidebars_after();
