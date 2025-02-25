@extends('layouts.frontend') <!-- Assuming you have a layout file -->

@section('content')
<div class="container">
    <h1 class="text-center my-4">Available Cars for Rent</h1>
    <div class="row">
        @foreach($cars as $car)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <!-- Car Image -->
                    <img src="{{ asset('./cars/'.$car->image) }}" class="card-img-top" alt="{{ $car->name }}" style="width: 100%; height: 200px; object-fit: cover;">

                    <!-- Card Body -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->name }}</h5>
                        <p class="card-text">
                            <strong>Brand:</strong> {{ $car->brand }}<br>
                            <strong>Model:</strong> {{ $car->model }}<br>
                            <strong>Type:</strong> {{ $car->car_type }}<br>
                            <strong>Year:</strong> {{ $car->year }}
                        </p>
                        <p class="card-text">
                            <strong>Price:</strong> ${{ $car->daily_rent_price }} / day
                        </p>
                    </div>

                    <!-- Card Footer -->
                    <div class="card-footer">
                        @auth
                            <!-- If user is logged in, show "Book Now" button -->
                            <a href="{{ route('frontend.rental', $car->id) }}" class="btn btn-primary w-100">Book Now</a>
                        @else
                            <!-- If user is not logged in, show "Login to Book" button -->
                            <a href="{{ route('login') }}" class="btn btn-primary w-100">Login to Book</a>
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection