<?php

namespace App\Console\Commands;

use App\Jobs\CalculateTotalCostJob;
use Illuminate\Console\Command;


class ExecuteTotal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'execute:total:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Llama a Queue calcula total ordenes y costo.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Job 
        CalculateTotalCostJob::dispatch()->onQueue('totals');

        $this->info('Command ExecuteTotal');

        return Command::SUCCESS;
    }
}
