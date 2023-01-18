<?php

namespace Maggomann\FilamentOnlyIconDisplay\Tests;

use Filament\FilamentServiceProvider;
use Livewire\LivewireServiceProvider;
use Maggomann\FilamentOnlyIconDisplay\FilamentOnlyIconDisplayServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            FilamentServiceProvider::class,
            FilamentOnlyIconDisplayServiceProvider::class,
            LivewireServiceProvider::class,
        ];
    }
}
