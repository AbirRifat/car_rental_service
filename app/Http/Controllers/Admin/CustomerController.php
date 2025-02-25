<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    // 1. View All Customers
    public function index()
    {
        $customers = User::where('role', 'customer')->withCount('rentals')->get();
        return view('admin.index_customer', compact('customers'));
    }

    // 3. Show Form to Add New Customer
    public function create()
    {
        return view('admin.create_customer');
    }

    // 4. Store New Customer
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'role' => 'required|in:customer,admin',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.customers.index')->with('success', 'Customer added successfully.');
    }

    // 2. View Customer Details
    public function show($id)
    {
        $customer = User::with('rentals.car')->findOrFail($id);
        return view('admin.show_customer', compact('customer'));
    }

    // 5. Show Form to Edit Customer
    public function edit($id)
    {
        $customer = User::findOrFail($id);
        return view('admin.create_customer', compact('customer'));
    }

    // 6. Update Customer Details
    public function update(Request $request, $id)
    {
        $customer = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $customer->id,
            'password' => 'nullable|min:8',
            'role' => 'required|in:customer,admin',
        ]);

        $customer->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->filled('password') ? Hash::make($request->password) : $customer->password,
        ]);

        return redirect()->route('admin.customers.index')->with('success', 'Customer updated successfully.');
    }

    // 7. Delete a Customer
    public function destroy($id)
    {
        $customer = User::findOrFail($id);
        $customer->delete();

        return redirect()->route('admin.customers.index')->with('success', 'Customer deleted successfully.');
    }
}
