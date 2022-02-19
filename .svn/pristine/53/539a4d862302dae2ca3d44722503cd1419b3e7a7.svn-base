<?php
/**
 * Functions
 *
 * @package      EAStarter
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/

/*
BEFORE MODIFYING THIS THEME:
Please read the instructions here (private repo): https://github.com/billerickson/EA-Starter/wiki
Devs, contact me if you need access
*/

define( 'EA_STARTER_VERSION', '1.0' );


//================================================================================================
// Includes
//================================================================================================
// General cleanup
include_once( get_template_directory() . '/inc/wordpress-cleanup.php' );

// Theme
include_once( get_template_directory() . '/inc/tha-theme-hooks.php' );
include_once( get_template_directory() . '/inc/helper-functions.php' );
include_once( get_template_directory() . '/inc/loop.php' );
include_once( get_template_directory() . '/inc/template-tags.php' );
include_once( get_template_directory() . '/inc/ccg-custom-options.php' ); // to add settings to Appearance -> Customize
include_once( get_template_directory() . '/inc/ccg-helpers.php' );
include_once( get_template_directory() . '/inc/enqueue.php' );

//================================================================================================
// Include the Custom Theme Markup for this site, using THA hooks
include_once( get_template_directory() . '/partials/header.php' );
include_once( get_template_directory() . '/partials/footer.php' );
include_once( get_template_directory() . '/partials/nav.php' );
//================================================================================================

//================================================================================================
// Include the Custom Blocks for this site
include_once( get_template_directory() . '/inc/ccg-block-creation.php' );
//================================================================================================

// Editor
include_once( get_template_directory() . '/inc/disable-editor.php' );
include_once( get_template_directory() . '/inc/tinymce.php' );
include_once( get_template_directory() . '/inc/theme-colors.php' );

// Functionality
include_once( get_template_directory() . '/inc/login-logo.php' );

// Plugin Support
include_once( get_template_directory() . '/inc/acf.php' );



/**
 * Theme Fonts URL
 *
 */
function ea_theme_fonts_url() {
	return false;
}

if ( ! function_exists( 'ea_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ea_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'ea-starter', get_template_directory() . '/languages' );

	// Editor Styles
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-style.css' );

	// Admin Bar Styling
	add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Body open hook
	add_theme_support( 'body-open' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Set the content width in pixels, based on the theme's design and stylesheet.
	 *
	 */
	 $GLOBALS['content_width'] = apply_filters( 'ea_content_width', 768 );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Navigation Menu', 'ea-starter' ),
		'secondary' => esc_html__( 'Secondary Navigation Menu', 'ea-starter' ),
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

	// Gutenberg

	// -- Responsive embeds
	add_theme_support( 'responsive-embeds' );

	// -- Wide Images
	add_theme_support( 'align-wide' );

	// -- Disable custom font sizes
	add_theme_support( 'disable-custom-font-sizes' );

	// -- Editor Font Styles
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name'      => __( 'Small', 'ea-starter' ),
			'shortName' => __( 'S', 'ea-starter' ),
			'size'      => 14,
			'slug'      => 'small'
		),
		array(
			'name'      => __( 'Normal', 'ea-starter' ),
			'shortName' => __( 'M', 'ea-starter' ),
			'size'      => 20,
			'slug'      => 'normal'
		),
		array(
			'name'      => __( 'Large', 'ea-starter' ),
			'shortName' => __( 'L', 'ea-starter' ),
			'size'      => 24,
			'slug'      => 'large'
		),
	) );

}
endif;
add_action( 'after_setup_theme', 'ea_setup' );

/**
 * Template Hierarchy
 *
 */
function ea_template_hierarchy( $template ) {

	if( is_home() || is_search() )
		$template = get_query_template( 'archive' );
	return $template;
}
add_filter( 'template_include', 'ea_template_hierarchy' );
