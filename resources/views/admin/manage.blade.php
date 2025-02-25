@extends('admin.layout')

@section('title', 'Manage Cars')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Manage Cars</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage Cars</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-1"></i> Back to Dashboard
                    </a>
                    <a href="{{ route('create_car') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-1"></i> Create New Car
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="carTable">
                        <thead class="table-dark text-center">
                            <tr>
                                <th class="text-center">Car Name</th>
                                <th class="text-center">Brand</th>
                                <th class="text-center">Model</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cars as $car)
                                <tr class="text-center">
                                    <td>{{ $car->name }}</td>
                                    <td>{{ $car->brand }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>${{ number_format($car->daily_rent_price, 2) }}</td>
                                    <td>
                                        <span class="badge bg-{{ $car->availability ? 'success' : 'danger' }}">
                                            {{ $car->availability ? 'Available' : 'Not Available' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.cars.edit', $car->id) }}"
                                                class="btn btn-warning btn-sm mx-2">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm mx-2"
                                                    onclick="return confirmDelete()">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="6">No cars found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- Pagination Links -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $cars->links() }}
                </div>
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
            $('#carTable').DataTable({
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search cars...",
                }
            });
        });

        function confirmDelete() {
            return confirm("Are you sure you want to delete this car?");
        }
    </script>
@endpush
