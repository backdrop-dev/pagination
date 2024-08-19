<?php
/**
 * Pagination functions.
 *
 * Helper functions and template tags related to pagination.
 *
 * @package   Backdrop Pagination
 * @link      https://github.com/backdrop-dev/pagination
 *
 * @author    Benjamin Lu
 * @copyright 2019, Benjamin Lu
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Backdrop\Pagination;

use Backdrop\App;
use Backdrop\Pagination\Contracts\Pagination;

if ( ! function_exists( __NAMESPACE__ . '\\pagination' ) ) {
    /**
     * Outputs the pagination output.
     *
     * @param string $context
     * @param array  $args
     * @return \Backdrop\Pagination\Contracts\Pagination
     */
    function pagination( $context = 'posts', array $args = [] ) {
        return App::resolve(
            Pagination::class,
            compact( 'context', 'args' )
        );
    }
}

if ( ! function_exists( __NAMESPACE__ . '\\display' ) ) {
    /**
     * Outputs the pagination output.
     *
     * @param string $context
     * @param array  $args
     * @return void
     */
    function display( $context = 'posts', array $args = [] ) {
        pagination( $context, $args )->make()->display();
    }
}

if ( ! function_exists( __NAMESPACE__ . '\\render' ) ) {
    /**
     * Returns the pagination output.
     *
     * @param string $context
     * @param array  $args
     * @return string
     */
    function render( $context = 'posts', array $args = [] ) {
        return pagination( $context, $args )->make()->render();
    }
}