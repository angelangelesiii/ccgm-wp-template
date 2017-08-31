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
						<p class="address">
							<?php the_field('footer_address','options'); ?>
						</p>

						<div class="affiliates">
							<a href="https://g12.co/en/"><img src="<?php echo get_template_directory_uri().'/images/branding/g12_logo-small.png' ?>" alt="" class="g12-logo affiliate-logo"></a>
						</div>
					</div>

					<div class="column small-12 medium-5 large-6">
						<nav class="footer-2-nav">
							<?php
							wp_nav_menu( array( 'theme_location' => 'footer-menu-2', 'menu_id' => 'footer-small-menu', 'depth' => '1' ) );
							?>

							<ul class="social-links">
								<?php if(get_field('facebook_url','options')) : ?>
								<li class="social-link facebook-link">
									<a href="<?php the_field('facebook_url','options'); ?>" class="fa-stack fa-lg" target="_blank">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-facebook fa-stack-1x"></i>
									</a>
								</li>
								<?php endif;
								if(get_field('twitter_url','options')) : 
								?>
								<li class="social-link twitter-link">
									<a href="<?php the_field('twitter_url','options'); ?>" class="fa-stack fa-lg" target="_blank">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-twitter fa-stack-1x"></i>
									</a>
								</li>
								<?php endif;
								if(get_field('instagram_url','options')) : 
								?>
								<li class="social-link instagram-link">
									<a href="<?php the_field('instagram_url','options'); ?>" class="fa-stack fa-lg" target="_blank">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-instagram fa-stack-1x"></i>
									</a>
								</li>
								<?php endif;
								if(get_field('google_plus_url','options'))  :
								?>
								<li class="social-link google-plus-link">
									<a href="<?php the_field('google_plus_url','options'); ?>" class="fa-stack fa-lg" target="_blank">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-google-plus fa-stack-1x"></i>
									</a>
								</li>
								<?php endif;
								if(get_field('pinterest_url','options')) : 
								?>
								<li class="social-link pinterest-link">
									<a href="<?php the_field('pinterest_url','options'); ?>" class="fa-stack fa-lg" target="_blank">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-pinterest-p fa-stack-1x"></i>
									</a>
								</li>
								<?php endif;
								if(get_field('youtube_url','options')) :
								?>
								<li class="social-link youtube-link">
									<a href="<?php the_field('youtube_url','options'); ?>" class="fa-stack fa-lg" target="_blank">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-youtube-play fa-stack-1x"></i>
									</a>
								</li>
								<?php endif;	?>
							</ul>
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87483506-2', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
