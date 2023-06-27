<div class="modal">
  <div class="modal-content">
    <span class="btn-close">x</span>
    <div class="modal-header mt-3">
      <h3 class="mb-2"><?php esc_html_e( the_field( 'title_modal', 'option' ) );?></h3>
      <p><?php esc_html_e( the_field( 'subtitle_modal', 'option' ) );?></p>
    </div>
    <div class="mb-2"></div>
    <?php 
      echo do_shortcode( '[contact-form-7 id="88" title="Form lead"]' );
    ?>
  </div>
</div>