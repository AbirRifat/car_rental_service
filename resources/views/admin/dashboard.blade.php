<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin_dashboard.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" id="sidebarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Sidebar -->
    <nav class="sidebar">
        <ul class="nav flex-column flex-grow-1">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-home"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.cars.index') }}">
                    <i class="fas fa-car"></i> Manage Cars
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.rentals.index') }}">
                    <i class="fas fa-calendar-alt"></i> Manage Rentals
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.customers.index') }}">
                    <i class="fas fa-users"></i> Manage Customers
                </a>
            </li>
        </ul>
        <!-- Logout -->
        <div class="logout-section">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="content">
        <h1 class="mb-4">Welcome to the Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="stat-card">
                    <h3>Total Cars</h3>
                    <p>{{ $totalCars }}</p>
                    <i class="fas fa-car"></i>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-card">
                    <h3>Available Cars</h3>
                    <p>{{ $availableCars }}</p>
                    <i class="fas fa-car-side"></i>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-card">
                    <h3>Total Rentals</h3>
                    <p>{{ $totalRentals }}</p>
                    <i class="fas fa-key"></i>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="stat-card">
                    <h3>Total Earnings</h3>
                    <p>${{ number_format($totalEarnings, 2) }}</p>
                    <i class="fas fa-dollar-sign"></i>
                </div>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="card p-3" id="chartSection">
            <h3>Statistics Overview</h3>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <canvas id="totalCarsChart"></canvas>
                </div>
                <div class="col-md-6 col-sm-12">
                    <canvas id="availableCarsChart"></canvas>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 col-sm-12">
                    <canvas id="totalRentalsChart"></canvas>
                </div>
                <div class="col-md-6 col-sm-12">
                    <canvas id="totalEarningsChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content');

            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('active');
                content.classList.toggle('active');
            });

            function createChart(canvasId, label, data, color) {
                var ctx = document.getElementById(canvasId).getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [label],
                        datasets: [{
                            label: label,
                            data: [data],
                            backgroundColor: color,
                            borderColor: color,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }

            createChart('totalCarsChart', 'Total Cars', {{ $totalCars }}, '#4CAF50');
            createChart('availableCarsChart', 'Available Cars', {{ $availableCars }}, '#2196F3');
            createChart('totalRentalsChart', 'Total Rentals', {{ $totalRentals }}, '#FFC107');
            createChart('totalEarningsChart', 'Total Earnings', {{ $totalEarnings }}, '#FF5722');
        });
    </script>

</body>

</html>
