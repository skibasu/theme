<?php
function activate_support() {
    add_theme_support('menus');
    add_theme_support( 'post-thumbnails' );

    register_nav_menu('primary', 'Primary navigation');
    register_nav_menu('secondary', 'Secondary navigation');
  
   
    // add_image_size( 'page-logo', 150, 80 );
    // add_image_size( 'page-logo-small', 114, 51 );
    // add_image_size( 'brand-logo', 130, 80);
    // add_image_size( 'icon', 35, 35 );
    // add_image_size( 'icon-medium', 50, 50 );
    // add_image_size( 'title-icon', 70, 70); 
    // add_image_size( 'services-logo', 250, 150 );
    // add_image_size( 'wordpress-pro-image', 592, 900 );
    // add_image_size( 'hosting-2-bgr', 1072, 893 );
    // add_image_size( 'card-bgr', 220, 220);
    // add_image_size( 'banner-icon', 200, 200);
}

add_action('init', 'activate_support');

