@extends('layouts.frontend')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Welcome to Our Car Rental Service</h1>

        <!-- Filter Section -->
        <div class="card shadow-sm mb-4">
            <div class="card-body bg-light">
                <h5 class="card-title mb-3">
                    <i class="fas fa-filter me-2"></i>Filter Your Search
                </h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="carType" class="form-label">Car Type</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-car"></i></span>
                            <select id="carType" class="form-select">
                                <option value="">All Types</option>
                                <option value="SUV">SUV</option>
                                <option value="Sedan">Sedan</option>
                                <option value="Hatchback">Hatchback</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="brand" class="form-label">Brand</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-trademark"></i></span>
                            <select id="brand" class="form-select">
                                <option value="">All Brands</option>
                                <option value="Toyota">Toyota</option>
                                <option value="Honda">Honda</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="price" class="form-label">Max Daily Rent</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                            <input type="number" id="price" class="form-control" placeholder="Enter amount">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Car Listing -->
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-3 g-4" id="carContainer">
                @foreach ($cars as $car)
                    <div class="col car-item" data-type="{{ $car->car_type }}" data-brand="{{ $car->brand }}" data-price="{{ $car->daily_rent_price }}">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('./cars/' . $car->image) }}" class="card-img-top" alt="{{ $car->name }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title mb-3">{{ $car->name }}</h5>
                                <p class="card-text mb-3">
                                    <span class="badge bg-primary me-2">{{ $car->car_type }}</span>
                                    <span class="badge bg-secondary">{{ $car->brand }}</span>
                                </p>
                                <p class="card-text mb-3">
                                    <strong>Daily Rate:</strong> ${{ number_format($car->daily_rent_price, 2) }}
                                </p>
                                <div class="mt-auto d-flex justify-content-between align-items-center">
                                    <a href="#" class="btn btn-outline-primary view-details" data-id="{{ $car->id }}" data-image="{{ $car->image }}" data-name="{{ $car->name }}" data-brand="{{ $car->brand }}" data-model="{{ $car->model }}" data-type="{{ $car->car_type }}" data-year="{{ $car->year }}" data-price="{{ $car->daily_rent_price }}">
                                        <i class="fas fa-info-circle me-1"></i> View Details
                                    </a>
                                    @auth
                                        <a href="{{ route('frontend.rental', $car->id) }}" class="btn btn-primary">
                                            <i class="fas fa-book me-1"></i> Book Now
                                        </a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-primary">
                                            <i class="fas fa-sign-in-alt me-1"></i> Login to Book
                                        </a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Modal for Car Details -->
        <div class="modal fade" id="carDetailsModal" tabindex="-1" aria-labelledby="carDetailsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="carDetailsModalLabel">
                            <i class="fas fa-car me-2"></i>Car Details
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="col-md-6 mb-3">
                                    <img id="modalCarImage" alt="Car Image"
                                        class="img-fluid rounded" style="width: 100%; height: 150px;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <i class="fas fa-car-side text-primary me-2"></i>
                                        <strong>Name:</strong> <span id="modalCarName"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-trademark text-primary me-2"></i>
                                        <strong>Brand:</strong> <span id="modalCarBrand"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-info-circle text-primary me-2"></i>
                                        <strong>Model:</strong> <span id="modalCarModel"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-tags text-primary me-2"></i>
                                        <strong>Type:</strong> <span id="modalCarType"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-calendar-alt text-primary me-2"></i>
                                        <strong>Year:</strong> <span id="modalCarYear"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-dollar-sign text-primary me-2"></i>
                                        <strong>Daily Rent:</strong> $<span id="modalCarPrice"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        @auth
                        <a href="#" id="modalBookNow" data-id="{{ $car->id }}" class="btn btn-primary">
                            <i class="fas fa-book me-2"></i>Book Now
                        </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">
                                <i class="fas fa-sign-in-alt me-2"></i>Login to Book
                            </a>
                        @endauth
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-times me-2"></i>Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/frontend.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
