@extends('admin.layout')

@section('title', 'Customer Details')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Customer Details</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.customers.index') }}">Manage Customers</a></li>
        <li class="breadcrumb-item active">Customer Details</li>
    </ol>
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-user me-1"></i>
                    Customer Information
                </div>
                <div class="card-body">
                    <p><strong>Name:</strong> {{ $customer->name }}</p>
                    <p><strong>Email:</strong> {{ $customer->email }}</p>
                    <p><strong>Role:</strong> {{ ucfirst($customer->role) }}</p>
                    <p><strong>Joined:</strong> {{ $customer->created_at->format('F d, Y') }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-history me-1"></i>
                    Rental History
                </div>
                <div class="card-body">
                    <table id="rentalHistoryTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Rental ID</th>
                                <th>Car</th>
                                <th>Brand</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Total Cost</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customer->rentals as $rental)
                            <tr>
                                <td>{{ $rental->id }}</td>
                                <td>{{ $rental->car->name }}</td>
                                <td>{{ $rental->car->brand }}</td>
                                <td>{{ $rental->start_date }}</td>
                                <td>{{ $rental->end_date }}</td>
                                <td>${{ number_format($rental->total_cost, 2) }}</td>
                                <td>
                                    @if ($rental->status == 'Processing')
                                        <span class="badge bg-warning">Processing</span>
                                    @elseif ($rental->status == 'Approved')
                                        <span class="badge bg-success">Approved</span>
                                    @elseif ($rental->status == 'Ongoing')
                                        <span class="badge bg-info">Ongoing</span>
                                    @elseif ($rental->status == 'Completed')
                                        <span class="badge bg-secondary">Completed</span>
                                    @elseif ($rental->status == 'Canceled')
                                        <span class="badge bg-danger">Canceled</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('admin.customers.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back to Customers
        </a>
        <a href="{{ route('admin.customers.edit', $customer->id) }}" class="btn btn-primary">
            <i class="fas fa-edit me-1"></i> Edit Customer
        </a>
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
        $('#rentalHistoryTable').DataTable({
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search rentals...",
            },
            order: [[3, 'desc']] // Sort by Start Date (descending) by default
        });
    });
</script>
@endpush