@extends('layouts.frontend')

@section('content')
<div class="bg-light py-5">
    <div class="container">
        <h1 class="text-center mb-5">About Our Car Rental Service</h1>
        
        <div class="row g-4">
            <!-- Card 1: Our Story -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Our Story</h2>
                        <p class="card-text">
                            Founded in 2010, our car rental service has been providing top-notch vehicles and exceptional customer service for over a decade. We started with a small fleet of 10 cars and have grown to offer hundreds of vehicles to suit every need and preference.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Our Mission -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Our Mission</h2>
                        <p class="card-text">
                            We strive to make car rental easy, affordable, and enjoyable for everyone. Our mission is to provide reliable transportation solutions that enhance our customers' travel experiences, whether for business or leisure.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3: Why Choose Us -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Why Choose Us</h2>
                        <ul class="card-text list-unstyled">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Wide range of well-maintained vehicles</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Competitive pricing and transparent fees</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>24/7 customer support</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Convenient online booking system</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Flexible pickup and drop-off locations</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 4: Our Team -->
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Our Team</h2>
                        <p class="card-text">
                            Our dedicated team of professionals is committed to ensuring your rental experience is smooth and satisfactory. From our friendly customer service representatives to our skilled mechanics, we work together to exceed your expectations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

