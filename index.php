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
		<main id="main" class="site-main blog-area" role="main">

		<div class="wrapper-medium">
			
			<?php 
			// get current page we are on. If not set we can assume we are on page 1.
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			// are we on page one?
			if(1 == $paged) :
			    //true
			?>
		
			<div class="wrapper-medium">
			<?php get_template_part( 'template-parts/featured-posts' ); ?>
			</div>

			<?php endif; ?>

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
								if(has_post_thumbnail()) $thumbnailCSS = 'style="background-image: url(\''.get_the_post_thumbnail_url(null, 'medium').'\')"'
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

		<?php get_template_part( 'template-parts/fp-section-activity' ); ?>
		
	</div><!-- #primary -->

<?php
get_footer();
