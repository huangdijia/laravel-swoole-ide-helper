<?php

namespace Huangdijia\SwooleIdeHelper\Commands;

use Illuminate\Console\Command;
use Swoole\IDEHelper\ExtensionDocument;

class GenerateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ide-helper:swoole';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate autocompletion for swoole';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $doc = new ExtensionDocument('chinese', dirname(__DIR__) . '/output', dirname(__DIR__) . '/config');
        $doc->export();
        $this->info("IDE help files for Swoole {$doc->getSwooleVersion()} are generated successfully.");
    }

    protected function getSwooleVersion()
    {
        return (new ReflectionExtension($this->extensionName))->getVersion();
    }
}
