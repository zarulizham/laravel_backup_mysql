<?php

namespace Zarulizham\LaravelBackupMysql;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Zarulizham\LaravelBackupMysql\Commands\LaravelBackupMysqlCommand;

class LaravelBackupMysqlServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-backup-mysql')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-backup-mysql_table')
            ->hasCommand(LaravelBackupMysqlCommand::class);
    }
}
