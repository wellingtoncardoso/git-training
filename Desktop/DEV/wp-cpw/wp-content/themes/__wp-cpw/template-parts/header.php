<header>
    <div id="sidebar-top" class="pt-2">
        <div class="container">
            <div class="row display-flex justify-end">
                <div class="checked__toggle col-12-xs col-3-sm">
                   <input type="checkbox" name="checkbox" id="checkbox">
                   <label for="checkbox" class="checked__icon text-white display-flex justify-end align-items-center">
                        <i class="fa fa-circle-half-stroke"></i> 
                        <p class="font-sm"><span><?php esc_html_e( 'Theme', 'wp-cpw' ); ?></span></p>  
                   </label>
                </div>
            </div>
        </div>
    </div>
    <nav class="navigation">
        <div class="container">
            <div class="navigation__item-logo">
                <a href="<?php echo esc_url( home_url('/') ); ?>">
                    <div class="item-logo__span family-secondary text-white display-flex justify-center align-items-center"><span>CW</span></div>
                    <div><span class="text-details family-primary">Com Ponto Web</span></div>
                </a>
            </div>
            <div>
                <div class="navbar-mobile">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'wp_cpw_main_menu',
                        'depth' => 0,
                    )
                ) ?>
            </div>
        </div>
    </nav>
</header>