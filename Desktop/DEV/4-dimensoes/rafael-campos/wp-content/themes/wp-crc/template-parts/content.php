<article>
    <div class="container pt-4">
        <div class="row pt-3 gap-1">
            <div class="col-12-sm col-8-md">
                <?php
                    echo '<div>';
                        the_title( '<h1 class="font-xl family-exo2-bold text-details mb-2">', '</h1>' );
                    echo '</div>';
                    echo '<div>';
                        echo '<figure>';
                            if( has_post_thumbnail() ){ the_post_thumbnail( 'large' ); }
                        echo '</figure>';
                    echo '</div>';
                    echo '<div class="content">';
                        the_content();
                    echo '</div>';
                ?>
            </div>
            <aside class="col-12-sm col-4-md">
                <?php dynamic_sidebar( 'blog' ); ?>
            </aside>
        </div>
        <div class="row pt-3 pb-3">
            <div class="col-12-sm text-center">
                <a class="btn-secondary btn-secondary-hover text-primary btn_toggle">
                    <?php esc_html_e( 'Agende sua consulta!', 'wp-cpw' );?>
                </a>
            </div>
        </div>
    </div>
</article>