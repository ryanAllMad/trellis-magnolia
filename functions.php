<?php
/* why no work?
if( version_compare( \Mediavine\Trellis\Options::get('version'), '1.0.0', '<' ) ) {
    // Do something if Trellis code is less than 1.0.0
    mv_trellis_admin_error_notice( "Your parent theme is in Beta", 'mediavine' );
  }
  */
function mv_trellis_child_set_options() {
    $child_version = '0.1.6';

    \Mediavine\Trellis\Options::set_multiple(
        [
            'child_name'    => 'trellis-child',
            'child_version' => $child_version,
            'child_css'     => get_stylesheet_directory_uri() . "/assets/dist/css/main.$child_version.css",
            'child_js'      => get_stylesheet_directory_uri() . "/assets/dist/js/main.$child_version.js",
            'custom_image_sizes'  => [
                '1x1'  => [
                    'high'     => [
                        'width'   => '720',
                        'height'  => '720',
                        'crop'    => true,
                        'default' => true,
                        'name'    => __( 'Trellis: Square', 'mediavine' ),
                    ],
                    'med_high' => [
                        'width'  => '480',
                        'height' => '480',
                        'crop'   => true,
                    ],
                    'med'      => [
                        'width'  => '320',
                        'height' => '320',
                        'crop'   => true,
                    ],
                    'low'      => [
                        'width'  => '200',
                        'height' => '200',
                        'crop'   => true,
                    ],
                ],
                '3x4'  => [
                    'high' => [
                        'width'   => '540',
                        'height'  => '720',
                        'crop'    => true,
                        'default' => true,
                        'name'    => __( 'Trellis: 3x4', 'mediavine' ),
                    ],
                    'med'  => [
                        'width'  => '360',
                        'height' => '480',
                        'crop'   => true,
                    ],
                    'low'  => [
                        'width'  => '240',
                        'height' => '320',
                        'crop'   => true,
                    ],
                ],
                '4x3'  => [
                    'high' => [
                        'width'   => '720',
                        'height'  => '540',
                        'crop'    => true,
                        'default' => true,
                        'name'    => __( 'Trellis: 4x3', 'mediavine' ),
                    ],
                    'med'  => [
                        'width'  => '480',
                        'height' => '360',
                        'crop'   => true,
                    ],
                    'low'  => [
                        'width'  => '320',
                        'height' => '240',
                        'crop'   => true,
                    ],
                ],
                '16x9' => [
                    'high' => [
                        'width'   => '720',
                        'height'  => '405',
                        'crop'    => true,
                        'default' => true,
                        'name'    => __( 'Trellis: 16x9', 'mediavine' ),
                    ],
                    'med'  => [
                        'width'  => '480',
                        'height' => '270',
                        'crop'   => true,
                    ],
                    'low'  => [
                        'width'  => '320',
                        'height' => '180',
                        'crop'   => true,
                    ],
                ],
                '18x6' => [
                    'high' => [
                        'width'   => '1800',
                        'height'  => '600',
                        'crop'    => true,
                        'default' => true,
                        'name'    => __( 'Trellis: 18x6', 'mediavine' ),
                    ],
                    'med'  => [
                        'width'  => '720',
                        'height' => '240',
                        'crop'   => true,
                    ],
                    'low'  => [
                        'width'  => '360',
                        'height' => '120',
                        'crop'   => true,
                    ],
                ],
                'vert' => [
                    'width'  => 735,
                    'height' => 9999,
                    'name'   => __( 'Trellis: Vertical Pin', 'mediavine' ),
                    'crop'   => false,
                ],
            ],
            'srcset_sizes'        => [
                '335', // iphone
                '347', // iphone plus
                '520',
                '640',
                '768', // medium_large WP size (hopefully reducing sizes generated)
                '960', // Google PSI uses Moto G4 ((360px window - 40px pad) @ 3x DPR)
                '1080', // Google PSI uses Moto G4 (360px window @ 3x DPR)
            ],
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
/**can we add theme support for backgrounf color easily? */
  add_theme_support( 'mv_trellis_background_accent_color' );
  add_theme_support( 'mv_trellis_headings_control' );
}
add_action( 'mv_trellis_parent_loaded', 'mv_trellis_child_set_options' );

/* add_filter( 'mv_trellis_enqueue_main_style', '__return_false' );*/

 