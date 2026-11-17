# Changelog

## 1.0.0 - November 17, 2026
The first official release of Backdrop Pagination for Backdrop 2.0. It outputs accessible, customizable pagination for posts, multi-page (singular) posts and comments, with the functions `Backdrop\Pagination\display()`, `render()` and `pagination()`.

Changed:
* Requires `backdrop-dev/framework` ^2.0, which the package uses but didn't declare.
* Uses the `Backdrop\Proxies\App` proxy, which is available as soon as an application is created, instead of the `Backdrop\App` alias, which only exists after the application has booted.
* Removed `minimum-stability` and `prefer-stable` from `composer.json`; the root project sets those.
