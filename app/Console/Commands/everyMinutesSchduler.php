<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class everyMinutesSchduler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will clean a db table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::table('table_task')->delete();
        echo 'Operation done';
    }
}
