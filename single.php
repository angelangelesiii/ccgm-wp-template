<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CCGM_Theme_by_Zimit_Media
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main single-page-post" role="main">

		<?php while(have_posts()): the_post(); ?>

			<?php 

			$headerBackground = '';

			if(has_post_thumbnail()) $headerBackground = 'style=" background-image: url(\''.get_the_post_thumbnail_url().'\'); "';

			?>
			
			<div class="wrapper">
				
				<article class="post-article">
					
					<header class="article-header" <?php echo $headerBackground; ?>>

						<div class="overlay"></div>

						<div class="search-form"><?php get_template_part( 'template-parts/search-template-small' ); ?></div>

						<div class="content">
							<h1 class="article-title"><?php the_title(); ?></h1>
							<div class="article-meta">
								<p>Written by <?php the_author(); ?> on <?php the_date(); ?></p>
							</div>
						</div>

						<img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) , 64 ); ?>" alt="" class="author-avatar">

					</header>
					
					<div class="article-content">
						<?php the_content(); ?>
					</div>

				</article>

			</div>

		<?php endwhile; ?>

		</main><!-- #main -->

		<?php get_template_part( 'template-parts/fp-section-activity' ); ?>

	</div><!-- #primary -->

<?php
get_footer();
