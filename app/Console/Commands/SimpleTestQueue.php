<?php

namespace App\Console\Commands;

use App\Jobs\SimpleTestNotification;
use Illuminate\Console\Command;

class SimpleTestQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:queue {--onConnection=sqs} {--onQueue=eko-test-sqs}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test SQS Connection';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $onQueue = $this->option('onQueue');
        $onConnection = $this->option('onConnection');

        SimpleTestNotification::dispatch()->onConnection($onConnection)->onQueue($onQueue);
        $this->info("Job dispatched succesfully! [${onConnection}:${onQueue}]");
    }
}
