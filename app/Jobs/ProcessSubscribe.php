<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessSubscribe implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $message;

    /**
     * Create a new job instance.
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        echo "Running an hello world job ...\n";
        echo "Queue Broker: AWS SQS\n";
        echo "Processing message: ".$this->message."\n";
    }
}
