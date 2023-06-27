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
		<div class="container pt-4">
            <section class="row pt-4 gap-2 error-404 not-found">
                <div class="col-12-xs col-6-md m-auto display-grid align-items-center justify-center">
                    <div class="page-header">
                        <h1 class="font-xl family-exo2-medium page-title text-secondary"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wp-cpw' ); ?></h1>
                    </div>
                </div>
            </section>
        </div>
	</main>
<?php
get_footer();
