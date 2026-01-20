@extends('layout.admin_master')



@section('title', 'Edit Profile - Admin Dashboard')



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
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="admin-profile.html" class="text-decoration-none">Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
            <h2 class="fw-bold mb-1">Edit Profile</h2>
            <p class="text-muted">Update your personal information.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="dashboard-card p-5 h-100">
                <form action="admin-profile.html">
                    <div class="text-center mb-5">
                        <div class="position-relative d-inline-block">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"
                                class="rounded-circle mb-3 border border-3 border-light shadow-sm" alt="Admin Avatar"
                                width="140" height="140" style="object-fit: cover;">
                            <button type="button"
                                class="btn btn-sm btn-primary position-absolute bottom-0 end-0 rounded-circle"
                                style="width: 32px; height: 32px; padding: 0;">
                                <i class="bi bi-camera"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Full Name</label>
                        <input type="text" class="form-control form-control-lg" value="Admin User">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Email Address</label>
                        <input type="email" class="form-control form-control-lg" value="admin@sakan.app">
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Phone Number</label>
                        <input type="tel" class="form-control form-control-lg" value="+1 (555) 123-4567">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">Save Changes</button>
                        <a href="admin-profile.html" class="btn btn-outline-secondary btn-lg">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection


@section('js')


    <script>
        const el = document.getElementById("Profile");
        el.classList.add("active");
    </script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
