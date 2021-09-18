<?php
function mv_trellis_child_set_options() {
    $child_version = '0.0.2';

    \Mediavine\Trellis\Options::set_multiple(
        [
            'child_name'    => 'trellis-child',
            'child_version' => $child_version,
            'child_css'     => get_stylesheet_directory_uri() . "/assets/dist/css/main.$child_version.css",
            'child_js'      => get_stylesheet_directory_uri() . "/assets/dist/js/main.$child_version.js",
            'widget_areas'        => [
                'sidebar'       => [
                    'name' => __( 'Primary Sidebar', 'mediavine' ),
                    'desc' => __( 'The primary sidebar', 'mediavine' ),
                ],
                'top-footer'   => [
                    'name' => __( 'Top Footer Area', 'mediavine' ),
                    'desc' => __( 'The top footer widget area', 'mediavine' ),
                ],
                'mid-footer'  => [
                    'name' => __( 'Mid Footer Area', 'mediavine' ),
                    'desc' => __( 'The bottom footer widget area', 'mediavine' ),
                ],
            ],
        ]
    );
  }
  add_action( 'mv_trellis_parent_loaded', 'mv_trellis_child_set_options' );
  
/* add_filter( 'mv_trellis_enqueue_main_style', '__return_false' );*/

 