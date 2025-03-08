<?php
/**
 * WeedCo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WeedCo
 */

if ( ! defined( 'WEEDCO_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'WEEDCO_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function weedco_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on WeedCo, use a find and replace
		* to change 'weedco' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'weedco', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'weedco' ),
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
			'weedco_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'weedco_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function weedco_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'weedco_content_width', 640 );
}
add_action( 'after_setup_theme', 'weedco_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function weedco_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'weedco' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'weedco' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'weedco_widgets_init' );

/**
 * Register navigation menus
 */
function weedco_register_menus() {
	register_nav_menus(
		array(
			'primary-menu' => esc_html__('Primary Menu', 'weedco'),
		)
	);
}
add_action('init', 'weedco_register_menus');

/**
 * Enqueue scripts and styles.
 */
function weedco_scripts() {
	wp_enqueue_style( 'weedco-style', get_stylesheet_uri(), array(), WEEDCO_VERSION );
	wp_enqueue_style( 'weedco-header', get_template_directory_uri() . '/assets/css/header.css', array(), WEEDCO_VERSION );
	wp_enqueue_style( 'weedco-footer', get_template_directory_uri() . '/assets/css/footer.css', array(), WEEDCO_VERSION );
	
	wp_enqueue_script( 'weedco-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), WEEDCO_VERSION, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'weedco_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Create default primary menu on theme activation
 */
function weedco_create_default_menu() {
	$menu_name = 'Primary Menu';
	$menu_exists = wp_get_nav_menu_object($menu_name);

	if (!$menu_exists) {
		$menu_id = wp_create_nav_menu($menu_name);

		// Create menu items
		$menu_items = array(
			'Weed Control' => home_url('/weed-control'),
			'Pest Control' => home_url('/pest-control'),
			'Termites' => home_url('/termites'),
			'About Us' => home_url('/about-us'),
			'Contact Us' => home_url('/contact-us'),
			'Pest Profiles' => home_url('/pest-profiles'),
		);

		foreach ($menu_items as $label => $url) {
			wp_update_nav_menu_item($menu_id, 0, array(
				'menu-item-title' => $label,
				'menu-item-url' => $url,
				'menu-item-status' => 'publish',
				'menu-item-type' => 'custom',
			));
		}

		// Assign menu to primary-menu location
		$locations = get_theme_mod('nav_menu_locations');
		$locations['primary-menu'] = $menu_id;
		set_theme_mod('nav_menu_locations', $locations);
	}
}
add_action('after_switch_theme', 'weedco_create_default_menu');

// Temporary function to create menu - Remove after menu is created
function weedco_temp_create_menu() {
	if (!get_option('weedco_menu_created')) {
		weedco_create_default_menu();
		update_option('weedco_menu_created', true);
	}
}
add_action('init', 'weedco_temp_create_menu');

