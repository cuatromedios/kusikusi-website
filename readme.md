# website

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/kusikusi/website.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/kusikusi/website.svg?style=flat-square)](https://packagist.org/packages/kusikusi/website)

## Install
`composer require kusikusi/website`

## Usage

#### Export all the assets ...
```shell
php artisan vendor:publish --provider="Kusikusi\WebsiteServiceProvider"
```


#### Or Export individual Assets

Configuration
```shell
php artisan vendor:publish --provider="Kusikusi\WebsiteServiceProvider" --tag="config"
```

HtmlController
```shell
php artisan vendor:publish --provider="Kusikusi\WebsiteServiceProvider" --tag="controller"
```

Route file for Laravel

```shell
php artisan vendor:publish --provider="Kusikusi\WebsiteServiceProvider" --tag="route"
```

Include the route in your `RouteServiceProvider.php` file, in the boot method, as the last routes:

```php
Route::middleware('web')
    ->group(base_path('routes/website.php'));
```


## Testing
Run the tests with:

``` bash
vendor/bin/phpunit
```

## Changelog
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Cuatromedios](https://github.com/kusikusi)
- [All Contributors](https://github.com/kusikusi/website/contributors)

## Security
If you discover any security-related issues, please email dev@cuatromedios instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.