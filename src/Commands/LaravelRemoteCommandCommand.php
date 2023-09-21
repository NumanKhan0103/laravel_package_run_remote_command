<?php

namespace Nexus\LaravelRemoteCommand\Commands;

use Illuminate\Console\Command;

class LaravelRemoteCommandCommand extends Command
{
    public $signature = 'laravel-remote-command';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
