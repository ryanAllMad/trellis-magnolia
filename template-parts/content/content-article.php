<?php
if ( have_posts() ) {
	mvt_content_while_before();

	$item_count = 1;
	while ( have_posts() ) {
		the_post();

		mvt_entry_before();

		if ( \Mediavine\Trellis\Settings::read_value( 'display_post_featured_image', false ) ) {
			mv_trellis_get_featured_image_tag(
				get_the_ID(),
				[
					'class' => [ 'article-featured-img', 'aligncenter' ],
					'alt'   => get_the_title(),
				],
				true
			);
		}

		?>
<!-- Main Content Section -->
<div class="content">
<div class="wrapper wrapper-content">
<?php mvt_content_before(); ?>
<!--move featured image above article container-->
<main id="content" class="content-container">
<?php mvt_content_top(); ?>
		<article id="post-<?php the_id(); ?>" <?php post_class( 'article-post article' ); ?>>

			<?php
			mvt_entry_top();
			mv_trellis_get_template_part( 'template-parts/header/header-content' );

			mvt_aside_before_entry_content();
			?>

			<div <?php mv_trellis_entry_content_class( 'entry-content' ); ?>>
				<?php
				mvt_entry_content_before();
				the_content();
				mvt_entry_content_after();
				?>
			</div>
			<?php mvt_aside_after_entry_content(); ?>
			<footer class="entry-footer">
				<?php
					mvt_trellis_entry_footer_top();
					mv_trellis_get_template_part( 'template-parts/article/article-meta-footer' );
					mvt_trellis_entry_footer_bottom();
				?>
			</footer><!-- .entry-footer -->
			<?php mvt_entry_bottom(); ?>
		</article><!--end content-article.php-->
		<?php
		mv_trellis_get_template_part( 'template-parts/article/article-navigation' );

		// Pass that count to the after hook for potential Mediavine ad placement
		$args = [
			'count' => $item_count,
		];

		mvt_entry_after( $args );

		$item_count++;
	}

	mvt_content_while_after();
} else {
	// No content is found
	mvt_no_content_top();
	mv_trellis_get_template_part( 'template-parts/content/content-none' );
	mvt_no_content_bottom();
}
