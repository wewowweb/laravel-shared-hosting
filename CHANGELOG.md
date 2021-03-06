# Changelog

All notable changes to `laravel-shared-hosting` will be documented in this file.

*This package is still in active development, so you might want to [watch](https://github.com/wewowweb/laravel-shared-hosting/subscription) the repository to be notified of future changes.*

## v0.1.6 - 2020-03-04

- Remove beyondcode/laravel-package-tools from dependency list

## v0.1.5 - 2020-03-04

- Add support for Laravel 7.x

## v0.1.4 - 2019-09-09

- Fix TravisCI configuration

## v0.1.3 - 2019-09-09

- Add support for Laravel 6.x

## v0.1.2 - 2019-06-24

-  Fix dependencies

## v0.1.1 - 2019-05-25

-  Remove .phpunit.result.cache from source control
-  Remove duplicate shared:install command registration in service provider
-  Rename LaravelSharedHostingTest to LaravelSharedHostingInstallCommandTest

## v0.1.0 - 2019-05-13

#### php artisan shared:install
**php artisan shared:install** command makes deployment of Laravel application to your shared hosting server. It modifies the original Laravel `public/index.php` file, modifying the autoload and bootstrap functions, so that their path can also be loaded from an .env file.
