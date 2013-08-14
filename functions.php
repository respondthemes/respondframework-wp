<?php
function global_gumby_styles() {
	wp_register_style( 'gumby_styles', get_template_directory_uri() . '/css/gumby.css');
	wp_enqueue_style( 'gumby_styles' );
}
add_action ( 'wp_enqueue_scripts', 'global_gumby_styles' );

/** Loads Gumby Javascript **/
function global_gumby_js() {
	wp_register_script( 
		'gumby_js', 
		get_template_directory_uri() . '/js/libs/gumby.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_js' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_js' );

/** Loads Gumby Retina **/
function global_gumby_js_retina() {
	wp_register_script( 
		'gumby_js_retina', 
		get_template_directory_uri() . '/js/libs/ui/gumby.retina.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_js' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_js_retina' );

/** Loads Gumby Fixed **/
function global_gumby_js_fixed() {
	wp_register_script( 
		'gumby_js_fixed', 
		get_template_directory_uri() . '/js/libs/ui/gumby.fixed.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_js' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_js_fixed' );

/** Loads Gumby Skiplink **/
function global_gumby_js_skiplink() {
	wp_register_script( 
		'gumby_js_skiplink', 
		get_template_directory_uri() . '/js/libs/ui/gumby.skiplink.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_js_skiplink' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_js_skiplink' );

/** Loads Gumby Toggleswitch **/
function global_gumby_js_toggleswitch() {
	wp_register_script( 
		'gumby_js_toggleswitch', 
		get_template_directory_uri() . '/js/libs/ui/gumby.toggleswitch.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_js_toggleswtich' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_js_toggleswitch' );

/** Loads Gumby Checkbox **/
function global_gumby_js_checkbox() {
	wp_register_script( 
		'gumby_js_checkbox', 
		get_template_directory_uri() . '/js/libs/ui/gumby.checkbox.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_js_checkbox' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_js_checkbox' );

/** Loads Radiobtn **/
function global_gumby_js_radiobtn() {
	wp_register_script( 
		'gumby_js_radiobtn', 
		get_template_directory_uri() . '/js/libs/ui/gumby.radiobtn.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_js_radiobtn' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_js_radiobtn' );

/** Loads Gumby Tabs **/
function global_gumby_js_tabs() {
	wp_register_script( 
		'gumby_js_tabs', 
		get_template_directory_uri() . '/js/libs/ui/gumby.tabs.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_js_tabs' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_js_tabs' );

/** Loads Gumby navbar **/
function global_gumby_js_navbar() {
	wp_register_script( 
		'gumby_js_navbar', 
		get_template_directory_uri() . '/js/libs/ui/gumby.navbar.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_js_navbar' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_js_navbar' );

/** Loads Gumby fittext **/
function global_gumby_js_fittext() {
	wp_register_script( 
		'gumby_js_fittext', 
		get_template_directory_uri() . '/js/libs/ui/gumby.fittext.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_js_fittext' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_js_fittext' );

/** Loads Gumby jQuery validation **/
function global_gumby_js_jquery_validation() {
	wp_register_script( 
		'gumby_js_jquery_validation', 
		get_template_directory_uri() . '/js/libs/ui/gumby.jquery.validation.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_js_jquery_validation' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_js_jquery_validation' );

/** Loads Gumby init **/
function global_gumby_js_gumby_init() {
	wp_register_script( 
		'gumby_js_gumby_init', 
		get_template_directory_uri() . '/js/libs/gumby.init.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_js_gumby_init' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_js_gumby_init' );

/** Loads Gumby min **/
function global_gumby_min() {
	wp_register_script(
		'gumby_min',
		get_template_directory_uri() . '/js/libs/gumby.min.js',
		array( 'jquery', 'jquery-1.10.1.min.js', 'jquery-1.9.1.min.js', 'jquery-2.0.2.min.js', 'jquery.mobile.custom.min.js' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_min' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_min' );

/** Loads Gumby plugins **/
function global_gumby_plugins() {
	wp_register_script(
		'gumby_plugins',
		get_template_directory_uri() . '/js/plugins.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_plugins' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_plugins' );

/** Loads gumby main **/
function global_gumby_main() {
	wp_register_script(
		'gumby_main',
		get_template_directory_uri() . '/js/main.js',
		array( 'jquery' ),
		false,
		true
	);
	wp_enqueue_script( 'gumby_main' );
}
add_action( 'wp_enqueue_scripts', 'global_gumby_main' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( '_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function _s_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files
	 */
	load_theme_textdomain( '_s', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', '_s' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // _s_setup
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function _s_register_custom_background() {
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);

	$args = apply_filters( '_s_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( ! empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', '_s_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _s_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_s' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _s_scripts() {
	wp_enqueue_style( '_s-style', get_stylesheet_uri() );

	wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_s-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

/**
 * WordPress.com-specific functions and definitions.
 */
//require get_template_directory() . '/inc/wpcom.php';
