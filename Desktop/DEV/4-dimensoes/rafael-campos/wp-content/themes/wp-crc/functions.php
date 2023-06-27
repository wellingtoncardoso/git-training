<?php

// file functions add
require get_template_directory() .'/inc/custom-posts.php';
// file customzer
require get_template_directory() .'/inc/customizer.php';
// file widgets
require get_template_directory() .'/inc/widgets.php';

// function to add new scripts
function wp_cpw_load_scripts(){
    //style
    wp_enqueue_style( 'wp-cpw-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_enqueue_style( 'wp-cpw-app', get_stylesheet_directory_uri() . '/dist/app.css', array( 'wp-cpw-style' ), '1.0', 'all' );

    wp_enqueue_style( 'wp-cpw-font_awesomen', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array( 'wp-cpw-app' ), '6.2.0', 'all' );

    // slick
    wp_enqueue_style( 'wp-cpw-slick-theme', get_stylesheet_directory_uri(). '/lib/slick/slick-theme.css', array( 'wp-cpw-app' ), '1.0', 'all' );
    wp_enqueue_style( 'wp-cpw-slick', get_stylesheet_directory_uri(). '/lib/slick/slick.css', array( 'wp-cpw-app' ), '1.0', 'all' );
    wp_enqueue_script( 'wp-cpw-slick', get_stylesheet_directory_uri(). '/lib/slick/slick.min.js', array( 'jquery' ), '1.0', true );
        
    //scripts
    wp_enqueue_script( 'wp-cpw-jquery-min', get_stylesheet_directory_uri(). '/assets/js/jquery.min.js', array( 'jquery' ), true );
    wp_enqueue_script( 'wp-cpw-app', get_stylesheet_directory_uri(). '/dist/app.js', array( 'jquery' ), true );

}
add_action( 'wp_enqueue_scripts', 'wp_cpw_load_scripts', 0 );


//
//this is theme support setting 
//
function wp_cpw_config(){

    // register menu
    register_nav_menus(
        array(
            'wp_cpw_main_menu'  => esc_html__( 'Main menu', 'wp-cpw' ),
            'wp_cpw_footer_menu'=> esc_html__( 'Footer menu', 'wp-cpw' )
        )
    );

    add_theme_support( 'post-thumbnails' );
    //logo header
    add_theme_support(
        'custom-logo', 
        array(
            'width'         => 280,
            'height'        => 160,
            'flex-height'   => true,
            'flex-width'    => true
        )
    );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', 
        array( 
            'comment-list', 
            'comment-form', 
            'search-form', 
            'gallery', 
            'caption', 
            'style', 
            'script'
        ) 
    );

    add_theme_support( 'automatic-feed-links' );

    // theme support gutenberg
    add_theme_support( 'title-tag' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    
}
add_action( 'after_setup_theme', 'wp_cpw_config',0 );

//excerpt
function wp_cpw_excerpt_length( $length ){
    return 25;
}
add_filter( 'excerpt_length', 'wp_cpw_excerpt_length' );

// advanced usage
if( function_exists( 'acf_add_options_page' ) ){
    acf_add_options_page(
        array(
            'page_title'    => esc_html__( 'Theme general settings','wp-cpw' ),
            'menu_title'    => esc_html__( 'Theme settings','wp-cpw' ),
            'menu_slug'     => 'theme_general',
            'capability'    => 'edit_posts',
            'position'      => 5,
            'icon_url'      => 'dashicons-admin-settings'
        )
    );
}

// if the wp version is less then 5.2 we will create the wp_body_open function
if( ! function_exists( 'wp_body_open' ) ){
    function wp_body_open(){
        do_action( 'wp_body_open' );
    }
}