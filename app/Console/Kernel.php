<?php

namespace App\Console;

use App\Console\Commands\KeepAlive;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The  atcat
     */
    protected $commands = [
        KeepAlive::class
    ];

    protected function schedule(Schedule $schedule): void
    {
         $schedule->command('marcosdipaolo:keepAlive')->everyFiveMinutes();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
