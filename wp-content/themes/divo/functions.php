<?php

/**
 * divo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package divo
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function divo_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on divo, use a find and replace
		* to change 'divo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('divo', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'divo'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'divo_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'divo_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function divo_content_width()
{
	$GLOBALS['content_width'] = apply_filters('divo_content_width', 640);
}
add_action('after_setup_theme', 'divo_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function divo_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'divo'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'divo'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'divo_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function divo_scripts()
{
	wp_enqueue_style('fancy_styles', get_stylesheet_directory_uri() . '/css/jquery.fancybox.min.css', array(), time());
	wp_enqueue_style('divo-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('divo-style', 'rtl', 'replace');
	wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/inc/swiper/swiper-bundle.min.css', array(), time());
	wp_enqueue_style('fonts', get_stylesheet_directory_uri() . '/css/fonts.css', array(), _S_VERSION);

	wp_enqueue_script('ajax-block-loader', get_template_directory_uri() . '/js/ajax.js', [], null, true);

	wp_localize_script('ajax-block-loader', 'ajax_data', [
		'url' => admin_url('admin-ajax.php')
	]);

	wp_deregister_script('jquery');
	wp_enqueue_script('theme-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true);
	wp_enqueue_script('divo-scripts', get_template_directory_uri() . '/js/script.js', array(), _S_VERSION, true);
	wp_enqueue_script('countdown', get_template_directory_uri() . '/js/countdown.js', array(), null, true);
	wp_enqueue_script('spin_scripts', get_template_directory_uri() . '/js/jquery.spincrement.min.js', array(), null, true);
	wp_enqueue_script('divo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('fancy-scripts', get_stylesheet_directory_uri() . '/js/jquery.fancybox.min.js', array(), null, true);
	wp_enqueue_script('swiper-scripts', get_stylesheet_directory_uri() . '/inc/swiper/swiper-bundle.min.js', array(), null, true);
	wp_enqueue_script('slider-js', get_stylesheet_directory_uri() . '/inc/swiper/slider-scripts.js', array(), null, true);
	wp_enqueue_script('js-accordion-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array(), null, true);
	wp_enqueue_script('accordion-scripts', get_stylesheet_directory_uri() . '/js/accordion.js', array(), null, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'divo_scripts');

add_action('admin_enqueue_scripts', function () {
	wp_enqueue_style('my_wp_admin', get_template_directory_uri() . '/css/admin-styles.css');
}, 99);

add_action('widgets_init', 'register_widgets');
function register_widgets()
{
	register_sidebar(array(
		'name'          => 'footer-widget',
		'id'            => "footer-widget1",
		'description'   => 'Блок футера-1',
		'class'         => 'footer__inner__widget1',
		'before_widget' => '',
		'after_widget'  => '',
	));

	register_sidebar(array(
		'name'          => 'footer-widget',
		'id'            => "footer-widget2",
		'description'   => 'Блок футера-2',
		'class'         => 'footer__inner__widget2',
		'before_widget' => '',
		'after_widget'  => '',
	));

	register_sidebar(array(
		'name'          => 'footer-widget',
		'id'            => "footer-widget3",
		'description'   => 'Блок футера-3',
		'class'         => 'footer__inner__widget3',
		'before_widget' => '',
		'after_widget'  => '',
	));
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

require 'inc/carbon-fields.php';
require 'inc/logo.php';

add_action('wp_ajax_load_template_block', 'ajax_load_template_block');
add_action('wp_ajax_nopriv_load_template_block', 'ajax_load_template_block');

function ajax_load_template_block()
{
	$block = isset($_POST['block']) ? sanitize_text_field($_POST['block']) : '';

	// Белый список допустимых шаблонов
	$allowed_blocks = [
		'hero-block',
		'services',
		'works',
		'types',
		'order',
		'express',
		'catalog',
		'nums',
		'pays',
		'benefits',
		'production',
		'complect',
		'delivery',
		'offer',
		'faq',
		'feedback',

		'houses-hero-block',
		'houses-services',
		'houses-works',
		'houses-types',
		'houses-catalog',
		'houses-offer',
		'houses-feedback',

		'pldoors-hero-block',
		'pldoors-services',
		'pldoors-works',
		'pldoors-types',
		'pldoors-catalog',
		'pldoors-offer',
		'pldoors-feedback',

		'nb-hero-block',
		'nb-services',
		'nb-works',
		'nb-types',
		'nb-catalog',
		'nb-offer',
		'nb-feedback',

	];

	if (in_array($block, $allowed_blocks)) {
		get_template_part('template-parts/' . sanitize_file_name($block));
	}

	wp_die();
}


# Прячем страницу архива автора
if( ! is_admin() ){
	add_filter( 'pre_handle_404', 'remove_author_pages_page' );
	add_filter( 'author_link', 'remove_author_pages_link' );

	// Ставим 404 статус
	function remove_author_pages_page( $false ) {
		if ( is_author() ) {
			global $wp_query;
			$wp_query->set_404();
			status_header( 404 );
			nocache_headers();

			return true; // для обрыва хука
		}

		return $false;
	}

	// изменяем ссылку архива автора
	function remove_author_pages_link( $content ) {
		return home_url();
	}
}