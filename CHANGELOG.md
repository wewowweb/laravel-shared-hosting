# Changelog

All notable changes to `laravel-shared-hosting` will be documented in this file.

*This package is still in active development, so you might want to [watch](https://github.com/wewowweb/laravel-shared-hosting/subscription) the repository to be notified of future changes.*

## v0.1 - 2019-05-13

#### php artisan shared:install
**php artisan shared:install** command makes deployment of Laravel application to your shared hosting server. It modifies the original Laravel `public/index.php` file, modifying the autoload and bootstrap functions, so that their path can also be loaded from an .env file.