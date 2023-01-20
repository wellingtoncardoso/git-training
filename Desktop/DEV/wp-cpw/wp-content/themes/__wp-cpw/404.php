<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Compontoweb
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
            <section class="row gap-2 error-404 not-found">
                <div class="col-12-xs col-6-md m-auto display-grid align-items-center justify-center">
                    <header class="page-header">
                        <h1 class="page-title text-white"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wp-cpw' ); ?></h1>
                    </header><!-- .page-header -->
                </div>
            </section><!-- .error-404 -->
        </div>
	</main><!-- #main -->
<?php
get_footer();
