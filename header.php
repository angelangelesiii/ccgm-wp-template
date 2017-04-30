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
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ccgm' ); ?></a>

	<?php 
	// If front page, add 'front-page' class
	$fpClass = '';
	if(is_front_page()) $fpClass = 'front-page';
	?>

	<header id="ccgm-header" class="site-header <?php echo $fpClass; ?>">
		<div class="wrapper-big">
			<nav class="header-nav">
				<div class="logo-container">
					<h1><a href="<?php echo home_url(); ?>">CCGM</a></h1>
				</div>
				<div class="menu-container">
					<?php
						wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'mobile-main-menu' ) ); // Calls the primary main menu for mobile navigation.
						?>
				</div>
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
