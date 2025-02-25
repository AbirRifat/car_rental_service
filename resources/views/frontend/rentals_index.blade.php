<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Bookings - {{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/frontend_rental_index.css') }}">
</head>

<body>
    <div class="container">
        <div class="back-btn">
            <a href="{{ route('home') }}" class="btn btn-primary">
                <i class="fas fa-arrow-left me-2"></i>Back to Homepage
            </a>
        </div>

        <div class="card">
            <div class="card-header text-center">
                <i class="fas fa-book me-2"></i>My Bookings
            </div>
            <div class="card-body">
                @if ($rentals->isEmpty())
                    <p class="text-center">You have no bookings.</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Car Name</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Car Type</th>
                                    <th>Daily Rent Price</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Total Cost</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rentals as $rental)
                                    <tr>
                                        <td>{{ $rental->user->name }}</td>
                                        <td>{{ $rental->user->email }}</td>
                                        <td>{{ $rental->car->name }}</td>
                                        <td>{{ $rental->car->brand }}</td>
                                        <td>{{ $rental->car->model }}</td>
                                        <td>{{ $rental->car->car_type }}</td>
                                        <td>${{ number_format($rental->car->daily_rent_price, 2) }}</td>
                                        <td>{{ $rental->start_date }}</td>
                                        <td>{{ $rental->end_date }}</td>
                                        <td>${{ number_format($rental->total_cost, 2) }}</td>
                                        <td>
                                            @php
                                                $statusClass =
                                                    [
                                                        'Processing' => 'bg-warning text-dark',
                                                        'Approved' => 'bg-success',
                                                        'Ongoing' => 'bg-info',
                                                        'Completed' => 'bg-secondary',
                                                        'Canceled' => 'bg-danger',
                                                    ][$rental->status] ?? '';
                                            @endphp
                                            <span class="badge {{ $statusClass }}">{{ $rental->status }}</span>
                                        </td>
                                        <td>
                                            @if (\Carbon\Carbon::parse($rental->start_date)->gt(\Carbon\Carbon::now()))
                                                <form action="{{ route('rentals.cancel', $rental->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to cancel this booking?');">
                                                        <i class="fas fa-times me-1"></i>Cancel
                                                    </button>
                                                </form>
                                            @else
                                                <span class="text-muted">Not Allowed</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
