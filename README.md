
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Laravel package for integrating with the PayFast payment gateway.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ellissystems/laravel-payfast.svg?style=flat-square)](https://packagist.org/packages/ellissystems/laravel-payfast)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ellissystems/laravel-payfast/run-tests?label=tests)](https://github.com/ellissystems/laravel-payfast/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ellissystems/laravel-payfast/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ellissystems/laravel-payfast/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ellissystems/laravel-payfast.svg?style=flat-square)](https://packagist.org/packages/ellissystems/laravel-payfast)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Dev setup




## Installation

You can install the package via composer:

```bash
composer require ellissystems/laravel-payfast
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-payfast-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-payfast-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-payfast-views"
```

## Usage

```php
$laravelPayFast = new EllisSystems\LaravelPayFast();
echo $laravelPayFast->echoPhrase('Hello, EllisSystems!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Timothy](https://github.com/FantaGraape)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
