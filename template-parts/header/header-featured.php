<?php
$featured_post_id = mv_trellis_get_featured_post();

add_filter( 'mv_trellis_image_orientation', 'mvt_adjust_featured_post_image_orientation_res' );
add_filter( 'mv_trellis_image_sizes_attribute', 'mvt_adjust_featured_post_image_sizes' );

$featured_photo = mv_trellis_get_featured_image_tag( $featured_post_id, [ 'style' => 'display: block;' ], false );

remove_filter( 'mv_trellis_image_orientation', 'mvt_adjust_featured_post_image_orientation_res' );
remove_filter( 'mv_trellis_image_sizes_attribute', 'mvt_adjust_featured_post_image_sizes' );
?>

	<article class="featured-hero excerpt">
		<div class="featured-hero-container excerpt-container wrapper wrapper-featured-hero">

			<?php if ( ! empty( $featured_photo ) ) { ?>
				<div class="featured-hero-photo excerpt-photo">
					<a href="<?php the_permalink( $featured_post_id ); ?>" class="featured-hero-link excerpt-link" title="<?php esc_attr( get_the_title( $featured_post_id ) ); ?>"><?php echo wp_kses( $featured_photo, mv_trellis_get_wp_kses_post_with_images() ); ?></a>
				</div>
			<?php } ?>

			<div class="featured-hero-post-data excerpt-post-data">
				<h1 class="featured-hero-title excerpt-title">
					<a href="<?php the_permalink( $featured_post_id ); ?>" class="featured-hero-link excerpt-link"><?php echo wp_kses_post( get_the_title( $featured_post_id ) ); ?></a>
				</h1>
				<div class="featured-hero-excerpt excerpt-excerpt"><?php echo wp_kses_post( apply_filters( 'the_excerpt', get_the_excerpt( $featured_post_id ) ) ); ?></div>
			</div>
		</div>
	</article>
<?php
