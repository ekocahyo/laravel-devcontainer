<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class TestRedis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:redis';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Redis Connection';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $redis = Redis::connection();
        dump($redis);
    }
}
