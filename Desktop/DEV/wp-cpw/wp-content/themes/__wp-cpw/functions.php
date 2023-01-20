<?php

//file functions add
require get_template_directory() .'/inc/custom-posts.php';
//file widgets
require get_template_directory() .'/inc/widgets.php';

function wp_cpw_load_scripts(){
	// style
  wp_enqueue_style( 'wp-cpw-style', get_stylesheet_uri(), array(), '1.0', 'all' );
  // wp_enqueue_style( 'wp-cpw-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() .'/style.css' ), 'all' );
  wp_enqueue_style( 'wp-cpw-app', get_stylesheet_directory_uri() .'/dist/app.css', array( 'wp-cpw-style' ), '1.0', 'all' );

  // script
  wp_enqueue_script( 'jquery-min', get_template_directory_uri() .'/src/js/jquery.min.js', array(), true );
  wp_enqueue_script( 'wp-cpw-app', get_template_directory_uri() .'/dist/app.js', array( 'jquery-min' ), true );  

  //external
  wp_enqueue_style( 'wp-cpw-font_awesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' , array( 'wp-cpw-app' ), '6.2.0', 'all' );
}

add_action('wp_enqueue_scripts', 'wp_cpw_load_scripts');

function wp_cpw_config(){
  $textdomain = 'wp-cpw';
  load_theme_textdomain( $textdomain, get_template_directory() .'/languages/' );

  //register menu add
  register_nav_menus(
    array('wp_cpw_main_menu' => esc_html__( 'Menu Main', 'wp-cpw' ))
  );

  add_theme_support( 'post-thumbnails' );
  add_image_size( 'perfil', 520, 520 );
  
  add_theme_support('automatic-feed-links' );
  add_theme_support('title-tag');
  add_theme_support( 'html5', array(
    'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'    
  ) );

}
add_action( 'after_setup_theme', 'wp_cpw_config', 0 );

// if the wp version is less than 5.2 we will create the wp_body_open function
if( ! function_exists( 'wp_body_open' ) ){
  function wp_body_open(){
    do_action( 'wp_body_open' );
  }
}