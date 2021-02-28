<?php

namespace ZeroToProd\LaravelQueryString;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ZeroToProd\LaravelQueryString\Commands\LaravelQueryStringCommand;

class LaravelQueryStringServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-query-string')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_query_string_table')
            ->hasCommand(LaravelQueryStringCommand::class);
    }
}
