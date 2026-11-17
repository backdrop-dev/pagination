# Backdrop Pagination
Backdrop Pagination is an enhanced pagination add-on for [Backdrop](https://github.com/backdrop-dev/framework). It is based on the core `paginate_links()` function, but gives theme authors full control over the markup and classes. It handles posts, multi-page (singular) posts and comments.

## Requirements
* [ClassicPress](https://www.classicpress.net)
* [WordPress](https://wordpress.org)
* [PHP 7.4](https://www.php.net/releases/7_4_0.php)
* [Composer](https://getcomposer.org)

## Installation
<pre>
composer require backdrop-dev/pagination
</pre>

## Registering and Booting
Add the provider before booting the Backdrop application.
<pre>
$theme->provider( Backdrop\Pagination\Provider::class );
</pre>

## Usage
The context is `posts` (default), `singular` or `comments`. The second argument overrides the default arguments, such as `prev_text` and `next_text`.
<pre>
// Print the pagination.
Backdrop\Pagination\display( 'posts', [
	'prev_text' => 'Previous',
	'next_text' => 'Next'
] );

// Return it as a string.
$html = Backdrop\Pagination\render( 'comments' );
</pre>

Nothing is printed when there is only one page. The default markup is a `nav` with the classes `pagination pagination--{context}`, a `ul.pagination__items` and `li.pagination__item` items with `pagination__anchor` links, and `pagination__anchor--current` for the current page. The classes, tags and other arguments can be changed with the arguments above or with the filters `Backdrop/pagination/{context}/defaults`, `Backdrop/pagination/{context}/args` and `Backdrop/pagination/{context}`.

## Copyright and License
This project is licensed under the GNU General Public License, version 2 or later.

2019-2026 © Benjamin Lu
