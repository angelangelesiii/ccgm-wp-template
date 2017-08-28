<?php if(have_rows('featured_fp','options')) : ?>

<section class="featured">

	<div class="featured-container">

		<?php while(have_rows('featured_fp','options')) : the_row(); ?>

		<?php 

		$featured_id = get_sub_field('featured_id');

		$headline = '';
		if(get_sub_field('headline')) :
			$headline = get_sub_field('headline');
		else:
			$headline = get_the_title( $featured_id );
		endif;

		$backgroundImage = '';
		if(get_sub_field('custom_image')):
			$backgroundImage = get_sub_field('custom_image');
		else:
			$backgroundImage = get_the_post_thumbnail_url( $featured_id, 'full' );
		endif;
		?>

		<div class="featured-item">
			<div class="wrapper">
				<div class="container" style="background-image: url('<?php echo $backgroundImage; ?>')">
					<div class="overlay-under"></div>
					<h2><?php echo $headline; ?></h2>
					<a href="<?php the_permalink( $featured_id ); ?>"><span class="overlay-over"></span></a>
				</div>					
			</div>
		</div>

		<?php endwhile; ?>

	</div>

</section>

<?php endif; ?>