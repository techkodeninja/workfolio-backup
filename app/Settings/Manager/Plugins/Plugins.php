<?php
/**
 * Themes Collection.
 *
 * Houses the collection of themes in a single array-object.
 *
 * @package   Workfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2024 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/workfolio
 */

 namespace Workfolio\Settings\Manager\Plugins;

use Workfolio\Tools\Collection;

/**
 * Themes class.
 *
 * @since  1.2.0
 * @access public
 */
class Plugins extends Collection {

	/**
	 * Adds a new theme to the collection.
	 *
	 * @since  1.2.0
	 * @access public
	 * @param  string  $name
	 * @param  array   $value
	 * @return void
	 */
	public function add( $name, $value ) {
		
		parent::add( $name, new Plugin( $name, $value ) );
	}
}