# Blade directive for short human readable numbers (i.e. 3K+, 4M+)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sandervanhooft/laravel-blade-readable-numbers.svg?style=flat-square)](https://packagist.org/packages/sander-van-hooft/laravel-blade-readable-numbers)
[![Build Status](https://img.shields.io/travis/sandervanhooft/laravel-blade-readable-numbers/master.svg?style=flat-square)](https://travis-ci.org/sandervanhooft/laravel-blade-readable-numbers)
[![Total Downloads](https://img.shields.io/packagist/dt/sandervanhooft/laravel-blade-readable-numbers.svg?style=flat-square)](https://packagist.org/packages/sandervanhooft/laravel-blade-readable-numbers)
<!-- [![SensioLabsInsight](https://img.shields.io/sensiolabs/i/xxxxxxxxx.svg?style=flat-square)](https://insight.sensiolabs.com/projects/xxxxxxxxx)
[![Quality Score](https://img.shields.io/scrutinizer/g/sandervanhooft/laravel-blade-readable-numbers.svg?style=flat-square)](https://scrutinizer-ci.com/g/sandervanhooft/laravel-blade-readable-numbers) -->
Adds the `@readable_int` directive to Laravel's Blade templating system. This way you can shorten numbers into strings like `123K+`.

## Installation

You can install the package via composer:

```bash
composer require sandervanhooft/laravel-blade-readable-numbers
```

## Usage

```php
@readable_int(123456) // outputs 123K+
@readable_int(123456789) // outputs 123M+
@readable_int(123456789012) // outputs 123B+
@readable_int(123456789012345) // outputs 123T+
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

If you discover any security related issues, please email info@sandervanhooft.com instead of using the issue tracker.

## Credits

- [Sander van Hooft](https://github.com/sandervanhooft)
- [Appstract](https://github.com/appstract/laravel-blade-directives) for blade directive testing methods
- [All Contributors](../../contributors)

## Never miss a new package release
Subscribe to the newsletter at [sandervanhooft.com](http://www.sandervanhooft.com) to learn about the latest Laravel packages and tricks.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
