# Laravel nova responsive theme

![Packagist License](https://img.shields.io/packagist/l/yaroslawww/nova-responsive-theme?color=%234dc71f)
[![Packagist Version](https://img.shields.io/packagist/v/yaroslawww/nova-responsive-theme)](https://packagist.org/packages/yaroslawww/nova-responsive-theme)
[![Total Downloads](https://img.shields.io/packagist/dt/yaroslawww/nova-responsive-theme)](https://packagist.org/packages/yaroslawww/nova-responsive-theme)
[![Build Status](https://scrutinizer-ci.com/g/yaroslawww/nova-responsive-theme/badges/build.png?b=master)](https://scrutinizer-ci.com/g/yaroslawww/nova-responsive-theme/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/yaroslawww/nova-responsive-theme/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/yaroslawww/nova-responsive-theme/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/yaroslawww/nova-responsive-theme/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/yaroslawww/nova-responsive-theme/?branch=master)


### Since laravel nova v4 - package is abandoned

This package is fork from [gregoriohc/laravel-nova-theme-responsive](https://github.com/gregoriohc/laravel-nova-theme-responsive)
 but with changes for custom purposes. It is recommended to use the main package and not the fork.

## Installation

Install the package via composer:

```bash
composer require yaroslawww/nova-responsive-theme
```

Install refresh styles:

```shell
php artisan nova:responsive-theme:refresh
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="NovaResponsiveTheme\ThemeServiceProvider" --tag="config"
```

## Credits

- [![Think Studio](https://yaroslawww.github.io/images/sponsors/packages/logo-think-studio.png)](https://think.studio/)
