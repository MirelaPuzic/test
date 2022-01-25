<?php
  /*Register a new post type*/

  function prefix_create_custom_post_type() {
      $args = array();
      register_post_type( 'post-type-slug' , $args );
  }
  add_action( 'init', 'create_custom_post_type' );
  function prefix_create_custom_post_type() {

    $labels = array(
        'name'          => 'Dealers',
        'singular_name' => 'Dealer'
    );

    /*
     *  post type supports
     */
    $supports = array(
        'title',        // Post title
        'editor',       // Post content
        'excerpt',      // Allows short description
        'author',       // Allows showing and choosing author
        'thumbnail',    // Allows feature images
        'comments',     // Enables comments
        'trackbacks',   // Supports trackbacks
        'revisions',    // Shows autosaved version of the posts
        'custom-fields' // Supports by custom fields
    );

    /*
     * The $args parameter holds important parameters for the custom post type
     */
    $args = array(
        'labels'              => $labels,
        'supports'            => $supports,
        'taxonomies'          => array( 'category', 'post_tag' ), /
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post'
    );

    register_post_type('dealers', $args);
}
add_action('init', 'prefix_create_custom_post_type');
?>
