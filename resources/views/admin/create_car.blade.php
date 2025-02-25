@extends('admin.layout')

@section('title', 'Create New Car')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Create New Car</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.cars.index') }}">Manage Cars</a></li>
        <li class="breadcrumb-item active">Create New Car</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-car me-1"></i>
            Car Details
        </div>
        <div class="card-body">
            <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Car Name" required>
                            <label for="name">Car Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="brand" name="brand" required>
                                <option value="" selected disabled>Select a brand</option>
                                <option value="Toyota">Toyota</option>
                                <option value="Honda">Honda</option>
                                <option value="BMW">BMW</option>
                                <!-- Add more brands as needed -->
                            </select>
                            <label for="brand">Brand</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="model" name="model" placeholder="Model" required>
                            <label for="model">Model</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="year" name="year" placeholder="Year of Manufacture" required>
                            <label for="year">Year of Manufacture</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="car_type" name="car_type" required>
                                <option value="" selected disabled>Select a car type</option>
                                <option value="SUV">SUV</option>
                                <option value="Sedan">Sedan</option>
                                <option value="Hatchback">Hatchback</option>
                            </select>
                            <label for="car_type">Car Type</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="daily_rent_price" name="daily_rent_price" placeholder="Daily Rent Price" step="0.01" required>
                            <label for="daily_rent_price">Daily Rent Price</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="availability" name="availability" required>
                                <option value="1">Available</option>
                                <option value="0">Not Available</option>
                            </select>
                            <label for="availability">Availability</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Car Image</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-block">Add Car</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back to Car Management
        </a>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endpush

@push('scripts')
<script>
    // Add any custom JavaScript here
</script>
@endpush