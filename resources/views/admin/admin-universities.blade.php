@extends('layouts.admin_master')


@section('title', 'Universities Management - Admin Dashboard')


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
            <h2 class="fw-bold mb-1">Universities</h2>
            <p class="text-muted">Manage university listings.</p>
        </div>
        <a href="admin-add-university.html" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add
            University</a>
    </div>

    <!-- Universities List -->
    <div class="dashboard-card">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Apartments Nearby</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-primary bg-opacity-10 text-primary rounded d-flex align-items-center justify-content-center"
                                    style="width: 40px; height: 40px;"><i class="bi bi-mortarboard-fill"></i>
                                </div>
                                <span class="fw-bold">Harvard University</span>
                            </div>
                        </td>
                        <td>Cambridge, MA</td>
                        <td>150</td>
                        <td>
                            <a href="admin-edit-university.html" class="btn btn-sm btn-light text-primary"><i
                                    class="bi bi-pencil"></i></a>
                            <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-primary bg-opacity-10 text-primary rounded d-flex align-items-center justify-content-center"
                                    style="width: 40px; height: 40px;"><i class="bi bi-mortarboard-fill"></i>
                                </div>
                                <span class="fw-bold">Stanford University</span>
                            </div>
                        </td>
                        <td>Stanford, CA</td>
                        <td>120</td>
                        <td>
                            <button class="btn btn-sm btn-light text-primary"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-primary bg-opacity-10 text-primary rounded d-flex align-items-center justify-content-center"
                                    style="width: 40px; height: 40px;"><i class="bi bi-mortarboard-fill"></i>
                                </div>
                                <span class="fw-bold">MIT</span>
                            </div>
                        </td>
                        <td>Cambridge, MA</td>
                        <td>95</td>
                        <td>
                            <button class="btn btn-sm btn-light text-primary"><i class="bi bi-pencil"></i></button>
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
        const el = document.getElementById("Universities");
        el.classList.add("active");
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
