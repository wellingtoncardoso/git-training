<?php 
  if ( have_posts() ):
    while( have_posts() ) : the_post();
      the_title('<h1 class="text-white mb-2">', '</h1>'); 
      ?>
      <div class="article-thumbnail mt-1 mb-2">
        <?php
          if ( has_post_thumbnail( $post ) ){
            the_post_thumbnail( 'large' );
          }
        ?>
      </div>
      <?php
      the_content(); 
    endwhile;
    else: ?>
      <p><?php esc_html_e( 'Nothing yet to be displayed!', 'wp-cpw' );?></p>
    <?php 
  endif;     