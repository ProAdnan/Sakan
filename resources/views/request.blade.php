@extends('layout.master')



@section('title', 'Confirm Request')


@section('head')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request to Join - Sakan</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            border-radius: 1rem;
        }

        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
            padding: 0.8rem;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
            border-color: #86b7fe;
        }
    </style>
@endsection


@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body p-5">
                        <h2 class="h3 fw-bold mb-4 text-center">Request to Join Sunny Studio</h2>
                        <p class="text-muted text-center mb-5">
                            Please review your details and select your desired booking period.
                        </p>

                        <form action="#" method="POST">

                            <!-- Student Information (Disabled) -->
                            <div class="mb-4">
                                <h5 class="fw-bold mb-3">Student Information</h5>

                                <div class="mb-3">
                                    <label for="name" class="form-label text-muted small">Full Name</label>
                                    <input type="text" class="form-control bg-light" id="name" value="John Doe"
                                        disabled>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label text-muted small">Email Address</label>
                                    <input type="email" class="form-control bg-light" id="email"
                                        value="john.doe@example.com" disabled>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label text-muted small">Phone Number</label>
                                    <input type="text" class="form-control bg-light" id="phone"
                                        value="+1 234 567 890" disabled>
                                </div>
                            </div>

                            <hr class="my-4">

                            <!-- Booking Period -->
                            <div class="mb-4">
                                <h5 class="fw-bold mb-3">Booking Period</h5>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="start_date" class="form-label fw-medium">Start Date</label>
                                        <input type="date" class="form-control" id="start_date" name="start_date"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="end_date" class="form-label fw-medium">End Date</label>
                                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                                    </div>
                                </div>
                                <div class="form-text mt-2 text-muted">
                                    Please select the dates you wish to stay at this apartment.
                                </div>
                            </div>

                            <!-- Optional Message -->
                            <div class="mb-4">
                                <label for="message" class="form-label fw-medium">Message to Owner (Optional)</label>
                                <textarea class="form-control" id="message" name="message" rows="3"
                                    placeholder="Introduce yourself or ask any questions..."></textarea>
                            </div>

                            <div class="d-grid gap-2 mt-5">
                                <button type="submit" class="btn btn-primary btn-lg fw-bold">Send Request</button>
                                <a href="#" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('js')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Simple client-side validation for dates
        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');

        // Set min date to today
        const today = new Date().toISOString().split('T')[0];
        startDateInput.min = today;

        startDateInput.addEventListener('change', function() {
            endDateInput.min = this.value;
        });
    </script>


@endsection
