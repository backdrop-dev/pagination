<?php
/**
 * Pagination service provider.
 *
 * This is the service provider for the pagination system. The primary purpose
 * of this is to use the container as a factory for creating pagination. By
 * adding this to the container, it also allows the implementation to be
 * overwritten. That way, any custom functions will utilize the new class.
 *
 * @package   Backdrop Pagination
 * @link      https://github.com/backdrop-dev/pagination
 *
 * @author    Benjamin Lu
 * @copyright 2019, Benjamin Lu
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Backdrop\Pagination;

use Backdrop\Core\ServiceProvider;
use Backdrop\Pagination\Contracts\Pagination as PaginationContract;

/**
 * Attr provider class.
 */
class Provider extends ServiceProvider {

    /**
     * Binds the implementation of the attributes contract to the container.
     *
     * @return void
     */
    public function register(): void {
        $this->app->bind( PaginationContract::class, Pagination::class );
    }

}