<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <article id="post-<?php the_ID();?>" <?php post_class();?>>
            <div class="cpw-container">
                <h1><?php echo esc_html_e( 'List Of Articles', 'wp-cpw' );?></h1>
                <?php get_template_part( 'template-parts/content/' ); ?>
                <?php get_sidebar( ); ?>
            </div>
        </article>
    </div>
  </div>
<?php get_footer(); ?>