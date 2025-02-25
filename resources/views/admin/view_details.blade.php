@extends('admin.layout')

@section('title', 'Rental Details')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Rental Details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.rentals.index') }}">Manage Rentals</a></li>
        <li class="breadcrumb-item active">Rental Details</li>
    </ol>
    <div class="row">
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-info-circle me-1"></i>
                    Rental Information
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">User Details</h5>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item"><strong>Name:</strong> {{ $rental->user->name }}</li>
                                <li class="list-group-item"><strong>Email:</strong> {{ $rental->user->email }}</li>
                            </ul>
                            
                            <h5 class="card-title">Rental Details</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Start Date:</strong> {{ $rental->start_date }}</li>
                                <li class="list-group-item"><strong>End Date:</strong> {{ $rental->end_date }}</li>
                                <li class="list-group-item"><strong>Total Cost:</strong> ${{ number_format($rental->total_cost, 2) }}</li>
                                <li class="list-group-item">
                                    <strong>Status:</strong> 
                                    <span class="badge bg-{{ $rental->status == 'Processing' ? 'warning' : 
                                                            ($rental->status == 'Approved' ? 'success' : 
                                                            ($rental->status == 'Ongoing' ? 'info' : 
                                                            ($rental->status == 'Completed' ? 'secondary' : 'danger'))) }}">
                                        {{ $rental->status }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="card-title">Car Details</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Name:</strong> {{ $rental->car->name }}</li>
                                <li class="list-group-item"><strong>Brand:</strong> {{ $rental->car->brand }}</li>
                                <li class="list-group-item"><strong>Model:</strong> {{ $rental->car->model }}</li>
                                <li class="list-group-item"><strong>Year:</strong> {{ $rental->car->year }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-car me-1"></i>
                    Car Image
                </div>
                <div class="card-body">
                    <img src="{{ asset('./cars/' . $rental->car->image) }}" alt="{{ $rental->car->name }}" class="img-fluid rounded" />
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('admin.rentals.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back to Rentals
        </a>
        <a href="{{ route('admin.rentals.edit', $rental->id) }}" class="btn btn-primary">
            <i class="fas fa-edit me-1"></i> Edit Rental
        </a>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endpush