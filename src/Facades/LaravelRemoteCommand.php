<?php

namespace Nexus\LaravelRemoteCommand\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nexus\LaravelRemoteCommand\LaravelRemoteCommand
 */
class LaravelRemoteCommand extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nexus\LaravelRemoteCommand\LaravelRemoteCommand::class;
    }
}
