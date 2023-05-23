<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TestDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Database Connection';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $dbconnect = DB::connection()->getPDO();
            $dbname = DB::connection()->getDatabaseName();
            echo "Connected successfully to the database. Database name is :".$dbname."\n";
         } catch(Exception $e) {
            echo "Error in connecting to the database\n";
         }
    }
}
