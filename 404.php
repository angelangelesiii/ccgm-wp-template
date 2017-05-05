<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package CCGM_Theme_by_Zimit_Media
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="wrapper">
					<img src="<?php echo get_template_directory_uri().'/images/display/tomb-gray.png' ?>" alt="Tomb" class="tomb">
					<h1 class="not-found-text">The one you are looking for is not here!</h1>
					<p class="not-found-desc">Either the page you are looking for does not exist, have been moved or is deleted.</p>
					<p class="salvation">Is it salvation that you are looking for? We have the answers for you. Come visit us at one of our schedules!</p>
				</div>


			</section><!-- .error-404 -->

			<?php get_template_part( 'template-parts/fp-section-posts' ); ?>

			<?php get_template_part( 'template-parts/fp-section-activity' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
