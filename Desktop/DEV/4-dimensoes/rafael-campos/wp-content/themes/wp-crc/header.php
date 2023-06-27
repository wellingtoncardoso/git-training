<!DOCTYPE html>
<html <?php language_attributes();?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- add function wp_body_open() -->
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <main id="primary" class="site-main">
            <header>
                <div id="site-main" class="navigation">
                    <div class="row gap-1 justify-between align-items-center">
                        <div class="site-main__logo">
                            <?php 
                                if( has_custom_logo() ){
                                    the_custom_logo();
                                }else{?>
                                <a href="<?php esc_attr_e( esc_url( home_url( '/' ) ) ) ?>"><?php bloginfo( 'name' ); ?></a>
                            <?php }?>
                        </div>
                        <div class="site-main__nav">                 
                            <nav class="nav-main">
                                <?php 
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'wp_cpw_main_menu',
                                            'depth' => 2
                                        )
                                    );
                                ?>
                            </nav>
                        </div>
                        <div class="site-main__redes-sociais display-flex justify-between align-items-center gap-1">
                            <div>
                                <nav class="redes-sociais">
                                    <ul>
                                        <?php 
                                        if( have_rows( 'add_rede', 'option' ) ):
                                            while( have_rows( 'add_rede', 'option' ) ): the_row();?>
                                                <li>
                                                    <a href="<?php esc_html_e( get_sub_field( 'link_rede' ) ); ?>" target="_blank" rel="nofollow">
                                                        <i class="<?php esc_html_e( get_sub_field( 'icon_rede' ) ); ?> text-primary" style="font-size: 22px;"></i>
                                                    </a>
                                                </li>
                                            <?php endwhile; 
                                        endif; ?>
                                    </ul>
                                </nav>
                            </div>
                            <div class="divider-vertical"></div>
                            <div>
                                <button class="btn-outlined-primary btn-primary-hover text-primary btn_toggle">
                                    <div class="display-flex align-items-center gap-0">
                                        <i class="fa fa-phone" style="font-size: 16px; margin-right:5px"></i> <span> <?php esc_html_e( the_field( 'number_phone', 'option' ) ); ?></span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header -->
