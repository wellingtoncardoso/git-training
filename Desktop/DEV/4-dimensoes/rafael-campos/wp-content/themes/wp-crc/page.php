<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage CPW
 * @since CPW 1.0
 */

get_header(); ?>
    <main>
        <div class="hero-page">
            <?php 
                if( has_post_thumbnail() ){
                    the_post_thumbnail();
                }
            ?>
        </div>
        <div class="container">
            <div class="row pb-3 align-items-center">
                <?php get_template_part( 'template-parts/content' ); ?>
            </div>
        </div>
    </main>
<?php get_footer(); ?>