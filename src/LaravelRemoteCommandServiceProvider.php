<?php

namespace Nexus\LaravelRemoteCommand;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Nexus\LaravelRemoteCommand\Commands\LaravelRemoteCommandCommand;

class LaravelRemoteCommandServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {

        $package
            ->name('laravel-remote-command')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-remote-command_table')
            ->hasCommand(LaravelRemoteCommandCommand::class);
    }
}
