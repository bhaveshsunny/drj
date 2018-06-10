<?php
/**
 * Viralblog functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Viralblog
 */

define('VIRALBLOG_LITE_PRO_URL', 'https://themecountry.com/themes/viralblog/');


if ( ! function_exists( 'viralblog_lite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function viralblog_lite_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Viralblog, use a find and replace
	 * to change 'viralblog-lite' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'viralblog-lite', get_template_directory() . '/languages' );

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
	set_post_thumbnail_size( 250, 200, true );
	add_image_size( 'viralblog-lite-grid-thumbnails', 398 , 200, true );
	add_image_size( 'viralblog-lite-first-thumbnails', 585 , 468, true );
	add_image_size( 'viralblog-lite-single-thumbnails', 830 , 400, true );
	add_image_size( 'viralblog-lite-related-thumbnails', 250 , 180, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' 		=> __( 'Primary Menu', 'viralblog-lite' ),
		'secondary' 	=> __( 'Top Menu', 'viralblog-lite' ),
		'footer' 		=> __('Footer Menu', 'viralblog-lite')
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'viralblog_lite_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	add_theme_support( 'custom-logo', array(
		'height'      => 90,
		'width'       => 300,
		'flex-height' => false,
		'flex-width'  => false,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	// This theme styles the visual editor to resemble the theme style.
	$google_font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Open+Sans:400,300,700,600,400italic,700italic' );
	add_editor_style( array( 'css/editor-style.css', $google_font_url ) );
}
endif; // viralblog_lite_setup
add_action( 'after_setup_theme', 'viralblog_lite_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function viralblog_lite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'viralblog_lite_content_width', 640 );
}
add_action( 'after_setup_theme', 'viralblog_lite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function viralblog_lite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'viralblog-lite' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 1', 'viralblog-lite' ),
		'id'            => 'footer-sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 2', 'viralblog-lite' ),
		'id'            => 'footer-sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 3', 'viralblog-lite' ),
		'id'            => 'footer-sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget 4', 'viralblog-lite' ),
		'id'            => 'footer-sidebar-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header Banner', 'viralblog-lite' ),
		'id'            => 'viralblog-late-header-banner',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="hbanner-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="hbanner-widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Home Banner', 'viralblog-lite' ),
		'id'            => 'viralblog-late-home-banner',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="hmbanner-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="hmbanner-widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'viralblog_lite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function viralblog_lite_scripts() {
	wp_enqueue_style( 'pingraphy-google-font-style', '//fonts.googleapis.com/css?family=Open+Sans:400,300,700,600,400italic,700italic');

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .  '/css/font-awesome.min.css' );
	wp_enqueue_style( 'viralblog-lite-style', get_stylesheet_uri() );

	wp_enqueue_script( 'viralblog-lite-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '20160504', true );
	wp_localize_script( 'viralblog-lite-script', 'AdminAjaxURL', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	wp_enqueue_script( 'viralblog-lite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'viralblog_lite_scripts' );


/**
|------------------------------------------------------------------------------
| Custom Tags Cloud
|------------------------------------------------------------------------------
|
*/
if( !function_exists('viralblog_lite_custom_tag_cloud_widget')) {
	function viralblog_lite_custom_tag_cloud_widget($args) {
		$args['largest'] = 14; //largest tag
		$args['smallest'] = 14; //smallest tag
		$args['unit'] = 'px'; //tag font unit
		return $args;
	}
	add_filter( 'widget_tag_cloud_args', 'viralblog_lite_custom_tag_cloud_widget' );
}



/** 
|------------------------------------------------------------------------------
|  Remove comment box
|
*/
function viralblog_lite_comments_form_defaults($default) {
        $default['comment_notes_after'] = '';
        return $default;
}

add_filter('comment_form_defaults','viralblog_lite_comments_form_defaults');

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
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';