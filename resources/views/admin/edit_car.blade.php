@extends('admin.layout')

@section('title', 'Edit Car')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Car</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.cars.index') }}">Manage Cars</a></li>
        <li class="breadcrumb-item active">Edit Car</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-car me-1"></i>
            Car Details
        </div>
        <div class="card-body">
            <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="car_name" value="{{ $car->name }}" required>
                            <label for="name">Car Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="brand" name="brand" required>
                                <option value="Toyota" {{ $car->brand == 'Toyota' ? 'selected' : '' }}>Toyota</option>
                                <option value="Honda" {{ $car->brand == 'Honda' ? 'selected' : '' }}>Honda</option>
                                <option value="BMW" {{ $car->brand == 'BMW' ? 'selected' : '' }}>BMW</option>
                            </select>
                            <label for="brand">Brand</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}" required>
                            <label for="model">Model</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="year" name="year" value="{{ $car->year }}" required>
                            <label for="year">Year of Manufacture</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="car_type" name="car_type" required>
                                <option value="SUV" {{ $car->car_type == 'SUV' ? 'selected' : '' }}>SUV</option>
                                <option value="Sedan" {{ $car->car_type == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                                <option value="Hatchback" {{ $car->car_type == 'Hatchback' ? 'selected' : '' }}>Hatchback</option>
                            </select>
                            <label for="car_type">Car Type</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="daily_rent_price" name="daily_rent_price" value="{{ $car->daily_rent_price }}" step="0.01" required>
                            <label for="daily_rent_price">Daily Rent Price</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="availability" name="availability_status" required>
                                <option value="Available" {{ $car->availability_status == 'Available' ? 'selected' : '' }}>Available</option>
                                <option value="Not Available" {{ $car->availability_status == 'Not Available' ? 'selected' : '' }}>Not Available</option>
                            </select>
                            <label for="availability">Availability</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload New Car Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="current_image" class="form-label">Current Car Image</label>
                            <div class="card">
                                <div class="card-body">
                                    @if($car->image)
                                        <img src="{{ asset('./cars/' . $car->image) }}" alt="Car Image" class="img-fluid rounded">
                                    @else
                                        <p class="text-muted mb-0">No image available</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Back to Car Management
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Update Car
                        </button>
                    </div>
                </div>
            </form>
        </div>
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