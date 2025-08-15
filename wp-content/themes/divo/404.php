<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package divo
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<div class="container">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e('Страница не найдена', 'divo'); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p>404</p>
			</div><!-- .page-content -->
		</div>

	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
