<?php
    // hook wp_cpw_custpm_post_Treatments to the init action hooks
    add_action( 'init', 'wp_cpw_custom_post_treatments' );
    // the custom function to register a Treatments post type
    function wp_cpw_custom_post_treatments(){
        $label = array(
            'name'                  => esc_html__( 'Tratamentos', 'wp-cpw' ),
            'singular_name'         => esc_html__( 'Treatments', 'wp-cpw' ),
            'add_new'               => esc_html__( 'Add new Treatments', 'wp-cpw' ),
            'add_new_item'          => esc_html__( 'Add new Treatments', 'wp-cpw' ),
            'edit_item'             => esc_html__( 'Edit Treatments', 'wp-cpw' ),
            'new_item'              => esc_html__( 'New Treatments', 'wp-cpw' ),
            'all_item'              => esc_html__( 'All Treatments', 'wp-cpw' ),
            'view_item'             => esc_html__( 'View Treatments', 'wp-cpw' ),
            'search_items'          => esc_html__( 'Search Treatments', 'wp-cpw' ),
            'featured_image'        => esc_html__( 'Treatments image', 'wp-cpw' ),
            'set_featured_image'    => esc_html__( 'Add image', 'wp-cpw' )
        );
        $args = array(
            'labels'                => $label,
            'description'           => esc_html__( 'Keep our Treatments and Treatments data', 'wp-cpw' ),
            'public'                => true,
            'menu_position'         => 10,
            'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
            'has_archive'           => true,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'has_archive'           => true,
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'tratamentos' ),
            'menu_icon'             => 'dashicons-plus'
        );
        register_post_type( 'treatments', $args );
    }
