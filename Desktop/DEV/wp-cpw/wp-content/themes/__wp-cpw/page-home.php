<?php

/**

 * The header for our theme

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage CPW

 * @since CPW 1.0

 */

get_header();

?>

           

    <!-- hero -->

    <div id="hero" class="container">

        <div class="row gap-2 pt-2 pb-2">

            <?php while( have_posts() ):

                the_post(); ?>

                <div class="col-12-xs col-5-md display-grid justify-center align-items-center ">

                    <div class="hero__thumbnail">
                        <?php if ( has_post_thumbnail() )
                            the_post_thumbnail( 'perfil', array( 'class' => 'lazy border-full' ) )
                        ?>
                    </div>

                </div>

                <div class="col-12-xs col-7-md display-grid align-items-center">

                    <div class="details">

                    <?php the_content(); ?>

                        <div class="row gap-1">

                            <div><a href="https://wa.me/+5519982903433/" target="_blank" rel="nofollow" class="btn-outlined-white text-white"><i class="fab fa-whatsapp"></i> <?php esc_html_e( 'WhatsApp', 'wp-cpw' ); ?></a></div>

                            <div><a href="https://wa.me/+5519982903433/" target="_blank" rel="nofollow" class="btn-secondary btn-secondary-hover text-white text-hover-white"><?php esc_html_e( 'Contact Me', 'wp-cpw' ); ?></a></div>

                        </div>

                    </div>

                </div>

            <?php endwhile; ?>

        </div>

    </div>

    <!-- skills -->

    <section id="skills" class="mt-4 pt-2 pb-2">

        <div class="container">

            <div class="row">

                <h2 class="text-white mb-2 underline-color"><?php esc_html_e( 'About me', 'wp-cpw' ); ?></h2>

            </div>

            <div class="row gap-2">

                <div class="col-12-xs col-6-lg">

                    <div class="card row gap-0 ">

                        <div class="col-2-xs text-white display-grid aling-items-center justify-center">

                            <i class="fa fa-book"></i>

                        </div>

                        <div class="col-10-xs">

                            <div class="card-title"><h3 class="text-white mb-1"><?php esc_html_e( 'Academic Formation', 'wp-cpw' ); ?></h3></div>

                            <div class="card-details">

                                <p class="text-white">- Técnico Eletrotécnico</p>

                                <p class="text-white">- Técnico Informática</p>

                                <p class="text-white">- Tecnologo Analista e Desenvolvedor de Sistema</p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-12-xs col-6-lg">

                    <div class="card row gap-0 ">

                        <div class="col-2-xs text-white display-grid aling-items-center justify-center">

                            <i class="fa fa-computer"></i>

                        </div>

                        <div class="col-10-xs">

                            <div class="card-title"><h3 class="text-white mb-1"><?php esc_html_e( 'Extras', 'wp-cpw' ); ?></h3></div>

                            <div class="card-details">

                                <p class="text-white">- Criação de temas responsivo com wordpress - <strong>Marcelo Xavier Vieira</strong></p>

                                <p class="text-white">- Criação de plugins wordpress do jeito certo - <strong>Marcelo Xavier Vieira</strong></p>

                                <p class="text-white">- Curso de SEO completo do básico ao avançado - <strong>Ricardo Zacho</strong></p>

                                <p class="text-white">- Ionic 3 + API Wordpress - <strong>Junior Abranches</strong></p>

                                <p class="text-white">- Desenvolvimento de plugins para wordpress - crie 10 plugins - <strong>Elton Oliveira</strong></p>

                                <p class="text-white">- JavaScript e jQuery para iniciantes - <strong>Diego Mariano, Ph.D.</strong></p>

                                <p class="text-white">- Desarrollo de negocios exitosos en Internet - <strong>NovaEra Academy</strong></p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-12-xs col-6-lg">

                    <div class="card row gap-0 ">

                        <div class="col-2-xs text-white display-grid aling-items-center justify-center">

                            <i class="fa fa-code"></i>

                        </div>

                        <div class="col-10-xs">

                            <div class="card-title"><h3 class="text-white mb-1"><?php esc_html_e( 'Setup', 'wp-cpw' ); ?></h3></div>

                            <div class="card-details">

                                <p class="text-white">- HTML5</p>

                                <p class="text-white">- CSS3 (sass)</p>

                                <p class="text-white">- JS (jQuey)</p>

                                <p class="text-white">- PHP</p>

                                <p class="text-white">- MySQL</p>

                                <p class="text-white">- Node.js (headless)</p>

                                <p class="text-white">- Docker</p>

                                <p class="text-white">- Photoshop | XD | Figma</p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-12-xs col-6-lg">

                    <div class="card row gap-0 ">

                        <div class="col-2-xs text-white display-grid aling-items-center justify-center">

                            <i class="fa fa-gear"></i>

                        </div>

                        <div class="col-10-xs">

                            <div class="card-title"><h3 class="text-white mb-1"><?php esc_html_e( 'Settings', 'wp-cpw' ); ?></h3></div>

                            <div class="card-details">

                                <p class="text-white">Desenvolvimento de layouts com base do wordpress, seguindo as boas práticas, com auxílio da documentação.</p>

                                <p class="text-white">Verificação de canais de desenvolvimento para comparação de códigos e filtrar possíveis dúvidas.</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- customers -->

    <section id="customers" class="mt-4 pt-2 pb-2">

        <div class="container">

            <div class="row">

                <h2 class="text-white mb-2 underline-color"><?php esc_html_e( 'Timeline', 'wp-cpw' ); ?></h2>

            </div>

            <div class="row">

                <div id="timeline">

                    <?php 

                    $args = array( 'post_type' => 'timeline', 'posts_per_page' => -1, 'order' => 'ASC' );

                    $list = new WP_Query( $args );

                    if( $list->have_posts() ):

                        while( $list->have_posts() ) : $list->the_post(); ?>

                        <div class="card p-2">

                            <div class="content">

                                <div class="card-title">

                                    <h3 class="text-white"><?php the_title(); ?></h3>

                                </div>

                                <div class="card-details">

                                    <?php the_content(); ?>

                                </div>

                            </div>

                        </div>

                        <?php endwhile; 

                        wp_reset_postdata();

                    endif;?>

                </div>

            </div>

        </div>

    </section>

    <!-- Fun Facts -->

    <section id="fun-facts" class="mt-4 pt-2 pb-2">

        <div class="container">

            <div class="row">

                <h2 class="text-white mb-2 underline-color"><?php esc_html_e( 'Fun facts', 'wp-cpw' ); ?></h2>

            </div>

            <div class="row gap-3 mt-2">

                <div class="col-12-xs col-6-sm col-3-lg">

                    <div class="card display-grid align-items-center justify-center">

                        <div class="card-title">

                            <i class="fa fa-check"></i>

                            <h3 class="text-white"><?php esc_html_e( 'Hours', 'wp-cpw' ); ?></h3>

                        </div>

                        <div class="card-details">

                            <p class="text-white"><span>6260</span></p>

                        </div>

                    </div>

                </div>

                <div class="col-12-xs col-6-sm col-3-lg">

                    <div class="card display-grid align-items-center justify-center">

                        <div class="card-title">

                            <i class="fa fa-check"></i>

                            <h3 class="text-white"><?php esc_html_e( 'Customers', 'wp-cpw' ); ?></h3>

                        </div>

                        <div class="card-details">

                            <p class="text-white"><span>18</span></p>

                        </div>

                    </div>

                </div>

                <div class="col-12-xs col-6-sm col-3-lg">

                    <div class="card display-grid align-items-center justify-center">

                        <div class="card-title">

                            <i class="fa fa-check"></i>

                            <h3 class="text-white"><?php esc_html_e( 'Country', 'wp-cpw' ); ?></h3>

                        </div>

                        <div class="card-details">

                            <p class="text-white"><span>3</span></p>

                        </div>

                    </div>

                </div>

                <div class="col-12-xs col-6-sm col-3-lg">

                    <div class="card display-grid align-items-center justify-center">

                        <div class="card-title">

                            <i class="fa fa-check"></i>

                            <h3 class="text-white"><?php esc_html_e( 'Coffee', 'wp-cpw' ); ?></h3>

                        </div>

                        <div class="card-details">

                            <p class="text-white"><span>1565</span></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

<?php get_footer(); ?>