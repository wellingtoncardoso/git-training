<?php
    $args = array(
        'post_type'         => 'post',
        'posts_per_page'    => -1
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

