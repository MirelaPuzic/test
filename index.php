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
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Test</title>
  </head>
 <body>

 <?php
 //Table for data
 CREATE TABLE `locations` (
`id` INT(10) NOT NULL AUTO_INCREMENT,
`title` VARCHAR(150) NOT NULL,
`address` VARCHAR(255) NOT NULL,
`lat` FLOAT(10,6) NOT NULL,
`lon` FLOAT(10,6) NOT NULL,
PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB

INSERT INTO `locations` (`id`, `title`, `address`, `lat`, `lon`, )
 VALUES (1, '3rd AVE CABINET & TILE INC.', '4306 3rd AVE  BROOKLYN NY 11232',
  40.6517653, -74.0110184 );
INSERT INTO `locations` (`id`, `title`, `address`, `lat`, `lon`, )
  VALUES (2, 'A & R KITCHEN & BATH SHOWROOM INC.', '881 BEDFORD AVE.  BROOKLYN NY 11205',
    40.6936857, -73.955752 );

    //Create a Simple map
    </body>


  </html>
