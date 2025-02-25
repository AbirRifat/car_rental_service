<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Get the required statistics for the dashboard
        $totalCars = Car::count();
        $availableCars = Car::where('availability', true)->count();
        $totalRentals = Rental::count();
        $totalEarnings = Rental::sum('total_cost');

        return view('admin.dashboard', compact('totalCars', 'availableCars', 'totalRentals', 'totalEarnings'));
    }
}

