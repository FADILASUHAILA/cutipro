<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetAnnualLeave extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reset-annual-leave';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        \App\Models\User::query()->update(['jml_cuti' => 16]);

        $this->info('Annual leave balance has been reset for all users.');
    }
}
