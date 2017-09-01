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

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main page" role="main">

			<?php while(have_posts()): the_post(); ?>

			<?php 

			$headerBackground = '';

			if(has_post_thumbnail()) $headerBackground = 'style=" background-image: url(\''.get_the_post_thumbnail_url().'\'); "';

			?>
			
			<article <?php post_class( array( 'page-article' )); ?>>

				<header class="page-header<?php if(has_post_thumbnail()) echo ' has-post-thumbnail'; ?>" <?php echo $headerBackground ?>>

					<?php if(has_post_thumbnail()) : ?>
					<div class="overlay"></div>
					<?php endif; ?>
				
					<div class="content">
						<div class="wrapper">
							<h1 class="page-title"><?php the_title(); ?></h1>
							<?php edit_post_link('<i class="fa fa-pencil" aria-hidden="true"></i> Edit this page'); ?>
						</div>
					</div>


				
				</header>
				
				<div class="wrapper">
				
					<div class="page-content mobile-padding">
						<?php if(get_the_content()):
							the_content();
						else:
						?>
						<p class="no-content-found">
							Coming Soon!
						</p>
						<?php endif; ?>
					</div>
				
				</div>

			</article>

		<?php endwhile; ?>
		
		<?php get_template_part( 'template-parts/fp-section-activity' ); ?>

		</main><!-- #main -->
		
		

	</div><!-- #primary -->

<?php
get_footer();
