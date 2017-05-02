<?php
/**
 * CCGM Theme by Zimit Media functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CCGM_Theme_by_Zimit_Media
 */

// ACF PRO SETUP

// include_once('advanced-custom-fields/acf.php');
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
     // update path
    $path = get_stylesheet_directory() . '/advanced-custom-fields-pro/';
    // return
    return $path;
}
 
// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
    // update path
    $dir = get_stylesheet_directory_uri() . '/advanced-custom-fields-pro/';
    // return
    return $dir;
}

// 3. Hide ACF field group menu item
// add_filter('acf/settings/show_admin', '__return_false');

// 4. Include ACF
include_once( get_stylesheet_directory() . '/advanced-custom-fields-pro/acf.php' );

// Google Maps API key
function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyBPL_70m6Amg9Tej-BHQVE0fZons4Jl1PY');
}

add_action('acf/init', 'my_acf_init');

// END ACF SETUP

// WOOCOMMERCE SETUP

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="wc-main" class="wc-container">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' ); // declare WooCommerce support
}

// END WOOCOMMERCE SETUP


if ( ! function_exists( 'ccgm_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ccgm_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on CCGM Theme by Zimit Media, use a find and replace
	 * to change 'ccgm' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ccgm', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header-menu-1' => esc_html__( 'Header Main Menu', 'ccgm' ),
		'fotoer-menu-3' => esc_html__( 'Main Footer Menu', 'ccgm' ),
		'footer-menu-2' => esc_html__( 'Footer Small Menu', 'ccgm' ),
		'woocommerce-menu' => esc_html__( 'Shopping Account Menu', 'ccgm' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ccgm_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'ccgm_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ccgm_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ccgm_content_width', 640 );
}
add_action( 'after_setup_theme', 'ccgm_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ccgm_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ccgm' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ccgm' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ccgm_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ccgm_scripts() {

	// STYLES

	wp_enqueue_style( 'ccgm-style', get_stylesheet_uri() );

	// Fontawesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/css/fa/css/font-awesome.min.css' );

	// Google Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Raleway:200,400,700,900' );

	// Foundation Grid
	wp_enqueue_style( 'foundation', get_template_directory_uri().'/css/foundation.css' );

	// Main and Front CSS
	wp_enqueue_style( 'main', get_template_directory_uri().'/css/main.css' );
	if (is_front_page()) wp_enqueue_style( 'front', get_template_directory_uri().'/css/front.css' );

	// SlickJS CSS
	wp_enqueue_style( 'slick-css', get_template_directory_uri().'/css/slick.css' );

	// ACF Google Maps
	wp_enqueue_style( 'acf-map', get_template_directory_uri().'/css/acf-map.css' );



	// SCRIPTS

	wp_enqueue_script( 'ccgm-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ccgm-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// JQuery (FOOTER)
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
    wp_enqueue_script( 'jquery' );

    // GSAP
	wp_enqueue_script( 'GSAP', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', false, false, true);

	// ScrollMagic
	wp_enqueue_script( 'scrollmagic-main', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', false, false, true);
	wp_enqueue_script( 'scrollmagic-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', false, false, true);
	wp_enqueue_script( 'scrollmagic-indicators', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', false, false, true);

	// Main and Front JS
	wp_enqueue_script( 'main-js', get_template_directory_uri().'/js/main.js', false, false, true );
	if (is_front_page()) wp_enqueue_script( 'front-js', get_template_directory_uri().'/js/front.js', false, false, true );

	// Slick JS
	if (is_front_page()) wp_enqueue_script( 'slick-js', get_template_directory_uri().'/js/slick.min.js', false, false, true );

	// Google Maps JS
	wp_enqueue_script( 'gmaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBPL_70m6Amg9Tej-BHQVE0fZons4Jl1PY', false, false, true);

	// Typed JS
	if (is_front_page()) wp_enqueue_script( 'typed-js', get_template_directory_uri().'/js/typed.js', false, false, true );

	// ACF MAP JS
	if (is_front_page()) wp_enqueue_script( 'acf-map', get_template_directory_uri().'/js/acf-map.js', false, false, true );

}
add_action( 'wp_enqueue_scripts', 'ccgm_scripts' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


// ===========================================
// ACF Pro Options Page Instantiate
// ===========================================

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site Options',
		'menu_title'	=> 'Site Options',
		'menu_slug' 	=> 'site-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url'		=> 'dashicons-analytics',
		'position'		=> '60'
	));
	
}
