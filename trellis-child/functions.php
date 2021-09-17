<?php
function mv_trellis_child_set_options() {
    $child_version = '0.0.1';
    \Mediavine\Trellis\Options::set_multiple(
        [
            'child_name'    => 'trellis-child',
            'child_version' => $child_version,
            'child_css'     => get_stylesheet_directory_uri() . "/assets/dist/css/main.$child_version.css",
            'child_js'      => get_stylesheet_directory_uri() . "/assets/dist/js/main.$child_version.js",
        ]
    );
  }
  add_action( 'mv_trellis_parent_loaded', 'mv_trellis_child_set_options' );
  
 /* add_filter( 'mv_trellis_enqueue_main_style', '__return_false' );*/

 