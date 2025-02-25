<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\RentalController as adminRental;
use App\Http\Controllers\Frontend\RentalController as frontendRental;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Frontend\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/rentals', [frontendRental::class, 'index'])->name('rentals');

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
Route::post('/customer/login', [PageController::class, 'customerLogin'])->name('customer_login');
Route::get('/register', [PageController::class, 'register'])->name('register');

Route::get('/password-request', [PageController::class, 'passwordRequest'])->name('password.request');
Route::post('/password-email', [PageController::class, 'sendPasswordReset'])->name('password.email');
Route::post('/verify-otp', [PageController::class, 'verifyOtp'])->name('verify_otp');
Route::post('/password/update', [PageController::class, 'updatePassword'])->name('password.update');

Route::post('/customer-register', [PageController::class, 'storeCustomer'])->name('customer_register');


Route::get('/car/book/{id}', [frontendRental::class, 'create'])->name('frontend.rental')->middleware('auth');
Route::post('/rental/store', [frontendRental::class, 'store'])->name('rental.store')->middleware('auth');

Route::middleware('auth')->get('/my-bookings', [frontendRental::class, 'showAllBookings'])->name('frontend.rentals_index');
Route::delete('/rentals/{id}/cancel', [frontendRental::class, 'cancel'])->name('rentals.cancel');


Route::get('/admin/dashboard', [DashboardController::class, 'index'])
  ->name('admin.dashboard')
  ->middleware('admin'); // Ensure middleware is applied
// Routes for Admin Dashboard

// Manage Cars
// Admin Car Management Routes
Route::prefix('admin')->middleware('admin')->group(function () {
  Route::get('/cars', [CarController::class, 'index'])->name('admin.cars.index');
  Route::get('/create_car', [CarController::class, 'create'])->name('create_car');
  Route::post('/cars', [CarController::class, 'store'])->name('admin.cars.store');
  Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('admin.cars.edit');
  Route::put('/admin/cars/{car}', [CarController::class, 'update'])->name('admin.cars.update');
  Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('admin.cars.destroy');
});


use App\Http\Controllers\AdminRentalController;

Route::prefix('admin')->middleware('admin')->group(function () {
  // View All Rentals
  Route::get('/rentals', [adminRental::class, 'index'])->name('admin.rentals.index');

  // View Rental Details
  Route::get('/rentals/{id}', [adminRental::class, 'show'])->name('admin.rentals.show');

  Route::get('/create_rental', [adminRental::class,'create_rental'])->name('rentals_create');
  Route::post('/rentals', [adminRental::class, 'store'])->name('admin.rentals.store');

  // Update a Rental
  Route::get('/rentals/{id}/edit', [adminRental::class, 'edit'])->name('admin.rentals.edit');
  Route::put('/rentals/{id}', [adminRental::class, 'update'])->name('admin.rentals.update');

  // Delete a Rental
  Route::delete('/rentals/{id}', [adminRental::class, 'destroy'])->name('admin.rentals.destroy');

  // Filter and Search Rentals
  Route::get('/admin/rentals/filter', [adminRental::class, 'filter'])->name('admin.rentals.filter');

  /* // Manage Rental Status
  Route::put('/rentals/{id}/status', [adminRental::class, 'updateStatus'])->name('admin.rentals.updateStatus'); */
  
  // Add the approve route
  Route::patch('admin/rentals/{id}/approve', [adminRental::class, 'approve'])->name('admin.rentals.approve');
  
  // Cancel a Rental (PATCH method for canceling)
  Route::patch('/rentals/{id}/cancel', [adminRental::class, 'cancel'])->name('admin.rentals.cancel');
});


Route::prefix('admin/customers')->middleware('admin')->group(function () {
  Route::get('/', [CustomerController::class, 'index'])->name('admin.customers.index');
  Route::get('/create', [CustomerController::class, 'create'])->name('admin.customers.create');
  Route::post('/store', [CustomerController::class, 'store'])->name('admin.customers.store');
  Route::get('/{id}', [CustomerController::class, 'show'])->name('admin.customers.show');
  Route::get('/{id}/edit', [CustomerController::class, 'edit'])->name('admin.customers.edit');
  Route::put('/{id}', [CustomerController::class, 'update'])->name('admin.customers.update');
  Route::delete('/{id}', [CustomerController::class, 'destroy'])->name('admin.customers.destroy');
});
