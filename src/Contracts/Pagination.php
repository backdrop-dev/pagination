<?php
/**
 * Pagination interface.
 *
 * Defines the interface that pagination classes must usse.
 *
 * @package   Backdrop Pagination
 * @link      https://github.com/backdrop-dev/pagination
 *
 * @author    Benjamin Lu
 * @copyright 2019, Benjamin Lu
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Backdrop\Pagination\Contracts;

use Backdrop\Contracts\Displayable;
use Backdrop\Contracts\Renderable;

/**
 * Pagination interface.
 */
interface Pagination extends Displayable, Renderable {

    /**
     * Builds the pagination.
     *
     * @return \Backdrop\Pagination\Contracts\Pagination
     */
    public function make();

}