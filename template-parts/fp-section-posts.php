<section class="recent-posts blog-area">

	<div class="wrapper-medium">

		<h2 class="section-title">Recent <span class="text-accent">Blog</span> Posts</h2>

	<?php 
		
		// This arguments will be the filter that we'll use for the custom WordPress loop query.
		$args = array(
			'post_type'				=> 'post',
			'posts_per_page'		=> '4'
		);

		// We'll create a new instance of WP_Query using $args.
		$latestPostsQuery = new WP_Query($args);

		// Loop through the query (looks like the regular WordPress loop from here on).
		if($latestPostsQuery->have_posts()) : ?>

		<div class="row large-up-4 medium-up-2 small-up-1 posts-strip">

		<?php while($latestPostsQuery->have_posts()) :
				$latestPostsQuery->the_post();

		//Output area:
		?>
		
			<article class="column column-block article-item articleID-<?php the_id(); ?>">
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
						<span class="meta-date"><?php echo get_the_date(); ?>
						<?php the_excerpt(); ?>
					</div>

					<footer class="article-footer">
						<a href="<?php the_permalink(); ?>" class="read-more">Read Full</a>
					</footer>

				</div>
			</article>

		<?php endwhile; ?>

		</div>

		<?php

		// flush, return to original post data, necessary after every WP_Query
		wp_reset_postdata(); 

		endif;

	?>
		
		<a href="<?php echo get_permalink( get_option('page_for_posts' ) ); ?>" class="btn btn-transparent-gray">View more posts</a>

	</div>

</section>