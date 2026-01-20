@extends('layout.owner_master')


@section('title', 'Requests - Owner Dashboard')


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


@endsection



@section('content')


    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="fw-bold mb-1">Booking Requests</h2>
            <p class="text-muted">Manage incoming requests from students.</p>
        </div>
    </div>

    <!-- Requests List -->
    <div class="dashboard-card">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Apartment</th>
                        <th>Date</th>

                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 32px; height: 32px;">JD</div>
                                <div>
                                    <div class="fw-bold">John Doe</div>
                                    <small class="text-muted">+1 234 567 890</small>
                                </div>
                            </div>
                        </td>
                        <td>Sunny Studio, Cambridge</td>
                        <td>Oct 12, 2024</td>

                        <td><span class="badge bg-warning bg-opacity-10 text-warning px-3 py-2 rounded-pill">Pending</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-chat-dots"></i>
                                Message</button>
                            <button class="btn btn-sm btn-success"><i class="bi bi-check-lg"></i>
                                Approve</button>
                            <button class="btn btn-sm btn-danger"><i class="bi bi-x-lg"></i> Reject</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 32px; height: 32px;">MK</div>
                                <div>
                                    <div class="fw-bold">Mike Ross</div>
                                    <small class="text-muted">+1 987 654 321</small>
                                </div>
                            </div>
                        </td>
                        <td>Sunny Studio, Cambridge</td>
                        <td>Oct 11, 2024</td>

                        <td><span class="badge bg-warning bg-opacity-10 text-warning px-3 py-2 rounded-pill">Pending</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-chat-dots"></i>
                                Message</button>
                            <button class="btn btn-sm btn-success"><i class="bi bi-check-lg"></i>
                                Approve</button>
                            <button class="btn btn-sm btn-danger"><i class="bi bi-x-lg"></i> Reject</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 32px; height: 32px;">ES</div>
                                <div>
                                    <div class="fw-bold">Emma Smith</div>
                                </div>
                            </div>
                        </td>
                        <td>Modern Loft, Stanford</td>
                        <td>Oct 10, 2024</td>

                        <td><span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">Approved</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-chat-dots"></i>
                                Message</button>
                            <button class="btn btn-sm btn-success"><i class="bi bi-check-lg"></i>
                                Approve</button>
                            <button class="btn btn-sm btn-danger"><i class="bi bi-x-lg"></i> Reject</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection


@section('js')

    <script>
        const el = document.getElementById("Requests");
        el.classList.add("active");
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
