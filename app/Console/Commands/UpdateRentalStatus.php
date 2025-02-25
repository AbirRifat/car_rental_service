<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Rental;
use Carbon\Carbon;
class UpdateRentalStatus extends Command
{
    protected $signature = 'rental:update-status';
    protected $description = 'Update rental status dynamically based on rental dates';

    public function handle()
    {
        $currentDate = Carbon::now()->toDateString();
    
        Rental::all()->each(function ($rental) use ($currentDate) {
           
                
                // Check if the current date is between the rental start and end date (inclusive)
                if ($currentDate >= Carbon::parse($rental->start_date)->toDateString() && $currentDate <= Carbon::parse($rental->end_date)->toDateString()) {
                    $rental->status = 'Ongoing';
                    //Log::info('Status: Ongoing');
                    // Update the car's availability to 0 (not available)
                    $car = $rental->car; // Assuming the relation exists
                    $car->availability = 0;
                    $car->save();
                } 
                // Check if the current date is after the rental end date
                elseif ($currentDate > Carbon::parse($rental->end_date)->toDateString()) {
                    $rental->status = 'Completed';
                    //Log::info('Status: Completed');
                    // Update the car's availability to 1 (available again)
                    $car = $rental->car; // Assuming the relation exists
                    $car->availability = 1;
                    $car->save();
                }
    
                // Save the updated rental status
                $rental->save();

        });
    
        $this->info('Rental status and car availability updated successfully!');
    }
    
}
