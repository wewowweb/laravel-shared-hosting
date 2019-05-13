# Laravel Shared Hosting

![We Wow Web - Laravel Shared Hosting logo](https://wewowweb.com/github/laravel-shared-hosting/logo.png)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wewowweb/laravel-shared-hosting.svg?style=flat-square)](https://packagist.org/packages/wewowweb/laravel-shared-hosting)
[![Build Status](https://img.shields.io/travis/wewowweb/laravel-shared-hosting/master.svg?style=flat-square)](https://travis-ci.org/wewowweb/laravel-shared-hosting)
[![Quality Score](https://img.shields.io/scrutinizer/g/wewowweb/laravel-shared-hosting.svg?style=flat-square)](https://scrutinizer-ci.com/g/wewowweb/laravel-shared-hosting)
[![Total Downloads](https://img.shields.io/packagist/dt/wewowweb/laravel-shared-hosting.svg?style=flat-square)](https://packagist.org/packages/wewowweb/laravel-shared-hosting)

A package that will simplify deployment and management of Laravel application on your shared hosting server.

## Why?

As developers, we're used to having a near picture perfect development environment, and we expect the same out of our production server. Sometimes however, you are not in control of deciding on the production environment. May it be cost or features - such as integrated mail servers and graphical user interfaces for managing certain business tasks - can ultimately direct the client toward a cheap shared host, that may not have the bells and whistles you would want.

If your Laravel app will indeed live on such a server, you might want this package to help.

*This package is still in active development, so you might want to [watch](https://github.com/wewowweb/laravel-shared-hosting/subscription) the repository to be notified of future changes.*

## Installation

You can install the package via composer:

```bash
composer require wewowweb/laravel-shared-hosting
```

## Usage

### php artisan shared:install

Once the package has been installed, run the command:

``` bash
php artisan shared:install
``` 
**shared:install** command will allow you to overrride Laravel's default `public/index.php` file. The only change is the modification to the autoload and bootstrap functions, so that their path can be loaded from an .env file, which will save you all the instances where manual corrections of that file in development/production environment are necessary.

If you would like to have your autoload and bootstrap path set by .env variables, make sure to create them in the .env file like so:

``` bash
SHARED_AUTO_LOADER=<your path here>
SHARED_BOOTSTRAP=<your path here>
``` 



### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email **gal@wewowweb.com** instead of using the issue tracker.

## Credits

- [We Wow Web](https://github.com/wewowweb)
- [Gal Jakic](https://github.com/morpheus7CS)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.