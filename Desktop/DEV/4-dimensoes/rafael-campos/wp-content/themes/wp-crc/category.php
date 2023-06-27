<?php get_header(); ?>
    <div class="container pt-4">
        <div class="row pt-4">
            <h1 class="font-xxl">
                <?php esc_html_e( 'Category', 'wp-cpw' ) . the_category(); ?>
            </h1>
        </div>
    </div>
    <section>
        <div class="container pt-2 pb-2">
            <div class="row gap-1">
                <?php esc_html_e( get_template_part( 'template-parts/content','blog' ) ); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>