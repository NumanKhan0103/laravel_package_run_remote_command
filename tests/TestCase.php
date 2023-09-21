<?php

namespace Nexus\LaravelRemoteCommand\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nexus\LaravelRemoteCommand\LaravelRemoteCommandServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Nexus\\LaravelRemoteCommand\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelRemoteCommandServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-remote-command_table.php.stub';
        $migration->up();
        */
    }
}
