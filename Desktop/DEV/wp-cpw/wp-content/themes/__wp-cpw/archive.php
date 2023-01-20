<?php 
/**
 * Template part for displaying archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Compontoweb
 */
get_header(); ?>
    <div class="container">
        <div class="row">
            <?php the_archive_title( '<h1 class="text-white archive-title mt-2 mb-4">', '</h1>' ) ?>
        </div>
        <?php get_template_part( 'template-parts/content', 'article' ); ?>
  </div>
<?php get_footer(); ?>