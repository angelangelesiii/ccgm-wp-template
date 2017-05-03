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
if(is_page()) $fpClass .= 'page'
?>

</head>

<body <?php body_class($fpClass); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ccgm' ); ?></a>

	<header id="ccgm-header" class="site-header top-position <?php echo $fpClass; ?>">
		<div class="wrapper-big">
			<nav class="header-nav .clearfix">

				<div class="mobile-menu-button-container hide-for-large">
					<button class="mobile-menu-button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>

				<div class="logo-container clearfix">
					<a href="<?php echo home_url(); ?>" class="clearfix">
						<img src="<?php echo get_template_directory_uri().'/images/branding/logo-boxed-white.png' ?>" alt="Logo" class="logo">
						<h1>CCGM</h1>
					</a>
				</div>

				<div class="menu-container show-for-large">
					<?php
					wp_nav_menu( array( 'theme_location' => 'header-menu-1', 'menu_id' => 'main-nav-menu', 'depth' => '2' ) );
					?>
				</div>
			</nav>
		</div>
	</header>

	<?php if(!is_front_page()) : ?>
	<div class="header-spacer"></div>
	<?php endif; ?>

	<div id="content" class="site-content">
