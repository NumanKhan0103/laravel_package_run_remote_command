<?php

namespace Nexus\LaravelRemoteCommand\Commands;

use Illuminate\Console\Command;
use Spatie\Ssh\Ssh;

class LaravelRemoteCommandCommand extends Command
{
    public $signature = 'remote {command}';

    public $description = 'Execute command on remote server';

    public function handle(): int
    {
        $process = Ssh::create('user', 'example.com')
            ->onOutput(function ($type, $line) {
                echo $line;
            })
            ->execute('your favorite command');
    }
}
