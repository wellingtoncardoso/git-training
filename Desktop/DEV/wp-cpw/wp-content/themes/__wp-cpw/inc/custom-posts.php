<?php
    // timeline <strong> wp_cpw_custom_post_timeline </strong> to the init action kook
    add_action( 'init', 'wp_Cpw_custom_post_timiline' );
    function wp_Cpw_custom_post_timiline(){
        $label = array(
            'name'              => esc_html__( 'Timeline', 'wp-cpw' ),
            'singular_name'     => esc_html__( 'Timeline', 'wp-cpw' ),
            'add_new'           => esc_html__( 'Add New Timeline', 'wp-cpw' ),
            'add_new_item'      => esc_html__( 'Add New Timeline', 'wp-cpw' ),
            'edit_item'         => esc_html__( 'Edit Timeline', 'wp-cpw' ),
            'new_item'          => esc_html__( 'New Timeline', 'wp-cpw' ),
            'all_item'          => esc_html__( 'All Timelines', 'wp-cpw' ),
            'view_item'         => esc_html__( 'View Timeline', 'wp-cpw' ),
            'search_items'      => esc_html__( 'Search Timeline', 'wp-cpw' ),
            'featured_image'    => esc_html__( 'Timeline Image', 'wp-cpw' ),
            'set_featured_image'=> esc_html__( 'Add Image', 'wp-cpw' )
        );
        $args = array(
            'labels'            => $label,
            'description'       => esc_html__( 'Keep our timelines add data to the timeline', 'wp-cpw' ),
            'public'            => true,
            'menu_position'     => 5,
            'supports'          => array( 'title', 'editor' ),
            'has_archive'       => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => false,
            'has_archive'       => true,
            'query_var'         => false,
            'menu_icon'         => 'dashicons-plus'
        );
        register_post_type( 'timeline', $args );
    }

    