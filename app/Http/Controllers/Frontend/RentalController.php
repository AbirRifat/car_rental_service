<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch only available cars
        $cars = Car::where('availability', true)->get();

        return view('frontend.rental', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        // Find the car
        $car = Car::findOrFail($id);

        // Return the booking view with car details
        return view('frontend.cus_rental', compact('car'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Retrieve user ID from session
        $userId = session('user_id');

        // Validate input
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Retrieve car details
        $car = Car::findOrFail($request->car_id);

        // Calculate the number of days (including both start and end date)
        $startDate = \Carbon\Carbon::parse($request->start_date);
        $endDate = \Carbon\Carbon::parse($request->end_date);
        $days = $startDate->diffInDays($endDate) + 1;

        // Calculate total cost
        $totalCost = $car->daily_rent_price * $days;

        // Check car availability
        $isBooked = Rental::where('car_id', $request->car_id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                    ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
                    ->orWhere(function ($query) use ($request) {
                        $query->where('start_date', '<=', $request->start_date)
                            ->where('end_date', '>=', $request->end_date);
                    });
            })->exists();

            if ($isBooked) {
                return redirect()->back()->with('bookingError', 'This car is already booked for the selected period.');
            }

        // Create the rental record
        Rental::create([
            'user_id' => $userId,
            'car_id' => $request->car_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_cost' => $totalCost,
        ]);

    
        // Fetch all cars for frontend.home view
        $cars = Car::all();

        return view('frontend.home', compact('cars'))->with('success', 'Car booked successfully.');
    }



    public function showAllBookings()
    {
        // Get all rentals for the logged-in user with related user and car details
        $rentals = Rental::where('user_id', Auth::id())
            ->with(['user', 'car']) // Eager load related models
            ->get();

        return view('frontend.rentals_index', compact('rentals'));
    }
    public function cancel($id)
    {
        $rental = Rental::where('id', $id)->where('user_id', Auth::id())->first();

        if (!$rental) {
            return back()->with('error', 'Booking not found.');
        }

        // Check if the rental start date is in the future
        if (\Carbon\Carbon::parse($rental->start_date)->lte(\Carbon\Carbon::now())) {
            return back()->with('error', 'You cannot cancel a booking that has already started.');
        }

        // Update car availability to 1
        $rental->car->update(['availability' => 1]);

        // Delete the rental record
        $rental->delete();

        return back()->with('success', 'Booking cancelled successfully.');
    }


    /**
     * Display the specified resource.
     */
    // Show a specific rental booking
    public function show(Rental $rental)
    {
        // Ensure the rental belongs to the authenticated user
        if ($rental->user_id != Auth::id()) {
            return redirect()->route('frontend.rentals_index')->with('error', 'You do not have permission to view this booking.');
        }

        // Pass the rental to the view
        return view('frontend.rentals_show', compact('rental'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
