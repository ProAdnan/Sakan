@extends('layout.master')




@section('title', 'All Universities - Sakan')



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
    <link rel="stylesheet" href="{{ asset('css/universities.css') }}">


@endsection



@section('content')



    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Sakan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="universities.html">Universities</a></li>
                    <li class="nav-item"><a class="nav-link" href="apartments.html">Apartments</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#contact">Contact Us</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="login.html" class="btn-nav-login">Login</a>
                    <a href="signup.html" class="btn btn-nav-signup">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="page-header mt-5 pt-5">
        <div class="container"><br>
            <h1>All Universities</h1>
            <p>Find student housing near your preferred campus.</p>
        </div>
    </header>

    <!-- Universities Grid -->
    <section class="section pt-0">
        <div class="container">
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card university-card">
                        <img src="https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="Harvard">
                        <div class="card-body">
                            <h5 class="card-title">Harvard University</h5>
                            <div class="university-location">
                                <i class="bi bi-geo-alt"></i> Cambridge, MA
                            </div>
                            <a href="apartments.html?uni=harvard" class="btn btn-outline-primary w-100">View
                                Apartments</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card university-card">
                        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="Stanford">
                        <div class="card-body">
                            <h5 class="card-title">Stanford University</h5>
                            <div class="university-location">
                                <i class="bi bi-geo-alt"></i> Stanford, CA
                            </div>
                            <a href="apartments.html?uni=stanford" class="btn btn-outline-primary w-100">View
                                Apartments</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card university-card">
                        <img src="https://images.unsplash.com/photo-1592280771884-f36b04321743?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="MIT">
                        <div class="card-body">
                            <h5 class="card-title">MIT</h5>
                            <div class="university-location">
                                <i class="bi bi-geo-alt"></i> Cambridge, MA
                            </div>
                            <a href="apartments.html?uni=mit" class="btn btn-outline-primary w-100">View Apartments</a>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card university-card">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="Yale">
                        <div class="card-body">
                            <h5 class="card-title">Yale University</h5>
                            <div class="university-location">
                                <i class="bi bi-geo-alt"></i> New Haven, CT
                            </div>
                            <a href="apartments.html?uni=yale" class="btn btn-outline-primary w-100">View Apartments</a>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card university-card">
                        <img src="https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="UCLA">
                        <div class="card-body">
                            <h5 class="card-title">UCLA</h5>
                            <div class="university-location">
                                <i class="bi bi-geo-alt"></i> Los Angeles, CA
                            </div>
                            <a href="apartments.html?uni=ucla" class="btn btn-outline-primary w-100">View Apartments</a>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card university-card">
                        <img src="https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="Columbia">
                        <div class="card-body">
                            <h5 class="card-title">Columbia University</h5>
                            <div class="university-location">
                                <i class="bi bi-geo-alt"></i> New York, NY
                            </div>
                            <a href="apartments.html?uni=columbia" class="btn btn-outline-primary w-100">View
                                Apartments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection




@section('js')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection


