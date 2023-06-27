<?php get_header(); ?>
    <section id="hero" class="hero">
        <div class="slick-slider">
            <?php 
                if( have_rows( 'add_image_banner' ) ):
                    while( have_rows( 'add_image_banner' ) ): the_row();?>
                        <div  class="site-main__banner"
                            style="background-image: url( '<?php esc_html_e( get_sub_field( 'image' ) );?>' );">  
                        </div>
                    <?php  endwhile; 
                endif; 
            ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="details">
                    <h2 class="text-primary font-xxl"><?php the_field( 'title_banner' ); ?></h2>
                    <p class="text-primary font-lg family-bauhaus"><?php the_field( 'content_banner' ); ?></p>
                    <?php if( the_field( 'title_button' ) != "" ) { ?>
                        <div class="action">
                            <a href="<?php the_field( 'link_button' )?>" class="<?php the_field( 'class_button_' )?>"><?php the_field( 'title_button' )?></a>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </section>
    <!-- end slider -->
    <section id="sobre">
        <div class="container">
            <div class="row align-items-center pt-3 pb-3 gap-1">
                <div class="col-6-md">
                    <?php esc_html_e( the_field( 'about_content' ) ); ?>
                    <button class="btn-outlined-primary text-primary mt-2 btn_toggle">
                        <?php esc_html_e( 'Agende seu horário!', 'wp-cpw' ); ?>
                    </button>
                </div>
                <div class="col-6-md desktop">
                    <figure>
                        <img class="img-720h" src="<?php the_field( 'about_image' )?>" alt="<?php bloginfo( 'name' ); ?>">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->
    <section id="resultados">
        <div class="container pt-3 pb-3">
            <div class="row align-items-center gap-1">
                <div class="col-12-xl">
                    <h2 class="font-xl family-secondary text-center mb-2">Nossos Resultados</h2>
                </div>
            </div>
            <div class="row align-items-center pb-3 gap-1">
                <div class="col-4-md">
                    <figure style="widht: 100%; max-width:300px; heigth: 300px; margin: 0 auto;">
                        <img style="widht: 100%; max-width:300px; heigth: 300px; margin: 0 auto;" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/01.jpg" alt="">
                    </figure>
                </div>
                <div class="col-4-md">
                    <figure style="widht: 100%; max-width:300px; heigth: 300px; margin: 0 auto;">
                        <img  style="widht: 100%; max-width:300px; heigth: 300px; margin: 0 auto;" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/02.jpg" alt="">
                    </figure>
                </div>
                <div class="col-4-md">
                    <figure style="widht: 100%; max-width:300px; heigth: 300px; margin: 0 auto;">
                        <img style="widht: 100%; max-width:300px; heigth: 300px; margin: 0 auto;" src="<?php echo get_template_directory_uri('')?>/assets/images/delete/03.jpg" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-8-xl m-auto text-center">
                <p class="">
                    Durante a consulta de avaliação, teremos a oportunidade de conhecer a sua história, compreender sua principal queixa e expectativas, além de planejar o tratamento adequado para você.
                </p>
                <button class="btn-secondary btn-secondary-hover text-primary btn_toggle">
                    <?php esc_html_e( 'Agende sua consulta!', 'wp-cpw' ); ?>
                </button>
            </div>
        </div>
    </section>
    <!-- end resultados -->
    <section id="clinica">
        <div class="container">
            <div class="row align-items-center pt-3 pb-3 gap-1 ">
                <div class="col-6-md">
                    <div class="slick">
                        <figure>
                            <img class="img-520h" src="<?php echo get_template_directory_uri() ?>/assets/images/delete/clinica.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-6-md title-space">
                    <h2 class="font-xl family-secondary text-primary mb-2">Clínica</h2>
                    <p class="text-primary">
                        A Clínica Rafael Campos tem como compromisso oferecer o que há de mais avançado em tecnologia para diagnóstico e tratamento tricológico, visando cuidar de você com total dedicação. Reconhecemos a sensibilidade das questões relacionadas à tricologia e estamos empenhados em atender às suas necessidades de forma cuidadosa e especializada.
                    </p>
                    <p class="text-primary">
                        Situada no prestigiado complexo de clínicas do Lifecenter, na Avenida do Contorno, 4747, Xº andar, sala Y, bairro Funcionários, em Belo Horizonte - MG, nossa Clínica é um ambiente acolhedor e profissional. Aqui, você pode depositar total confiança em nossa expertise tricológica, focada em elevar a sua autoestima.
                    </p>
                    <button class="btn-secondary btn-primary-hover text-primary btn_toggle">
                        <?php esc_html_e( 'Agende sua consulta pelo WhatsApp!', 'wp-cpw' ); ?>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- end clinica -->
    <section id="tratamentos">
        <div class="container">
            <div class="row align-items-center pt-3 pb-3">
                <div class="col-12-xl">
                    <h2 class="font-xl family-secondary text-secondary text-center mb-2"><?php esc_html_e( 'Tratamentos', 'wp-cpw' )?></h2>
                </div>
            </div>
            <div class="row slick-slider__cards pb-3">
                <?php 
                    $args = array( 'post_type' => 'treatments', 'posts_per_page' => -1 );
                    $list = new WP_Query( $args );
                    if( $list->have_posts() ):
                        while( $list->have_posts() ): $list->the_post(); ?>
                            <div class="col-4-md">
                                <div class="card">
                                    <div class="card-header">
                                        <figure>
                                            <?php if( has_post_thumbnail( ) ):
                                                the_post_thumbnail( );
                                            else: ?>
                                                <img src="<?php echo get_template_directory_uri()?>/assets/images/placeholder-image.png" alt="<?php bloginfo(); ?>">
                                            <?php endif; ?>
                                        </figure>
                                    </div>
                                    <div class="card-title">
                                        <?php the_title( '<h3 class="family-bold text-center">', '</h3>' ); ?>
                                    </div>
                                    <div class="card-details text-center">
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>" class="btn-secondary btn-secondary-hover text-primary">
                                            <?php esc_html_e( 'Saiba mais', 'wp-cpw' );?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; 
                        wp_reset_postdata();
                    endif;
                ?>
            </div>
            <div class="row pb-3">
                <div class="col-8-md m-auto">
                    <h4 class="font-lg family-semibold text-center">Atendimento individualizado, humanizado e de acordo com as necessidades de cada paciente.</h4>
                </div>
                <div class="col-8-md m-auto text-center mt-2">
                    <button class="btn-secondary btn-secondary-hover text-primary btn_toggle">
                        <?php esc_html_e( 'Agende sua consulta!', 'wp-cpw' );?>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- end tratamentos -->
    <section id="blog">
        <div class="container">
            <div class="row align-items-center pt-3 pb-3">
                <div class="col-12-xl">
                    <h2 class="font-xl family-secondary text-primary text-center mb-2"><?php esc_html_e( 'Blog', 'wp-cpw' )?></h2>
                </div>
            </div>
            <div class="row pb-3 align-items-center gap-1">                    
            <?php
                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => 3
                );
                $loop = new WP_Query( $args );
                if( $loop->have_posts( ) ):
                    while( $loop->have_posts() ) : $loop->the_post(); ?>
                            <article id="id-<?php the_ID(); ?>" <?php post_class( 'col-12-sm col-6-md col-4-lg' ); ?> >
                                <div class="card">
                                    <div class="card-header display-flex justify-center">
                                        <figure>
                                            <?php if( has_post_thumbnail() ){ the_post_thumbnail( 'medium' ); } ?>
                                        </figure>
                                    </div>
                                    <div class="card-title">
                                        <?php the_title( '<h3 class="family-bold text-center">', '</h3>' ); ?>
                                    </div>
                                    <div class="card-details text-center">
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink();?>" class="btn-secondary btn-secondary-hover text-primary">
                                            <?php esc_html_e( 'Saiba mais', 'wp-cpw' );?>
                                        </a>
                                    </div>
                                </div>
                            </article>
                            <?php   
                        endwhile;
                        wp_reset_postdata();
                    else:?>
                        <p><?php esc_html_e( 'Nothing yet to be displaed!','wp-cpw' ); ?></p>
                <?php
                endif;
            ?>
            </div>
            <div class="row pb-3">
                <div class="col-8-md m-auto text-center mt-2">
                    <a href="<?php esc_url( home_url( '/' ) ) ?>blog" class="btn-secondary btn-primary-hover text-primary">
                        <?php esc_html_e( 'Veja mais', 'wp-cpw' );?>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>