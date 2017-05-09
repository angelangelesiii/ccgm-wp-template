<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CCGM_Theme_by_Zimit_Media
 */

/*
Template Name: Custom Page
*/

get_header(); ?>

<?php 
$backgroundColor = '';
$fontColor = '';
if (get_field('background_color')) $backgroundColor = 'style="background-color: '.get_field('background_color').';"';
if (get_field('font_color')) $fontColor = 'style="color: '.get_field('font_color').';"';
?>

	<div id="primary" class="content-area" <?php echo $backgroundColor ?>>
		<main id="main" class="site-main page" role="main">

			<?php while(have_posts()): the_post(); ?>

			<?php 

			$headerBackground = '';

			if(has_post_thumbnail()) $headerBackground = 'style=" background-image: url(\''.get_the_post_thumbnail_url().'\'); "';

			?>
			
			<article <?php post_class( array( 'page-article', 'template-custom-page' )); ?>>

				<?php if(get_field('header_bar_boolean')) : ?>

				<header class="page-header<?php if(has_post_thumbnail()) echo ' has-post-thumbnail'; ?>" <?php echo $headerBackground ?>>

					<?php if(has_post_thumbnail()) : ?>
					<div class="overlay"></div>
					<?php endif; ?>

					<div class="content">
						<div class="wrapper">
							<h1 class="page-title"><?php the_title(); ?></h1>
							<?php edit_post_link('<i class="fa fa-pencil" aria-hidden="true"></i> Edit this'); ?>
						</div>
					</div>


				
				</header>

				<?php else : ?>	
					<div class="edit-link-container">
						<?php edit_post_link('<i class="fa fa-pencil" aria-hidden="true"></i>'); ?>
					</div>
				<?php endif; ?>

				<?php 
				$useWrapper = 'no-';
				if (get_field('use_wrapper')) $useWrapper = '';
				?>

				<div class="<?php echo $useWrapper; ?>wrapper">

					<div class="page-content" <?php echo $fontColor; ?>>
						<?php the_content(); ?>
					</div>
				
				</div>

			</article>

		<?php endwhile; ?>
		
		<?php if(get_field('activity_section_boolean')) get_template_part( 'template-parts/fp-section-activity' ); ?>
		
		</main><!-- #main -->
		
		

	</div><!-- #primary -->

<?php
get_footer();
