<?php
    //create news sidebar
    add_action( 'widgets_init', 'wp_cpw_widgets' );
    function wp_cpw_widgets(){
        register_sidebar(
            array(
                'name'          => esc_html__( 'Rodapé | Colunas 01', 'wp-cpw' ),
                'id'            => 'column-1-footer',
                'description'   => esc_html__( 'Footer firts column', 'wp-cpw' ),
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            )
        );
        register_sidebar(
            array(
                'name'          => esc_html__( 'Rodapé | Colunas 02', 'wp-cpw' ),
                'id'            => 'column-2-footer',
                'description'   => esc_html__( 'Footer second column', 'wp-cpw' ),
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            )
        );
        register_sidebar(
            array(
                'name'          => esc_html__( 'Rodapé | Colunas 03', 'wp-cpw' ),
                'id'            => 'column-3-footer',
                'description'   => esc_html__( 'Footer third column', 'wp-cpw' ),
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            )
        );
        register_sidebar(
            array(
                'name'          => esc_html__( 'Blog ', 'wp-cpw' ),
                'id'            => 'blog',
                'description'   => esc_html__( 'Blog column', 'wp-cpw' ),
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>'
            )
        );
    }