<?php
/**
 * Asset-related functions and filters.
 *
 * This file holds some setup actions for scripts and styles as well as a helper
 * functions for work with assets.
 *
 * @package   Workfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2024 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/workfolio
 */

namespace Workfolio;

use function Backdrop\Mix\asset;

/**
 * Enqueue scripts/styles for the front end.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'wp_enqueue_scripts', function() {

	// Enqueue theme styles.
	wp_enqueue_style( 'workfolio-screen', asset( 'css/screen.css' ), null, null );

	// Enqueue theme scripts.
	wp_enqueue_script( 'workfolio-app', asset( 'js/app.js' ), [ 'jquery' ], null, true );

	// Enqueue theme navigation.
	wp_enqueue_script( 'workfolio-navigation', asset( 'js/navigation.js' ), null, null, true );
	wp_localize_script( 'workfolio-navigation', 'workfolioScreenReaderText', [
		'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'workfolio' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'workfolio' ) . '</span>',
	] );

	// Loads ClassicPress' comment-reply script where appropriate.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );