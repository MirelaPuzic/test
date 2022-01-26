<?php

function DealerstPostType() {
register_post_type( 'dealers',
    array(
      'labels' => array(
        'name' => __( 'Dealers' ),
        'singular_name' => __( 'Dealer' )
      ),
      'public' => true,
      'has_archive' => 'themes',
      'rewrite' => array('slug' => 'dealers'),
      'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
      'description' => 'Custom Theme Posts',
      'show_ui' => true,
      'show_in_menu' => true,
    )
);
}
add_action( 'init', 'DealersPostType' );
 ?>
