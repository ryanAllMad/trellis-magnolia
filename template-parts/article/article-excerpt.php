<?php
add_filter( 'mv_trellis_image_orientation', 'mvt_adjust_excerpt_image_orientation_res' );
add_filter( 'mv_trellis_image_sizes_attribute', 'mvt_adjust_excerpt_image_sizes' );

$featured_photo = mv_trellis_get_featured_image_tag(
	get_the_ID(),
	[ 'style' => 'display: block;' ],
	false
);

remove_filter( 'mv_trellis_image_orientation', 'mvt_adjust_excerpt_image_orientation_res' );
remove_filter( 'mv_trellis_image_sizes_attribute', 'mvt_adjust_excerpt_image_sizes' );
?>

<article class="article excerpt">
	<div class="excerpt-container">
		<?php mvt_entry_top(); ?>

		<?php if ( ! empty( $featured_photo ) ) { ?>
			<div class="excerpt-photo">
				<a href="<?php the_permalink(); ?>" class="excerpt-link" title="<?php the_title(); ?>"><?php echo wp_kses( $featured_photo, mv_trellis_get_wp_kses_post_with_images() ); ?></a>
			</div>
		<?php } ?>

		<div class="excerpt-post-data">
			<h2 class="excerpt-title"><a href="<?php the_permalink(); ?>" class="excerpt-link"><?php the_title(); ?></a></h2>
			<div class="excerpt-excerpt">
				<?php
				mvt_entry_excerpt_before();
				the_excerpt();
				mvt_entry_excerpt_after();
				?>
			</div>
            <!--remove read more button for accessability-->
		</div>
		<?php mvt_entry_bottom(); ?>
	</div>
</article>
