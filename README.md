# Laravel nova responsive theme

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
