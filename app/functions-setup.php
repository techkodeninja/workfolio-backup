<?php
/**
 * Theme setup functions.
 *
 * This file holds basic theme setup functions executed on appropriate hooks
 * with some opinionated priorities based on theme dev, particularly working
 * with child theme devs/users, over the years. I've also decided to use
 * anonymous functions to keep these from being easily unhooked. WordPress has
 * an appropriate API for unregistering, removing, or modifying all of the
 * things in this file. Those APIs should be used instead of attempting to use
 * `remove_action()`.
 *
 * @package   Workfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2024 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/workfolio
 */

namespace Workfolio;

use function Backdrop\Fonts\enqueue;
use function Backdrop\Theme\is_classicpress;

/**
 * Set up theme support.  This is where calls to `add_theme_support()` happen.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'after_setup_theme', function() {

	// Sets the theme content width.
	$GLOBALS['content_width'] = 640;

	// Load theme translations.
	load_theme_textdomain( 'workfolio', get_parent_theme_file_path( 'public/lang' ) );

	// Automatically add the `<title>` tag.
	add_theme_support( 'title-tag' );

	// Automatically add feed links to `<head>`.
	add_theme_support( 'automatic-feed-links' );

	// Adds featured image support.
	add_theme_support( 'post-thumbnails' );
} );

/**
 * Register menus.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'init', function() {

	register_nav_menus( [
		'primary' => esc_html_x( 'Primary Navigation', 'nav menu location', 'workfolio' ),
		'footer'  => esc_html_x( 'Footer Navigation',  'nav menu location', 'workfolio' ),
		'social'  => esc_html_x( 'Social Navigation',  'nav menu location', 'workfolio' )
	] );

}, 5 );

/**
 * Register sidebars.
 *
 * @since  2.1.0
 * @access public
 * @return void
 */
add_action( 'widgets_init', function() {

	$args = [
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	];

	$sidebars = [
		[
			'id' => 'primary',
			'name' => esc_html__( 'Primary', 'workfolio' )
		],
		[
			'id' => 'secondary',
			'name' => esc_html__( 'Secondary', 'workfolio' )
		],
	];

	foreach ( $sidebars as $sidebar ) {
		register_sidebar( array_merge( $sidebar, $args ) );
	}
}, 5 );

/**
 * Changes the theme template path to the `public/views` folder.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
add_filter( 'backdrop/template/path', function() {

	return 'public/views';
} );

/**
 * Enqueue Google Fonts in WordPress.
 *
 * This function hooks into the 'wp_enqueue_scripts' action to enqueue the specified
 * Google Fonts: 'fira-sans', 'merriweather', and 'tangerine'.
 */
add_action( 'wp_enqueue_scripts', function() {

	/**
	 * Enqueue a list of Google Fonts.
	 *
	 * @param array $files An array of Google Fonts to be enqueued.
	 */
	array_map( function( $file ) {
		enqueue( $file );
	}, [
		'fira-sans',
		'merriweather',
		'tangerine'
	] );
} );

/**
 * Registers custom templates with ClassicPress.
 *
 * @since  1.0.0
 * @access public
 * @param  object  $templates
 * @return void
 */
add_action( 'backdrop/templates/register', function( $templates ) {

	$templates->add( 'template-home.php', [
		'label' => esc_html__( 'Home', 'workfolio' )
	] );
} );