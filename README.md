# laravel-swoole-ide-helper

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