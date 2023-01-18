<?php

namespace Maggomann\FilamentOnlyIconDisplay;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentOnlyIconDisplayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-only-icon-display');
    }
}
