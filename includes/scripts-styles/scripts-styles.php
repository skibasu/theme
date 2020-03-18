<?php
function my_scripts() {

    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri(). '/_dist/css/style.min.css', array() );
   
    wp_deregister_script( 'jquery' );

    wp_register_script( 'jquery', get_template_directory_uri() . '/_dist/js/vendors/jQuery/jquery-3.4.1.min.js', array(), '3.4.1', true );

    // wp_enqueue_script( 'gsap', get_template_directory_uri() . '/_dist/js/vendors/gsap/gsap.min.js', array('jquery'), '1.0', true );

    // wp_enqueue_script( 'amiation-plugin', get_template_directory_uri() . '/_dist/js/vendors/scrollMagic/animation.gsap.js', array('scrollMagic'), '1.0', true );

    // wp_enqueue_script( 'scrollMagic', get_template_directory_uri() . '/_dist/js/vendors/scrollMagic/ScrollMagic.min.js', array(), '1.0', true );

    wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/_dist/js/app.min.js', array('jquery'), '1.0', true );

}
    
add_action( 'wp_enqueue_scripts', 'my_scripts' );

