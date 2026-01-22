@extends('layouts.admin_master')



@section('title', 'Admins - Admin Dashboard')


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
        <h2 class="fw-bold mb-1">Admins</h2>
        <p class="text-muted">Manage system administrators.</p>
    </div>
    <div class="d-flex gap-2">
        <div class="input-group" style="width: 300px;">
            <input type="text" name="search" class="form-control" placeholder="Search admins...">
            <button type="submit" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
        </div>
    </div>
</div>

<!-- Admins List -->
<div class="dashboard-card">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Super Admin</td>
                    <td class="text-end">
                        <button class="btn btn-sm btn-light text-primary"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-light text-primary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Diana Prince</td>
                    <td class="text-end">
                        <button class="btn btn-sm btn-light text-primary"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-light text-primary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Bruce Wayne</td>
                    <td class="text-end">
                        <button class="btn btn-sm btn-light text-primary"><i class="bi bi-eye"></i></button>
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
    const el = document.getElementById("Admins");
    el.classList.add("active");
</script>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection