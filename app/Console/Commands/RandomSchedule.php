<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Scheduling;

class RandomSchedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rc:scheduling';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add random string in scheduling model';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $new = new Scheduling();
        $new->random = substr(str_shuffle($permitted_chars), 0, 16);
        $new->save();
    }
}
