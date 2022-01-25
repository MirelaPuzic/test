<?php
  /*Register a new post type*/

  function create_posttype() {
  register_post_type( 'wpll_dealers',
    array(
      'labels' => array(
        'name' => __( 'Dealers' ),
        'singular_name' => __( 'Dealer' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'dealers'),
    )
  );
}
add_action( 'init', 'create_posttype' );

?>
