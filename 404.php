<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Pruebas_app_web
 */

get_header();
?>

<div id="primary" class="content-area col-md-8">
	<main id="main" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'pruebas_app_web' ); ?></h1>
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'pruebas_app_web' ); ?></p>
			</header><!-- .page-header -->

			
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
