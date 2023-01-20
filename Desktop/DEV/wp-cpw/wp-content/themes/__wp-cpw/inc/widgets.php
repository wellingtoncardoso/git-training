<?php
  // create news sidebar
  add_action( 'widgets_init', 'wp_cpw_sidebars' );
  function wp_cpw_sidebars(){
    //footer
    register_sidebar(
      array(
        'name'          => esc_html__( 'Footer 1 Columns', 'wp-cpw' ),
        'id'            => 'footer-1-column',
        'description'   => esc_html__( 'Footer First Column', 'wp-cpw' ),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'befero_title'  => '<h4 class="widget-title text-white mt-2 mb-2">',
        'after_title'   => '</h4>',
      )
    );
    register_sidebar(
      array(
        'name'          => esc_html__( 'Footer 2 Columns', 'wp-cpw' ),
        'id'            => 'footer-2-column',
        'description'   => esc_html__( 'Footer Secondary Column', 'wp-cpw' ),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'befero_title'  => '<h4 class="widget-title text-white mt-2 mb-2">',
        'after_title'   => '</h4>',
      )
    );
    
    //aside single
    register_sidebar(
      array(
        'name'          => esc_html__( 'Aside page single', 'wp-cpw' ),
        'id'            => 'single',
        'description'   => esc_html__( 'Page single', 'wp-cpw' ),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'befero_title'  => '<h4 class="widget-title text-white mt-2 mb-2">',
        'after_title'   => '</h4>',
      )
    );
  }