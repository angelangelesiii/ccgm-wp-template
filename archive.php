<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CCGM_Theme_by_Zimit_Media
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main blog-area archive-area" role="main">

			<div class="page-article search-results">
				<header class="page-header">
					<div class="content">
						<div class="wrapper">
							<h1 class="page-title"><?php the_archive_title(); ?></h1>
						</div>
					</div>
				</header><!-- .page-header -->
			</div>

			<div class="wrapper-medium">
				
				<div class="wrapper">
				<?php get_template_part( 'template-parts/search-template' ); ?>
				</div>

				<div class="row">
					
					<div class="column article-column blog-column small-12">
					<?php if(have_posts()) : ?>

						<div class="row large-up-4 medium-up-2 small-up-1">

						<?php while(have_posts()) : the_post(); // Start Loop?>

							<article <?php post_class( array( 'column', 'column-block', 'article-item' ) ); ?>>
								<div class="article-box">

									<?php // For post thumbnail
									$thumbnailCSS = '';
									if(has_post_thumbnail()) $thumbnailCSS = 'style="background-image: url(\''.get_the_post_thumbnail_url().'\')"'
									?>

									<a href="<?php the_permalink(); ?>" class="article-thumbnail-container">
										<div class="article-thumbnail" <?php echo $thumbnailCSS; ?>></div>
										<div class="overlay"></div>
									</a>

									<div class="article-content">
										<h2 class="article-title"><?php the_title(); ?></h2>
										<span class="meta-date"><?php echo get_the_date(); ?></span>
										<?php the_excerpt(); ?>
									</div>

									<footer class="article-footer">
										<a href="<?php the_permalink(); ?>" class="read-more">Read Full</a>
									</footer>

								</div>
							</article>

						<?php endwhile; // End Loop ?>

						</div>

						<nav class="blog-navigation">
							<?php 
							// the_posts_navigation(); 
							?>
							<?php custom_numeric_posts_nav(); ?>
						</nav>

					<?php else : ?>

					<div class="wrapper">
						<h1 class="no-entries-title">There are no entries yet</h1>
					</div>

					<?php endif; ?>
					</div>

					<div class="widget-column">
						<?php // get_sidebar(); ?>
					</div>

				</div>
				
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
