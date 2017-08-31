<section class="featured-posts">
	<?php 
	// ACF Repeater Loop
	if(have_rows('featured_posts', 'options')) :
	?>

	<h1 class="featured-title">Featured Posts</h1>

	<div class="featured-posts-carousel carousel">

		<?php while(have_rows('featured_posts', 'options')): the_row(); ?>

			<?php 

			$featuredPost = get_sub_field('featured_post');
			$featuredStyle = '';

			if(get_the_post_thumbnail_url($featuredPost)) :
				$featuredStyle = 'style=" background-image: url(\''.get_the_post_thumbnail_url($featuredPost, 'large' ).'\'); "';
			else :
				$featuredStyle = 'style=" background-color: #3D7FD1; "';
			endif;

			?>

			<div class="featured-post" <?php echo $featuredStyle; ?>>
				<div class="overlay"></div>
				<div class="content">
					<div class="wrapper">
						<h2 class="post-title"><?php echo get_the_title($featuredPost); ?></h2>
						<span class="excerpt"><?php the_sub_field('short_description'); ?></span>
						<a href="<?php echo get_the_permalink($featuredPost); ?>" class="btn btn-transparent-white">Read Full</a>
					</div>
				</div>
			</div>

		<?php endwhile; ?>

	</div>

	<?php endif; 
	// END ACF Repeater Loop
	?>

</section>