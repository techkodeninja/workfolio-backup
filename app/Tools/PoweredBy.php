<?php
/**
 * Powered By Text Class.
 *
 * A simple class for randomly displaying a "powered by..." line of text in the
 * theme footer.
 *
 * @package   Workfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2024 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/workfolio
 */

namespace Workfolio\Tools;

/**
 * Powered by class.
 *
 * @since  1.0.0
 * @access public
 */
class PoweredBy {

	/**
	 * Returns an array of all the powered by quotes.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public static function all() {

		return apply_filters( 'workfolio/poweredby/collection', [
			esc_html__( 'Powered by heart and soul.', 'workfolio' ),
			esc_html__( 'Powered by crazy ideas and passion.', 'workfolio' ),
			esc_html__( 'Powered by the thing that holds all things together in the universe.', 'workfolio' ),
			esc_html__( 'Powered by love.', 'workfolio' ),
			esc_html__( 'Powered by the vast and endless void.', 'workfolio' ),
			esc_html__( 'Powered by the code of a maniac.', 'workfolio' ),
			esc_html__( 'Powered by peace and understanding.', 'workfolio' ),
			esc_html__( 'Powered by coffee.', 'workfolio' ),
			esc_html__( 'Powered by sleepness nights.', 'workfolio' ),
			esc_html__( 'Powered by the love of all things.', 'workfolio' ),
			esc_html__( 'Powered by something greater than myself.', 'workfolio' ),
			esc_html__( 'Powered by whispers from the future.', 'workfolio' ),
			esc_html__( 'Powered by the fusion of technology and dreams.', 'workfolio' ),
			esc_html__( 'Powered by the strength found in kindness.', 'workfolio' ),
			esc_html__( 'Powered by the melodies of the unseen world.', 'workfolio' ),
			esc_html__( 'Powered by the courage of the unheard voices.', 'workfolio' ),
			esc_html__( 'Powered by the beauty of the human spirit.', 'workfolio' ),
			esc_html__( 'Powered by the quest for eternal wisdom.', 'workfolio' ),
			esc_html__( 'Powered by the energy of uncharted galaxies.', 'workfolio' ),
			esc_html__( 'Powered by the magic hidden in plain sight.', 'workfolio' ),
			esc_html__( 'Powered by the legacy of the ancients.', 'workfolio' ),
			esc_html__( 'Powered by the dance between light and darkness.', 'workfolio' ),
			esc_html__( 'Powered by the touch of the morning sun.', 'workfolio' ),
			esc_html__( 'Powered by the secrets of the deep ocean.', 'workfolio' ),
			esc_html__( 'Powered by the echoes of laughter and joy.', 'workfolio' ),
			esc_html__( 'Powered by the relentless pursuit of truth.', 'workfolio' ),
		] );
	}

	/**
	 * Displays a random powered by quote.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public static function display() {

		echo esc_html( static::render() );
	}

	/**
	 * Returns a random powered by quote.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public static function render() {

		$collection = static::all();

		return $collection[ array_rand( $collection, 1 ) ];
	}
}