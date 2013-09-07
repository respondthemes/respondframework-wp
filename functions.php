<?php
// Initialize Slightly Modified Options Framework
require_once ('admin/index.php');
?>

<?php 
// Gumby Styles
function register_gumby_styles() {
	$file_dir = get_bloginfo( 'template_directory' );
	
	// Register Gumby styles
	wp_register_style( 'gumby_styles', $file_dir . '/css/gumby.css', false, '1.0', 'all' );
	
	// Enqueue Gumby Styles
	wp_enqueue_style( 'gumby_styles' );
}
add_action( 'wp_enqueue_scripts', 'register_gumby_styles' );

/** Loads Gumby Javascript **/
function gumby() {
	$file_dir = get_bloginfo( 'template_directory' );
	
	// Register the gumby scripts
	wp_register_script( 'modernizer', $file_dir . '/js/libs/modernizr-2.6.2.min.js', array( 'jquery'), false, true);
	wp_register_script( 'gumby_js', $file_dir . '/js/libs/gumby.js', array( 'jquery', 'modernizer' ), false, true );
	wp_register_script( 'gumby_js_retina', $file_dir . '/js/libs/ui/gumby.retina.js', array( 'jquery' ), false, true );
	wp_register_script( 'gumby_js_fixed', $file_dir . '/js/libs/ui/gumby.fixed.js', array( 'jquery' ), false, true );
	wp_register_script( 'gumby_js_skiplink', $file_dir . '/js/libs/ui/gumby.skiplink.js', array( 'jquery' ), false, true );
	wp_register_script( 'gumby_js_checkbox', $file_dir . '/js/libs/ui/gumby.checkbox.js', array( 'jquery' ), false, true );
	wp_register_script( 'gumby_js_radiobtn', $file_dir . '/js/libs/ui/gumby.radiobtn.js', array( 'jquery' ), false, true );
	wp_register_script( 'gumby_js_tabs', $file_dir . '/js/libs/ui/gumby.tabs.js', array( 'jquery' ), false, true );
	wp_register_script( 'gumby_js_navbar', $file_dir . '/js/libs/ui/gumby.navbar.js', array( 'jquery' ), false, true );
	wp_register_script( 'gumby_js_fittext', $file_dir . '/js/libs/ui/gumby.fittext.js', array( 'jquery' ), false, true );
	wp_register_script( 'gumby_js_validation', $file_dir . '/js/libs/ui/gumby.jquery.validation.js', array( 'jquery' ), false, true );
	wp_register_script( 'gumby_js_init', $file_dir . '/js/libs/gumby.init.js', array( 'jquery' ), false, true );
	wp_register_script( 'gumby_js_min', $file_dir . '/js/libs/gumby.min.js', array( 'jquery', 'jquery-1.10.1.min.js', 'jquery-1.9.1.min.js', 'jquery-2.0.2.min.js', 'jquery.mobile.custom.min.js' ), 'false', 'true' );
	wp_register_script( 'gumby_js_plugins', $file_dir . '/js/plugins.js', array( 'jquery' ), false, true );
	wp_register_script( 'gumby_js_main', $file_dir . '/js/main.js', array( 'jquery' ), false, true );
	
	// Enqueue the gumby scripts
	wp_enqueue_script( 'modernizer' );
	wp_enqueue_script( 'gumby_js_retina' );
	wp_enqueue_script( 'gumby_js_fixed' );
	wp_enqueue_script( 'gumby_js_skiplink' );
	wp_enqueue_script( 'gumby_js_checkbox' );
	wp_enqueue_script( 'gumby_js_radiobtn' );
	wp_enqueue_script( 'gumby_js_tabs' );
	wp_enqueue_script( 'gumby_js_navbar' );
	wp_enqueue_script( 'gumby_js_tittext' );
	wp_enqueue_script( 'gumby_js_validation' );
	wp_enqueue_script( 'gumby_js_init' );
	wp_enqueue_script( 'gumby_js_min' );
	wp_enqueue_script( 'gumby_js_plugins' );
	wp_enqueue_script( 'gumby_js_main' );
	
}
add_action( 'wp_enqueue_scripts', 'gumby' );

//Initialize the update checker.
require 'theme-updates/theme-update-checker.php';
$example_update_checker = new ThemeUpdateChecker(
	'respondframework',                                            //Theme folder name, AKA "slug". 
	'http://localhost/wordpress/htdocs/wp-content/themes/respondframework/theme-updates/info.json' //URL of the metadata file.
);

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


/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package	   TGM-Plugin-Activation
 * @subpackage Example
 * @version	   2.3.6
 * @author	   Thomas Griffin <thomas@thomasgriffinmedia.com>
 * @author	   Gary Jones <gamajo@gamajo.com>
 * @copyright  Copyright (c) 2012, Thomas Griffin
 * @license	   http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin pre-packaged with a theme
		/**
		* array(
		*	'name'     				=> 'TGM Example Plugin', // The plugin name
		*	'slug'     				=> 'tgm-example-plugin', // The plugin slug (typically the folder name)
		*	'source'   				=> get_stylesheet_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source
		*	'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
		*	'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
		*	'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
		*	'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
		*	'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		*),
		**/

		// Required plugins from the WordPress Plugin Repository
		array( 'name' => 'Contact Form 7', 'slug' => 'contact-form-7', 'required' => true, 'force_activation' => true ),
		array( 'name' => 'Responsive Slider', 'slug' => 'responsive-slider', 'required' => true, 'force_activation' => true ),
		array( 'name' => 'Page Builder', 'slug' => 'siteorigin-panels', 'required' => true, 'force_activation' => true ),

	);

	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'tgmpa';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', $theme_text_domain ),
			'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );

}