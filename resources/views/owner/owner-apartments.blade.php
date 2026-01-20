
@extends('layout.owner_master')


@section('title', 'My Apartments - Owner Dashboard')


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
   <link rel="stylesheet" href="{{ asset('css/global.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css')}}">


@endsection



@section('content')


  <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h2 class="fw-bold mb-1">My Apartments</h2>
                    <p class="text-muted">Manage your property listings.</p>
                </div>
                <a href="owner-add-apartment.html" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add New
                    Apartment</a>
            </div>

            <!-- Apartments List -->
            <div class="dashboard-card">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                        alt="Apt" class="rounded" width="60" height="40" style="object-fit: cover;">
                                </td>
                                <td class="fw-bold">Sunny Studio</td>
                                <td>$800/mo</td>
                                <td>Cambridge, MA</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="owner-edit-apartment.html" class="btn btn-sm btn-light text-primary"><i
                                            class="bi bi-pencil"></i></a>
                                    <button class="btn btn-sm btn-light text-danger"><i
                                            class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                        alt="Apt" class="rounded" width="60" height="40" style="object-fit: cover;">
                                </td>
                                <td class="fw-bold">Modern Loft</td>
                                <td>$1200/mo</td>
                                <td>Stanford, CA</td>
                                <td><span class="badge bg-secondary">Draft</span></td>
                                <td>
                                    <a href="owner-edit-apartment.html" class="btn btn-sm btn-light text-primary"><i
                                            class="bi bi-pencil"></i></a>
                                    <button class="btn btn-sm btn-light text-danger"><i
                                            class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80"
                                        alt="Apt" class="rounded" width="60" height="40" style="object-fit: cover;">
                                </td>
                                <td class="fw-bold">Cozy Room</td>
                                <td>$650/mo</td>
                                <td>Cambridge, MA</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <a href="owner-edit-apartment.html" class="btn btn-sm btn-light text-primary"><i
                                            class="bi bi-pencil"></i></a>
                                    <button class="btn btn-sm btn-light text-danger"><i
                                            class="bi bi-trash"></i></button>
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


