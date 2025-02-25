@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Rental Details</h2>

    <div class="card">
        <div class="card-header">
            <h4>{{ $rental->car->name }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Start Date:</strong> {{ $rental->start_date }}</p>
            <p><strong>End Date:</strong> {{ $rental->end_date }}</p>
            <p><strong>Status:</strong> {{ $rental->status }}</p>
            <p><strong>Car Model:</strong> {{ $rental->car->model }}</p>
            <!-- Add more rental details as needed -->

            <a href="{{ route('frontend.rentals.index') }}" class="btn btn-primary">Back to Bookings</a>
        </div>
    </div>
</div>
@endsection
