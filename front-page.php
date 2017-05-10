<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CCGM_Theme_by_Zimit_Media
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php 
		// Options for parallax background
		$parallaxBG = 'background: url(\''.get_template_directory_uri().'/images/background/worship.jpg\')';
		if (get_field('banner_background','options')) $parallaxBG = 'background: url(\''.get_field('banner_background','options').'\');';
		?>

		<section class="banner full-page" style="<?php echo $parallaxBG; ?>">
			
			<?php if(get_field('parallax_boolean','options') == true) : ?>
			<div class="parallax-bg" style="<?php echo $parallaxBG; ?>"></div>
			<?php endif; ?>

			<div class="overlay"></div>

			<?php 

			$bannerImage = get_template_directory_uri().'/images/display/salvation-is-here.png';
			$bannerButtonText = 'Claim Your Salvation';
			$bannerButtonLink = '#';

			if(get_field('custom_banner','options')) : 

				if(get_field('banner_image', 'options')) $bannerImage = get_field('banner_image', 'options');
				if(get_field('button_text', 'options')) $bannerButtonText = get_field('button_text', 'options');
				if(get_field('button_url', 'options')) $bannerButtonLink = get_field('button_url', 'options');

			endif;
			?>

			<div class="content">
				<img src="<?php echo $bannerImage; ?>" alt="" class="banner-display">
				<p class="text">
					<a href="<?php echo $bannerButtonLink; ?>" class="btn btn-transparent-white"><?php echo $bannerButtonText; ?></a>
				</p>
			</div>

		</section>

		<?php get_template_part( 'template-parts/fp-section-welcome' ); ?>

		<?php get_template_part( 'template-parts/fp-section-pastors' ); ?>

		<?php get_template_part( 'template-parts/fp-section-posts' ); ?>

		<?php get_template_part( 'template-parts/fp-section-activity' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
