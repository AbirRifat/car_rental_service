@extends('admin.layout')

@section('title', 'Edit Rental')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Rental</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.rentals.index') }}">Manage Rentals</a></li>
        <li class="breadcrumb-item active">Edit Rental</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-edit me-1"></i>
            Edit Rental Details
        </div>
        <div class="card-body">
            <form action="{{ route('admin.rentals.update', $rental->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="user_id" name="user_id" required>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $rental->user_id == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }} ({{ $user->email }})
                                    </option>
                                @endforeach
                            </select>
                            <label for="user_id">Select User</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="car_id" name="car_id" required>
                                @foreach ($cars as $car)
                                    <option value="{{ $car->id }}" data-price="{{ $car->daily_rent_price }}" 
                                        {{ $rental->car_id == $car->id ? 'selected' : '' }}>
                                        {{ $car->name }} - {{ $car->brand }} (Daily Rent: ${{ $car->daily_rent_price }})
                                    </option>
                                @endforeach
                            </select>
                            <label for="car_id">Select Car</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="start_date" type="date" name="start_date" value="{{ $rental->start_date }}" required />
                            <label for="start_date">Start Date</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="end_date" type="date" name="end_date" value="{{ $rental->end_date }}" required />
                            <label for="end_date">End Date</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="total_cost" type="number" name="total_cost" value="{{ $rental->total_cost }}" readonly />
                            <label for="total_cost">Total Cost</label>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('admin.rentals.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Back to Rentals
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Update Rental
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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#user_id').select2({
            theme: 'bootstrap-5',
            placeholder: "Select a user"
        });

        $('#car_id').select2({
            theme: 'bootstrap-5',
            placeholder: "Select a car"
        });

        function calculateTotalCost() {
            let selectedCar = $('#car_id').find(':selected');
            let dailyPrice = selectedCar.data('price');
            let startDate = new Date($('#start_date').val());
            let endDate = new Date($('#end_date').val());

            if (!isNaN(startDate) && !isNaN(endDate) && dailyPrice) {
                let timeDiff = endDate.getTime() - startDate.getTime();
                let days = Math.ceil(timeDiff / (1000 * 3600 * 24)) + 1;

                if (days > 0) {
                    let totalCost = days * parseFloat(dailyPrice);
                    $('#total_cost').val(totalCost.toFixed(2));
                } else {
                    $('#total_cost').val('');
                }
            } else {
                $('#total_cost').val('');
            }
        }

        $('#car_id, #start_date, #end_date').on('change', calculateTotalCost);

        // Initial calculation
        calculateTotalCost();
    });
</script>
@endpush