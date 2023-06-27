<?php get_header(); ?>
    <img class="img-background img-header" src="<?php header_image() ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' );?> ">
    <section>
        <div class="container pt-4">
            <div class="row pt-3 gap-1">
                <div class="col-12-sm">
                    <h1><?php esc_html_e( 'Blog', 'wp-cpw' ); ?></h1>
                </div>
                <?php esc_html_e( get_template_part( 'template-parts/content','loop' ) ); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>