@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('bookingError'))
            <script>
                alert("{{ session('bookingError') }}");
            </script>
        @endif
        <h2>Book a Car Rental</h2>
        <p><strong>Car Name:</strong> {{ $car->name }}</p>
        <p><strong>Price Per Day:</strong> ${{ $car->daily_rent_price }}</p>

        <form action="{{ route('rental.store') }}" method="POST">
            @csrf
            <input type="hidden" name="car_id" value="{{ $car->id }}">

            <!-- Rental Start Date -->
            <div class="mb-3">
                <label for="start_date" class="form-label">Rental Start Date</label>
                <input type="date" name="start_date" id="start_date" class="form-control" required>
            </div>

            <!-- Rental End Date -->
            <div class="mb-3">
                <label for="end_date" class="form-label">Rental End Date</label>
                <input type="date" name="end_date" id="end_date" class="form-control" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Book Now</button>
        </form>
    </div>
@endsection
