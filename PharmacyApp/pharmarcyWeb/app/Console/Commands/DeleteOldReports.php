<?php

namespace App\Console\Commands;

use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DeleteOldReports extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete-reports';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deletes records that are older than 24 hours';

    /**
     * Execute the console command.
     */
    public function handle()
    {
      Report::where('created_at', '<', Carbon::now()->subHours(24))->delete();
      $this->info('Old records deleted successfully.');
    }
}
