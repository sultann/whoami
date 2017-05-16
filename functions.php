<?php
/**
 * whoami functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package whoami
 */

if ( ! function_exists( 'whoami_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function whoami_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on whoami, use a find and replace
	 * to change 'whoami' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'whoami', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'whoami' ),
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
	add_theme_support( 'custom-background', apply_filters( 'whoami_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'whoami_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function whoami_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'whoami_content_width', 640 );
}
add_action( 'after_setup_theme', 'whoami_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function whoami_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'whoami' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'whoami' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'whoami_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Add custom post types
 */
require get_template_directory() . '/inc/custom-post.php';

/**
 * Add metabox
 */

if ( file_exists( dirname( __FILE__ ) . '/libs/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/libs/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/libs/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/libs/CMB2/init.php';
}

require get_template_directory() . '/libs/cmb2-conditionals/cmb2-conditionals.php';
//require get_template_directory() . '/libs/cmb2-conditionals/example-functions.php';
require get_template_directory() . '/libs/CMB2/example-functions.php';
require get_template_directory() . '/inc/meta-box.php';
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
