<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CCGM_Theme_by_Zimit_Media
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<?php 
// If front page, add 'front-page' class
$fpClass = 'not-front-page';
if(is_front_page()) $fpClass = 'front-page';
if(is_single()) $fpClass .= ' single-page';
if(is_page()) $fpClass .= ' page';
if(is_woocommerce()) $fpClass .= ' shop-page';
?>

</head>

<body <?php body_class($fpClass); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ccgm' ); ?></a>

	<header id="ccgm-header" class="site-header top-position <?php echo $fpClass; ?>">
		<div class="wrapper-big">
			<nav class="header-nav .clearfix">

				<div class="mobile-menu-button-container hide-for-large">
					<button class="mobile-menu-button open-menu-button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>

				<div class="logo-container clearfix">
					<a href="<?php echo home_url(); ?>" class="clearfix">
						<img src="<?php echo get_template_directory_uri().'/images/branding/logo-boxed-white-small.png' ?>" alt="Logo" class="logo">
						<h1>CCGM</h1>
					</a>
				</div>

				<div class="menu-container show-for-large">
					<?php
					wp_nav_menu( array( 'theme_location' => 'header-menu-1', 'menu_id' => 'main-nav-menu', 'depth' => '2' ) );
					?>

				</div>

				<?php if(is_user_logged_in()) : ?>
				<div class="user-box show-for-large">
					<?php
					if ( class_exists( 'WooCommerce' ) ) :
					?>
					<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="woocommerce-account-link">My Account</a>
					<?php endif; ?>
					<a href="<?php echo wp_logout_url(home_url()); ?>" class="header-logout-link">Logout</a>
				</div>
				<?php endif; ?>

			</nav>
		</div>
		
		<!-- MOBILE MENU -->
		<div class="mobile-menu-overlay hide-for-large"></div>

		<nav class="mobile-menu-box hide-for-large">
			<div class="wrapper">

				<button class="mobile-menu-button close-menu-button"><i class="fa fa-close" aria-hidden="true"></i></button>

			</div>

			<div class="mobile-menu-container">

				<ul class="mobile-ul">
					<li class="menu-item"><a href="<?php echo home_url(); ?>">Home</a></li>
				</ul>

				<?php // Main Menu
				wp_nav_menu( array( 'theme_location' => 'header-menu-1', 'menu_id' => 'mobile-nav-menu', 'depth' => '2', 'menu_class' => 'mobile-ul' ) );
				?>

				<?php // If user is logged in
				if(is_user_logged_in()) : ?>
				<div class="user-box">

					<?php // Main Menu
					wp_nav_menu( array( 'theme_location' => 'woocommerce-menu', 'menu_id' => 'mobile-woo-menu', 'depth' => '2', 'menu_class' => 'mobile-ul' ) );
					?>
					
					<ul class="user-menu mobile-ul">
						<li class="user-menu-item menu-item">

							<?php
							if ( class_exists( 'WooCommerce' ) ) :
							?>
							<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="woocommerce-account-link">My Account</a>
							<?php endif; ?>

						</li>
						<li class="user-menu-item menu-item">
							
							<a href="<?php echo wp_logout_url(home_url()); ?>" class="header-logout-link">Logout</a>

						</li>
					</ul>
					
				</div>
				<?php endif; ?>

			</div>

		</nav>
		<!-- END MOBILE MENU -->

	</header>

	<?php if(!is_front_page()) : ?>
	<div class="header-spacer"></div>
	<?php endif; ?>

	<div id="content" class="site-content">
