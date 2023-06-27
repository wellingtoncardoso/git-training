                    <section id="redes">
                        <div class="container">
                            <div class="row pt-3 pb-3 display-flex justify-center">
                                <div class="col">
                                    <h2 class="font-xl family-secondary mb-2 text-align-center">
                                        Siga-nos no <span class="text-secondary family-bold">Instagram</span>
                                    </h2>
                                    <nav>
                                        <ul>
                                            <?php
                                                if( have_rows( 'add_rede_site', 'option' ) ):
                                                    while( have_rows( 'add_rede_site', 'option' ) ):the_row();?>
                                                        <li>
                                                            <a href="<?php esc_html_e( get_sub_field( 'link_rede', 'option' ) ); ?>" target="_blank" rel="nofollow">
                                                                <i class="<?php esc_html_e( get_sub_field( 'icon_rede', 'option' ) ); ?>"></i>
                                                            </a>
                                                        </li>
                                                    <?php endwhile;
                                                endif;
                                            ?>
                                        </ul>
                                    </nav>
                                </div>            
                            </div>
                        </div>
                    </section>
                    <!-- end redes -->
                    <footer>
                        <div class="container">
                            <div class="row gap-1 pt-3 pb-3 align-items-center">
                                <div class="col-6-md">
                                    <?php dynamic_sidebar( 'column-1-footer' ); ?>
                                </div>
                                <div class="col-6-md display-grid align-items-center">
                                    <?php dynamic_sidebar( 'column-2-footer' ); ?>
                                    <div class="contacts">
                                        <p class="mt-2">
                                            <strong class="family-bold">Horários de atendimento:</strong> 08h às 18h
                                        </p>
                                        <nav>
                                            <ul>
                                                <li><p class="mt-1"><strong class="family-bold">Contatos</strong></p></li>
                                                <li><a class="btn_toggle"><i class="fab fa-whatsapp"></i></a></li>
                                                <li><a href="tel:<?php esc_html_e( the_field( 'number_phone', 'option' ) ) ?>"><i class="fa fa-phone"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12-sm copyright pt-1 pb-1">
                                    <div class="display-flex align-items-center justify-center gap-1">
                                        <div><p class="m-0">&copy; <?php esc_html_e( get_theme_mod( 'set_copyright', 'Copyright X - All Rights Reserved' ) ); ?></p></div>
                                        <div><p><a href="<?php echo esc_url( _e( 'http://4dimensoes.com/', 'wp-cpw' ) ); ?>" target="_blank"><?php echo esc_html_e( 'Developed by - 4 Dimensões', 'wp-cpw' ); ?></a></p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end footer -->
                </main>
                <div class="floating">
                    <button class="whatsapp btn_toggle">
                        <i class="fab fa-whatsapp"></i>
                    </button>
                </div>
            <?php wp_footer(); ?>
        </div>
    </body>
</html>

