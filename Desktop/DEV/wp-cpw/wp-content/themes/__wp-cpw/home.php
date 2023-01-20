<?php 
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Compontoweb
 */
get_header(); ?>
    <div class="container">
        <div class="row">
            <h1 class="text-white mt-4 mb-4"><?php esc_html_e( 'List of articles', 'wp-cpw' ); ?></h1>
        </div>
        <?php get_template_part( 'template-parts/content', 'article' ); ?>
  </div>
<?php get_footer(); ?>