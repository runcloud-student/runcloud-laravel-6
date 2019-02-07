<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Illuminate\Support\Facades\Log;

use App\QueueTask;

class ProcessQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $queuetask;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(QueueTask $queue)
    {
        $this->queuetask = $queue;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // to simulate how long the process will run
        sleep (rand(5, 10));
        // Log::info('Showing : '.$this->queue->name);

        $this->queuetask->status = 'done';
        $this->queuetask->save();
    }
}
