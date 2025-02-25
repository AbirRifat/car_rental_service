<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rental;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\RentalApproved;
use App\Mail\RentalCanceled;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class RentalController extends Controller
{

    // View All Rentals
    public function index()
    {
        // Get all rentals with associated car and user details
        $rentals = Rental::with('car', 'user')->get();

        // Update rental status based on current date
        $rentals->each(function ($rental) {
            $currentDate = now();

            // Only set status if it's not already set
            if (!$rental->status) {
                if ($currentDate->lt($rental->start_date)) {
                    // If the current date is before the start date, set status as Processing
                    $rental->status = 'Processing';
                } elseif ($currentDate->gte($rental->start_date) && $currentDate->lte($rental->end_date)) {
                    // If the current date is between start and end date, set status as Ongoing
                    $rental->status = 'Ongoing';
                } elseif ($currentDate->gt($rental->end_date)) {
                    // If the current date is after the end date, set status as Completed
                    $rental->status = 'Completed';
                }
                $rental->save();
            }
        });

        return view('admin.rentals_index', compact('rentals'));
    }

    public function approve($id)
    {
        // Find the rental by ID
        $rental = Rental::findOrFail($id);

        // Update the status to 'Approved'
        $rental->status = 'Approved';

        $currentDate = Carbon::now()->toDateString(); // Ensure Carbon instance and get the date part only

        // Get the associated car for this rental
        $car = $rental->car;

        if ($currentDate >= Carbon::parse($rental->start_date)->toDateString() && $currentDate <= Carbon::parse($rental->end_date)->toDateString()) {
            // If the current date is between the start and end date, set status to 'Ongoing'
            $rental->status = 'Ongoing';
            
            // Set the car availability to 0 (not available)
            $car->availability = 0;
        } elseif ($currentDate > Carbon::parse($rental->end_date)->toDateString()) {
            // If the current date is after the end date, set status to 'Completed'
            $rental->status = 'Completed';
            
            // Set the car availability to 1 (available)
            $car->availability = 1;
        }

        // Save the updated rental and car
        $rental->save();
        $car->save();

        // Send email to the user
        Mail::to($rental->user->email)->send(new RentalApproved($rental));

        // Redirect back with a success message
        return redirect()->route('admin.rentals.index')->with('success', 'Rental has been approved successfully and email sent.');
    }

    public function cancel($id)
    {
        // Find the rental by ID
        $rental = Rental::findOrFail($id);

        // Update the status to 'Canceled'
        $rental->status = 'Canceled';
        $rental->save();

        // Update the car's availability to 1 (available)
        $car = $rental->car;
        $car->availability = 1;  // Assuming 'availability' is the column for availability status
        $car->save();

        // Send cancellation email to the user
        Mail::to($rental->user->email)->send(new RentalCanceled($rental));
        // Redirect back with a success message
        return redirect()->route('admin.rentals.index')->with('success', 'Rental has been canceled successfully and the car is now available.');
    }




    // View Rental Details
    public function show($id)
    {
        // Eager load both 'car' and 'user' relationships
        $rental = Rental::with(['car', 'user'])->findOrFail($id);

        // Return the rental details with the user and car info
        return view('admin.view_details', compact('rental'));
    }

    public function create_rental()
    {
        $users = User::all();
        $cars = Car::all();
        return view('admin.new-rental-create', compact('users', 'cars'));
    }

    // Store a New Rental
    public function store(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'total_cost' => 'required|numeric',
        ]);

        // Create a new rental record
        $rental = Rental::create([
            'user_id' => $validated['user_id'],
            'car_id' => $validated['car_id'],
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'total_cost' => $validated['total_cost'],
            'status' => 'Approved', // Default status
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.rentals.index')->with('success', 'Rental created successfully!');
    }


    // Edit a Rental
    public function edit($id)
    {
        $rental = Rental::findOrFail($id);
        $users = User::all();
        $cars = Car::all();
        return view('admin.edit_rental', compact('rental', 'users', 'cars'));
    }

    // Update Rental
    public function update(Request $request, $id)
    {
        $rental = Rental::findOrFail($id);

        // Update only the provided fields, keeping the total_cost from the request
        $rental->update([
            'user_id' => $request->user_id,
            'car_id' => $request->car_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_cost' => $request->total_cost, // Save the total cost from the form
        ]);

        return redirect()->route('admin.rentals.index')->with('success', 'Rental updated successfully');
    }


    // Delete Rental
    public function destroy($id)
    {
        $rental = Rental::findOrFail($id);
        $rental->delete();

        return redirect()->route('admin.rentals.index')->with('success', 'Rental deleted successfully');
    }

    // Filter and Search Rentals
    public function filter(Request $request)
    {
        // Build the query with optional filters
        $query = Rental::query()->with(['user', 'car']);

        if ($request->filled('customer_name')) {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->customer_name . '%');
            });
        }

        if ($request->filled('car_name')) {
            $query->whereHas('car', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->car_name . '%');
            });
        }

        if ($request->filled('start_date')) {
            $query->where('start_date', '>=', $request->start_date);
        }

        if ($request->filled('end_date')) {
            $query->where('end_date', '<=', $request->end_date);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $rentals = $query->get();

        return view('admin.rentals_index', compact('rentals'));
    }



    // Update Rental Status
    /* public function updateStatus(Request $request, $id)
    {
        $rental = Rental::findOrFail($id);
        $rental->status = $request->status; // Set the status (Ongoing, Completed, Canceled)
        $rental->save();

        return redirect()->route('admin.rentals.index')->with('success', 'Rental status updated successfully');
    } */
}
