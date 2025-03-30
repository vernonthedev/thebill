<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify the developer';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->notify('Hello Web Artisan', 'Love beautiful code? We do too!');
    }
}
