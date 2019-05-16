<?php

namespace Huangdijia\SwooleIdeHelper;

use Illuminate\Support\ServiceProvider;

class SwooleIdeHelperServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->registerCommands();
    }

    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\GenerateCommand::class,
            ]);
        }
    }
}