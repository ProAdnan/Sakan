@extends('layout.admin_master')

@section('title', 'Admin Dashboard - Sakan')



@section('head')


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <style>
        .sidebar {
            background-color: #0F172A;
        }

        /* Darker sidebar for Admin */
    </style>


@endsection

@section('activation', 'active')




@section('content')


    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="fw-bold mb-1">Admin Dashboard</h2>
            <p class="text-muted">Platform overview and management.</p>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="stats-card h-100">
                <div class="stats-icon blue"><i class="bi bi-people-fill"></i></div>
                <div class="stats-info flex-grow-1">
                    <h3>2.5k</h3>
                    <p class="mb-1">Total Users</p>
                    <div class="d-flex justify-content-between small text-muted border-top pt-1 mt-1">
                        <span>2,000 Students</span>
                        <span>500 Owners</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card h-100">
                <div class="stats-icon text-white" style="background-color: #8B5CF6;"><i class="bi bi-mortarboard-fill"></i>
                </div>
                <div class="stats-info">
                    <h3>45</h3>
                    <p>Universities</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card h-100">
                <div class="stats-icon orange"><i class="bi bi-house-door-fill"></i></div>
                <div class="stats-info">
                    <h3>850</h3>
                    <p>Apartments</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card h-100">
                <div class="stats-icon green"><i class="bi bi-currency-dollar"></i></div>
                <div class="stats-info">
                    <h3>$50k</h3>
                    <p>Total Revenue</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Users -->
    <div class="dashboard-card">
        <div class="card-header">
            <h5>Recent Users</h5>
            <button class="btn btn-sm btn-light">View All</button>
        </div>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Joined</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alice Wonder</td>
                        <td><span class="badge bg-info bg-opacity-10 text-info">Student</span></td>
                        <td>2 mins ago</td>
                    </tr>
                    <tr>
                        <td>Bob Builder</td>
                        <td><span class="badge bg-warning bg-opacity-10 text-warning">Owner</span></td>
                        <td>1 hour ago</td>
                    </tr>
                    <tr>
                        <td>Charlie Brown</td>
                        <td><span class="badge bg-info bg-opacity-10 text-info">Student</span></td>
                        <td>3 hours ago</td>
                    </tr>
                    <tr>
                        <td>Daisy Miller</td>
                        <td><span class="badge bg-info bg-opacity-10 text-info">Student</span></td>
                        <td>5 hours ago</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Recent Listings -->
    <div class="dashboard-card">
        <div class="card-header">
            <h5>New Apartment Listings</h5>
            <button class="btn btn-sm btn-light">View All</button>
        </div>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Property</th>
                        <th>Owner</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://images.unsplash.com/photo-1595846519845-68e298c2edd8?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=60"
                                    class="rounded" width="40" height="40" style="object-fit: cover;">
                                <span class="fw-bold small">Luxury Condo</span>
                            </div>
                        </td>
                        <td>Bob Builder</td>
                        <td>$2200 / full apartment</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://images.unsplash.com/photo-1460317442991-0ec2aa5a1199?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=60"
                                    class="rounded" width="40" height="40" style="object-fit: cover;">
                                <span class="fw-bold small">City Apt</span>
                            </div>
                        </td>
                        <td>Sarah J.</td>
                        <td>$1500 / full apartment</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://images.unsplash.com/photo-1484154218962-a1c00207099b?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=60"
                                    class="rounded" width="40" height="40" style="object-fit: cover;">
                                <span class="fw-bold small">Cozy Room</span>
                            </div>
                        </td>
                        <td>Mike R.</td>
                        <td>$600 / per room</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection



@section('js')

    <script>
        const el = document.getElementById("Overview");
        el.classList.add("active");
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
