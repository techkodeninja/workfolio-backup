<?php
/**
 * Theme bootstrap file.
 *
 * This file is used to create a new application instance and bind items to the
 * container. This is the heart of the application.
 *
 * @package   Workfolio
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2024 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/workfolio
 */

# ------------------------------------------------------------------------------
# Create a new application.
# ------------------------------------------------------------------------------
#
# Creates the one true instance of the Backdrop application. You may access
# this instance via the `Backdrop\app()` function or `Backdrop\App` static class
# after the application has booted.

$theme = Backdrop\booted() ? Backdrop\app() : new Backdrop\Core\Application();

# ------------------------------------------------------------------------------
# Register service providers with the application.
# ------------------------------------------------------------------------------
#
# Before booting the application, add any service providers that are necessary
# for running the theme. Service providers are essentially the backbone of the
# bootstrapping process.

$theme->provider( Backdrop\Fonts\Provider::class );
$theme->provider( Backdrop\Languages\Provider::class );
$theme->provider( Backdrop\Mix\Provider::class );
$theme->provider( Backdrop\Pagination\Provider::class );
$theme->provider( Backdrop\Template\Hierarchy\Provider::class );
$theme->provider( Backdrop\Template\Manager\Provider::class );
$theme->provider( Backdrop\Theme\Provider::class );
$theme->provider( Backdrop\View\Provider::class );

# ------------------------------------------------------------------------------
# Register additional service providers for the theme.
# ------------------------------------------------------------------------------
#
# These are the additional providers that are crucial for the theme to operate 
# before booting the application. These service providers offer supplementary 
# features to the theme.

$theme->provider( Workfolio\Provider::class );
$theme->provider( Workfolio\Customize\Provider::class );
$theme->provider( Workfolio\Settings\Provider::class );

# ------------------------------------------------------------------------------
# Perform bootstrap actions.
# ------------------------------------------------------------------------------
#
# Creates an action hook for child themes (or even plugins) to hook into the
# bootstrapping process and add their own bindings before the app is booted by
# passing the application instance to the action callback.

do_action( 'workfolio/bootstrap', $theme );

# ------------------------------------------------------------------------------
# Bootstrap the application.
# ------------------------------------------------------------------------------
#
# Calls the application `boot()` method, which launches the application. Pat
# yourself on the back for a job well done.

$theme->boot();