<?php

namespace Chapdel\Installer;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Chapdel\Installer\Commands\InstallerCommand;

class InstallerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('app-installer')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_app-installer_table')
            ->hasCommand(InstallerCommand::class);
    }
}
