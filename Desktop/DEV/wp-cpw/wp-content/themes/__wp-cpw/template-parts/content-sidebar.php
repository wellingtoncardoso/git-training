<article id="<?php the_ID(); ?>" <?php post_class( 'col-12-xs col-8-md mb-2' ) ?>>
    <?php 
        get_template_part( 'template-parts/content' );

        if( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
    ?>
</article>
<aside class="col-12-xs col-4-md">
  <?php 
    if( is_active_sidebar( 'single' ) ) :
      dynamic_sidebar( 'single' );
    endif;
  ?>
</aside>