<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;

// Define the "inspire" command (default example)
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Schedule the rental status update command
app()->booted(function () {
    $schedule = app(Schedule::class);
    $schedule->command('rental:update-status')->hourly();
});

