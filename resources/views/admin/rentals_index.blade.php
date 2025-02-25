@extends('admin.layout')

@section('title', 'Manage Rentals')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Manage Rentals</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Manage Rentals</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="{{ route('rentals_create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-1"></i> Add New Rental
                </a>
            </div>
            <form action="{{ route('admin.rentals.filter') }}" method="GET" class="mb-4">
                <div class="row g-3">
                    <div class="col-md-3">
                        <input type="text" name="customer_name" class="form-control" placeholder="Customer Name" value="{{ request('customer_name') }}">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="car_name" class="form-control" placeholder="Car Name" value="{{ request('car_name') }}">
                    </div>
                    <div class="col-md-2">
                        <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                    </div>
                    <div class="col-md-2">
                        <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                    </div>
                    <div class="col-md-2">
                        <select name="status" class="form-select">
                            <option value="">Select Status</option>
                            <option value="Processing" {{ request('status') == 'Processing' ? 'selected' : '' }}>Processing</option>
                            <option value="Approved" {{ request('status') == 'Approved' ? 'selected' : '' }}>Approved</option>
                            <option value="Ongoing" {{ request('status') == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
                            <option value="Completed" {{ request('status') == 'Completed' ? 'selected' : '' }}>Completed</option>
                            <option value="Canceled" {{ request('status') == 'Canceled' ? 'selected' : '' }}>Canceled</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-filter me-1"></i> Apply Filter
                    </button>
                    <a href="{{ route('admin.rentals.index') }}" class="btn btn-secondary">
                        <i class="fas fa-undo me-1"></i> Reset
                    </a>
                </div>
            </form>
            <div class="table-responsive">
                <table id="rentalsTable" class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Rental ID</th>
                            <th>Customer Name</th>
                            <th>Car Details</th>
                            <th>Car Model</th>
                            <th>Rental Dates</th>
                            <th>Total Cost</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rentals as $rental)
                        <tr>
                            <td>{{ $rental->id }}</td>
                            <td>{{ $rental->user->name }}</td>
                            <td>{{ $rental->car->name }} ({{ $rental->car->brand.'-'.$rental->car->year}})</td>
                            <td>{{ $rental->car->model}}</td>
                            <td>{{ $rental->start_date }} to {{ $rental->end_date }}</td>
                            <td>${{ number_format($rental->total_cost, 2) }}</td>
                            <td>
                                <span class="badge bg-{{ $rental->status == 'Processing' ? 'warning' : 
                                                        ($rental->status == 'Approved' ? 'success' : 
                                                        ($rental->status == 'Ongoing' ? 'info' : 
                                                        ($rental->status == 'Completed' ? 'secondary' : 'danger'))) }}">
                                    {{ $rental->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.rentals.show', $rental->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.rentals.edit', $rental->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.rentals.destroy', $rental->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    @if ($rental->status === 'Processing')
                                    <form action="{{ route('admin.rentals.approve', $rental->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to approve this rental?')">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.rentals.cancel', $rental->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to cancel this rental?')">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary mb-3">
                <i class="fas fa-arrow-left me-1"></i> Back To Dashboard
            </a>            
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@endpush

@push('scripts')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#rentalsTable').DataTable({
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search rentals...",
            },
            order: [[3, 'desc']] // Sort by Rental Dates (descending) by default
        });
    });

    function confirmDelete() {
        return confirm("Are you sure you want to delete this rental?");
    }
</script>
@endpush