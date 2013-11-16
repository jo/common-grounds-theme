<?php
/**
 * commongrounds functions and definitions
 *
 * @package commongrounds
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( 'commongrounds_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function commongrounds_setup() {
    global $cap, $content_width;

    // This theme styles the visual editor with editor-style.css to match the theme style.
    add_editor_style();

    if ( function_exists( 'add_theme_support' ) ) {

		/**
		 * Add default posts and comments RSS feed links to head
		*/
		add_theme_support( 'automatic-feed-links' );
		
		/**
		 * Enable support for Post Thumbnails on posts and pages
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		*/
		add_theme_support( 'post-thumbnails' );
		
		/**
		 * Enable support for Post Formats
		*/
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
	
    }

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on commongrounds, use a find and replace
	 * to change 'commongrounds' to the name of your theme in all the template files
	*/
	load_theme_textdomain( 'commongrounds', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/ 
    register_nav_menus( array(
        'left'  => __( 'Header left menu', 'commongrounds' ),
        'center'  => __( 'Header center menu', 'commongrounds' ),
        'right'  => __( 'Header right menu', 'commongrounds' ),
    ) );

}
endif; // commongrounds_setup
add_action( 'after_setup_theme', 'commongrounds_setup' );


/**
 * Enqueue scripts and styles
 */
function commongrounds_scripts() {
	// load bootstrap css
	wp_enqueue_style( 'commongrounds-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.min.css' );
	
	// load bootstrap js
	wp_enqueue_script('commongrounds-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery'), '3.1', true );

	// load the glyphicons
	wp_enqueue_style( 'commongrounds-glyphicons', get_template_directory_uri() . '/includes/resources/glyphicons/css/bootstrap-glyphicons.css' );
		
	wp_enqueue_style( 'commongrounds-style', get_stylesheet_uri() );

	// load bootstrap wp js
	wp_enqueue_script( 'commongrounds-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'commongrounds-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'commongrounds-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'commongrounds_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';

/**
 * Load Slides
 */
require get_template_directory() . '/includes/slides.php';
