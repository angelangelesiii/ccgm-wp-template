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
		$parallaxBG = 'background: none;';
		if (get_field('banner_background','options')) $parallaxBG = 'background: url(\''.get_field('banner_background','options').'\');';
		?>

		<section class="banner full-page" style="<?php echo $parallaxBG; ?>">
			
			<?php if(get_field('parallax_boolean','options') == true) : ?>
			<div class="parallax-bg" style="<?php echo $parallaxBG; ?>"></div>
			<?php endif; ?>

			<div class="overlay"></div>

			<div class="content">
				<img src="<?php echo get_template_directory_uri().'/images/display/salvation-is-here.png' ?>" alt="" class="banner-display">
				<p class="text">
					<a href="#" class="btn btn-transparent-white btn-expanding">Claim Your Salvation</a>
				</p>
			</div>

		</section>

		<section class="sample">
			<div class="wrapper">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid cupiditate deleniti impedit temporibus dolore iusto, a eius dolorum soluta, et quis sunt architecto accusamus pariatur. Nostrum incidunt maxime, ab libero ex delectus impedit quia fugit modi! Perferendis voluptate incidunt voluptatum iure earum, culpa nisi dolor accusantium ad. Consectetur, porro, aperiam? Libero id magni, quidem, voluptate possimus quas dignissimos dolores ab, facilis perferendis atque iure blanditiis. Quisquam saepe voluptatem velit laboriosam natus iste omnis earum vel vitae est reiciendis asperiores, distinctio nisi sint, adipisci qui aut sed. Tempora totam, explicabo placeat fugiat omnis ducimus aliquam suscipit ut repellat unde! Dolorem nulla error repudiandae ipsum tenetur! Assumenda architecto magnam at accusamus necessitatibus ipsum, sunt! Quidem quam, numquam temporibus ullam praesentium eaque excepturi unde aliquid repellendus, vel. Animi deserunt, libero quae repudiandae quisquam omnis odit. Ratione velit assumenda maiores, laboriosam numquam maxime eius impedit repudiandae, laborum facilis dignissimos! Autem pariatur, doloremque illum possimus, aliquid natus similique iusto veniam saepe, enim accusantium! Maxime enim incidunt quasi ex dicta eaque voluptate veniam quis laborum repellendus optio, quas deleniti doloremque, minima mollitia, voluptatibus architecto assumenda minus necessitatibus, suscipit quo totam? Rerum qui nihil commodi amet animi nam eligendi itaque at, laboriosam iure quos eos, tenetur labore eum atque sapiente beatae ducimus sed nobis explicabo vitae odit?</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
