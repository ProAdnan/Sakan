@extends('layout.admin_master')



@section('title', 'Apartments Management - Admin Dashboard')

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
    </style>

@endsection



@section('content')

    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="fw-bold mb-1">Apartments</h2>
            <p class="text-muted">Review and manage apartment listings.</p>
        </div>
    </div>

    <!-- Filters -->
    <div class="dashboard-card mb-4 p-3">
        <form action="#" method="GET">
            <div class="row g-3">
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" name="search" class="form-control" placeholder="Search by name...">
                    </div>
                </div>
                <div class="col-md-3">
                    <select name="university" class="form-select" aria-label="Filter by University">
                        <option value="" selected>All Universities</option>
                        <option value="harvard">Harvard University</option>
                        <option value="mit">MIT</option>
                        <option value="nyu">NYU</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="gender" class="form-select" aria-label="Filter by Gender">
                        <option value="" selected>All Genders</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="sort" class="form-select" aria-label="Sort by Price">
                        <option value="" selected>Sort by Price</option>
                        <option value="min-max">Price: Low to High</option>
                        <option value="max-min">Price: High to Low</option>
                    </select>
                </div>
            </div>
        </form>
    </div>

    <!-- Apartments List -->
    <div class="dashboard-card">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Property</th>
                        <th>Owner</th>
                        <th>Location</th>
                        <th>Nearby University</th>
                        <th>Gender</th>
                        <th>Price</th>
                        <th>Action</th>
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
                        <td>Boston, MA</td>
                        <td>Harvard University</td>
                        <td><span class="badge bg-secondary">Male</span></td>
                        <td>$2200</td>
                        <td>
                            <button class="btn btn-sm btn-light text-primary"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button>
                        </td>
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
                        <td>New York, NY</td>
                        <td>NYU</td>
                        <td><span class="badge bg-secondary">Female</span></td>
                        <td>$1500</td>
                        <td>
                            <button class="btn btn-sm btn-light text-primary"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button>
                        </td>
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
                        <td>Cambridge, MA</td>
                        <td>MIT</td>
                        <td><span class="badge bg-secondary">Male</span></td>
                        <td>$600</td>
                        <td>
                            <button class="btn btn-sm btn-light text-primary"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection







@section('js')

    <script>
        const el = document.getElementById("Apartments");
        el.classList.add("active");
    </script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
