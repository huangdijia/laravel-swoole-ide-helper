# laravel-swoole-ide-helper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/huangdijia/laravel-swoole-ide-helper.svg?style=flat-square)](https://packagist.org/packages/huangdijia/laravel-swoole-ide-helper)
[![Total Downloads](https://img.shields.io/packagist/dt/huangdijia/laravel-swoole-ide-helper.svg?style=flat-square)](https://packagist.org/packages/huangdijia/laravel-swoole-ide-helper)
[![GitHub license](https://img.shields.io/github/license/huangdijia/laravel-swoole-ide-helper)](https://github.com/huangdijia/laravel-swoole-ide-helper)

## Installation

```bash
composer require huangdijia/laravel-swoole-ide-helper --dev
```

Register for Lumen, add Command to `app/Console/Kernel.php`

```php
protected $commands = [
    // ...
    \Huangdijia\SwooleIdeHelper\Commands\GenerateCommand::class,
    // ...
];
```

## Usage

```bash
php artisan ide-helper:swoole
```
