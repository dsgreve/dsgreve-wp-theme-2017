<?php
/**
 * dsgreve functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dsgreve
 */

if ( ! function_exists( 'dsgreve_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dsgreve_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on dsgreve, use a find and replace
	 * to change 'dsgreve' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'dsgreve', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'dsgreve' ),
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
	add_theme_support( 'custom-background', apply_filters( 'dsgreve_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'dsgreve_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dsgreve_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dsgreve_content_width', 640 );
}
add_action( 'after_setup_theme', 'dsgreve_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dsgreve_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dsgreve' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dsgreve' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dsgreve_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dsgreve_scripts() {
	// Add Bootstrap CSS CDN
  wp_enqueue_style('dsgreve-bootstrap-css','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');

	wp_enqueue_style( 'dsgreve-style', get_stylesheet_uri() );

	//Homepage only styling
	if ( is_page( 'home-page' ) ) {
    wp_enqueue_style('dsgreve-fsvs', get_template_directory_uri() . '/hp-style.css', array(), true);
  }

	wp_enqueue_style( 'dsgreve-homepage-style', get_stylesheet_uri() );

	// Add Google fonts
  wp_enqueue_style('dsgreve-google-fonts','https://fonts.googleapis.com/css?family=Inconsolata:400,700');

	// Add Google fonts
	wp_enqueue_style('dsgreve-google-fonts','"https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700"');

	// Add Tether because bootstrap
  wp_enqueue_script('dsgeve-bootstrap-js', 'https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js', array('jquery'), true);

	// ADD Custom JS
	wp_enqueue_script('dsgreve-dsg-script', get_template_directory_uri() . '/js/dsg-script.js', array(), true);

	// ADD FSVS JS
	if ( is_page( 'home-page' ) ) {
    wp_enqueue_script('dsgreve-fsvs', get_template_directory_uri() . '/js/fsvs.js', array(), true);
  }

  // Add Boootstrap js CDN
  wp_enqueue_script('dsgreve-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery'), true);

	wp_enqueue_script( 'dsgreve-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'dsgreve-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dsgreve_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
