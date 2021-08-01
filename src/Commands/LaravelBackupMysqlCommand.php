<?php

namespace Zarulizham\LaravelBackupMysql\Commands;

use Illuminate\Console\Command;

class LaravelBackupMysqlCommand extends Command
{
    public $signature = 'laravel-backup-mysql';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
