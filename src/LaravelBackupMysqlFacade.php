<?php

namespace Zarulizham\LaravelBackupMysql;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zarulizham\LaravelBackupMysql\LaravelBackupMysql
 */
class LaravelBackupMysqlFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-backup-mysql';
    }
}
