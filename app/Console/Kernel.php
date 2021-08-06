<?php

namespace App\Console;

use App\Console\Commands\SyncWorkshopsCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('schedule-monitor:sync')->dailyAt('04:56');
        $schedule->command('schedule-monitor:clean')->daily();
        $schedule->command('backup:clean')->daily()->at('01:00');
        $schedule->command('backup:run')->daily()->at('02:00');
        $schedule->command('horizon:snapshot')->everyFiveMinutes();
        $schedule->command(SyncWorkshopsCommand::class)->hourly();

        // Mailcoach
        $schedule->command('mailcoach:calculate-statistics')->everyMinute();
        $schedule->command('mailcoach:send-scheduled-campaigns')->everyMinute();
        $schedule->command('mailcoach:send-campaign-summary-mail')->hourly();
        $schedule->command('mailcoach:send-email-list-summary-mail')->mondays()->at('9:00');
        $schedule->command('mailcoach:run-automation-triggers')->everyMinute()->runInBackground();
        $schedule->command('mailcoach:run-automation-actions')->everyMinute()->runInBackground();
        $schedule->command('mailcoach:delete-old-unconfirmed-subscribers')->daily();
        $schedule->command('mailcoach:cleanup-processed-feedback')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
