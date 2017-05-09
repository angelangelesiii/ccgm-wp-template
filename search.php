<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package CCGM_Theme_by_Zimit_Media
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<div class="page-article search-results">
				<header class="page-header">
					<div class="content">
						<div class="wrapper">
							<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'ccgm' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</div>
					</div>
				</header><!-- .page-header -->
			</div>

			<div class="wrapper">
			<?php get_template_part( 'template-parts/search-template' ); ?>
			</div>
			
			<div class="wrapper search-results">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<article <?php post_class( array( 'search-result' ) ); ?>>
					<header class="search-result-header">
						<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<a href="<?php the_permalink(); ?>" class="link-to-post"><?php the_permalink(); ?></a>
					</header>
					<div class="search-result-content">
						<p class="excerpt">
							<?php $excerpt = get_the_excerpt(); $keys= explode(" ",$s); $excerpt = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt">\0</strong>', $excerpt); ?>
							<span class="entry-date"><?php if(get_the_date()) echo get_the_date().' -'; ?></span><?php echo $excerpt; ?>

						</p>
					</div>
				</article>				

			<?php endwhile; ?>

			<nav class="blog-navigation">
				<?php 
				// the_posts_navigation(); 
				?>
				<?php custom_numeric_posts_nav(); ?>
			</nav>

			</div><!-- end wrapper -->

			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
