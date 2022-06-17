<?php

namespace EllisSystems\LaravelPayFast;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use EllisSystems\LaravelPayFast\Commands\LaravelPayFastCommand;

class LaravelPayFastServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        
        $package
            ->name('laravel-payfast')
            ->hasConfigFile()
            ->hasRoute('web')
            ->hasMigration('create_laravel-payfast_table')
            ->hasCommand(LaravelPayFastCommand::class);
    }
}
