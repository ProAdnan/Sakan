@extends('layout.admin_master')


@section('title', 'Users Management - Admin Dashboard')



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
            <h2 class="fw-bold mb-1">Users</h2>
            <p class="text-muted">Manage user accounts.</p>
        </div>
        <form action="#" method="GET" class="d-flex gap-2">
            <select name="role" class="form-select" aria-label="Filter by Role" style="width: auto;">
                <option value="" selected>All Roles</option>
                <option value="student">Student</option>
                <option value="owner">Owner</option>
                <option value="admin">Admin</option>
            </select>
            <div class="input-group" style="width: 300px;">
                <input type="text" name="search" class="form-control" placeholder="Search users...">
                <button type="submit" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>

    <!-- Users List -->
    <div class="dashboard-card">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alice Wonder</td>
                        <td>alice@example.com</td>
                        <td><span class="badge bg-info bg-opacity-10 text-info">Student</span></td>
                        <td>+1 (555) 123-4567</td>
                        <td>
                            <a href="admin-view-user.html" class="btn btn-sm btn-light text-primary"><i
                                    class="bi bi-eye"></i></a>
                            <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bob Builder</td>
                        <td>bob@example.com</td>
                        <td><span class="badge bg-warning bg-opacity-10 text-warning">Owner</span></td>
                        <td>+1 (555) 987-6543</td>
                        <td>
                            <button class="btn btn-sm btn-light text-primary"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Charlie Brown</td>
                        <td>charlie@example.com</td>
                        <td><span class="badge bg-info bg-opacity-10 text-info">Student</span></td>
                        <td>+1 (555) 456-7890</td>
                        <td>
                            <button class="btn btn-sm btn-light text-primary"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Diana Prince</td>
                        <td>diana@sakan.app</td>
                        <td><span class="badge bg-danger bg-opacity-10 text-danger">Admin</span></td>
                        <td>+1 (555) 000-0000</td>
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
        const el = document.getElementById("Users");
        el.classList.add("active");
    </script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


@endsection
