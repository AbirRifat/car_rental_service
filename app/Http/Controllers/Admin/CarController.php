<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Add this line

class CarController extends Controller
{
    // Display all cars and manage car operations
    public function index()
    {
        // Get all cars from the database
        $cars = Car::simplePaginate(15);

        // Return the view with cars data
        return view('admin.manage', compact('cars'));
    }

    public function create()
    {
        // Return the create_car view
        return view('admin.create_car');
    }

    public function store(Request $request)
    {
        // Construct the image path format
        $imagePath = $request->file('image')
            ? $request->car_type . '/' . $request->brand . '/' . $request->file('image')->getClientOriginalName()
            : null;

        // Store in the database
        $car = Car::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'model' => $request->model,
            'year' => $request->year,
            'car_type' => $request->car_type,
            'daily_rent_price' => $request->daily_rent_price,
            'availability' => $request->availability,
            'image' => $imagePath, // Save only the formatted file path
        ]);

        // Redirect back with success message
        return redirect()->route('admin.cars.index')->with('success', 'Car Added successfully!');
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('admin.edit_car', compact('car'));
    }


    // Update an existing car
    public function update(Request $request, $id)
    {
        // Find the car by ID
        $car = Car::findOrFail($id);

        // Prepare data for update
        $updateData = [];

        // Check and update only the fields that have changed
        if ($request->has('name')) {
            $updateData['name'] = $request->name;
        }
        if ($request->has('model')) {
            $updateData['model'] = $request->model;
        }
        if ($request->has('car_type')) {
            $updateData['car_type'] = $request->car_type;
        }
        if ($request->has('brand')) {
            $updateData['brand'] = $request->brand;
        }
        if ($request->has('year')) {
            $updateData['year'] = $request->year;
        }
        if ($request->has('daily_rent_price')) {
            $updateData['daily_rent_price'] = $request->daily_rent_price;
        }
        if ($request->has('availability')) {
            $updateData['availability'] = $request->availability;
        }

        // Handle the image field separately
        if ($request->hasFile('image')) {
            // Construct the image path format
            $imagePath = $request->car_type . '/' . $request->brand . '/' . $request->file('image')->getClientOriginalName();
            $updateData['image'] = $imagePath;  // Update image path
        }

        // Update the car with the new values
        $car->update($updateData);

        // Redirect back with success message
        return redirect()->route('admin.cars.index')->with('success', 'Car updated successfully!');
    }


    // Delete a car
    public function destroy($id)
    {
        // Find the car by ID
        $car = Car::findOrFail($id);

        // Delete the car from the database
        $car->delete();

        // Redirect back to the car management page
        return redirect()->route('admin.cars.index')->with('success', 'Car deleted successfully!');
    }
}
