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
	wp_enqueue_style( 'weedco-layout', get_template_directory_uri() . '/assets/css/layout.css', array(), WEEDCO_VERSION );
	wp_enqueue_style( 'weedco-blocks', get_template_directory_uri() . '/assets/css/blocks.css', array(), WEEDCO_VERSION );
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
 * Block Patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';

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

/**
 * Add shortcode for request quote button with shield
 */
function weedco_request_button_shortcode($atts) {
	// Parse attributes
	$atts = shortcode_atts(
		array(
			'text' => 'Request a Quote',
			'url' => home_url('/request-a-quote'),
			'class' => 'request-quote-button',
		),
		$atts,
		'weedco_button'
	);
	
	// Get the shield SVG
	$shield_svg = '<svg width="46" height="62" viewBox="0 0 46 62" fill="none" xmlns="http://www.w3.org/2000/svg" class="button-arrow">
		<path d="M44.9907 13.2733C28.1432 13.2733 23.3074 5.0911 22.9954 1V60.321C41.1532 56.6845 45.2247 41.5322 44.9907 34.4107V13.2733Z" fill="black" stroke="white" stroke-width="2"></path>
		<path d="M1.00932 13.2733C17.8568 13.2733 22.6926 5.0911 23.0046 1V60.321C4.84681 56.6845 0.775331 41.5322 1.00932 34.4107V13.2733Z" fill="#0FB5B6" stroke="white" stroke-width="2"></path>
		<path fill-rule="evenodd" clip-rule="evenodd" d="M22.9954 33.2743V60.3211C41.1532 56.6845 45.2247 41.5323 44.9907 34.4108V33.2743H22.9954Z" fill="#0FB5B6"></path>
		<path d="M22.9954 33.2743V32.2743H21.9954V33.2743H22.9954ZM22.9954 60.3211H21.9954V61.5412L23.1917 61.3016L22.9954 60.3211ZM44.9907 34.4108H43.9907V34.4272L43.9912 34.4436L44.9907 34.4108ZM44.9907 33.2743H45.9907V32.2743H44.9907V33.2743ZM21.9954 33.2743V60.3211H23.9954V33.2743H21.9954ZM23.1917 61.3016C41.9968 57.5354 46.2338 41.7947 45.9901 34.3779L43.9912 34.4436C44.2155 41.2699 40.3096 55.8336 22.799 59.3405L23.1917 61.3016ZM45.9907 34.4108V33.2743H43.9907V34.4108H45.9907ZM44.9907 32.2743H22.9954V34.2743H44.9907V32.2743Z" fill="white"></path>
		<path fill-rule="evenodd" clip-rule="evenodd" d="M23.0046 33.2743V60.3211C4.84681 56.6845 0.775331 41.5323 1.00932 34.4108V33.2743H23.0046Z" fill="black"></path>
		<path d="M23.0046 33.2743V32.2743H24.0046V33.2743H23.0046ZM23.0046 60.3211H24.0046V61.5412L22.8083 61.3016L23.0046 60.3211ZM1.00932 34.4108H2.00932V34.4272L2.00878 34.4436L1.00932 34.4108ZM1.00932 33.2743H0.00932312V32.2743H1.00932V33.2743ZM24.0046 33.2743V60.3211H22.0046V33.2743H24.0046ZM22.8083 61.3016C4.00323 57.5354 -0.233828 41.7947 0.0098629 34.3779L2.00878 34.4436C1.78449 41.2699 5.69038 55.8336 23.201 59.3405L22.8083 61.3016ZM0.00932312 34.4108V33.2743H2.00932V34.4108H0.00932312ZM1.00932 32.2743H23.0046V34.2743H1.00932V32.2743Z" fill="white"></path>
	</svg>';
	
	// Build the button HTML
	$button = '<a href="' . esc_url($atts['url']) . '" class="' . esc_attr($atts['class']) . '">';
	$button .= esc_html($atts['text']);
	$button .= $shield_svg;
	$button .= '</a>';
	
	return $button;
}
add_shortcode('weedco_button', 'weedco_request_button_shortcode');

