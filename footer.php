<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CCGM_Theme_by_Zimit_Media
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer <?php if($fpClass) echo $fpClass; ?>" role="contentinfo">

		<nav class="footer-nav">
			<div class="wrapper-medium">
				<?php
				wp_nav_menu( array( 'theme_location' => 'footer-menu-1', 'menu_id' => 'footer-nav-menu', 'depth' => '1' ) );
				?>
			</div>
		</nav>

		<div class="content">
			<div class="wrapper-medium">
				
				<div class="row collapse">

					<div class="column small-12 medium-7 large-6">

						<h2 class="footer-title">Christ Cares Global Ministries</h2>
						<p class="address">1069 Kaligayan<br/> Quirino Highway, Quezon City<br/> Philippines 1124</p>

						<div class="affiliates">
							<a href="https://g12.co/en/"><img src="<?php echo get_template_directory_uri().'/images/branding/g12_logo-small.png' ?>" alt="" class="g12-logo affiliate-logo"></a>
						</div>
					</div>

					<div class="column small-12 medium-5 large-6">
						<nav class="footer-2-nav">
							<?php
							wp_nav_menu( array( 'theme_location' => 'footer-menu-2', 'menu_id' => 'footer-small-menu', 'depth' => '1' ) );
							?>
						</nav>
					</div>

				</div>

			</div>
		</div>

		<div class="footer-footer">
			<div class="wrapper-medium">
			
			&copy; <?php echo date('Y'); ?> Christ Cares Global Ministries - Design by <a href="http://zimitmedia.com"><strong>Zimit Media</strong></a>
			
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
