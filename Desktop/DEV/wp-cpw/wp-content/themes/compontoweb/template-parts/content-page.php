<!-- container starts -->
<div class="cpw-container">
  <div class="cpw-row">
    <?php the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1 class="cpw-title"><?php the_title(); ?></h1>
      <div class="cpw-content">
        <?php the_content(); ?>
        <?php wp_link_pages('before=<div class="page-link">' . __('Pages:', 'cpw' ) . '&after=</div>') ?>
        <?php edit_post_link(__('Edit', 'cpw' ), '<span class="edit-link">', '</span>' ) ?>
      </div>
    </div>  
    <?php if ( get_post_custom_values('comments') ) comments_template() // Adiciona um custom field com Nome e Valor "comments" para que possa usar comentários numa página ?>  
  </div>
</div> 
<!-- container ends -->